<?php

namespace App\Http\Controllers;

use App\Mail\UrgenceContactMail;
use App\Transaction;
use Illuminate\Http\Request;
use App\Ville;
use App\Quartier;
use App\Medecin;
use App\Http\Requests\ContactMedecinRequest;
use App\Urgence;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;



class ClientContactMedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('urgence.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'transaction' => 'required|numeric',
        ]);

        Urgence::Where(['transaction_id' => $request['transaction']])->update(['urgence_type' => $request['domicile']]);

        $transaction =  Urgence::where('transaction_id', $request['transaction']);
        $transaction_current = Transaction::where('id',  $request['transaction'])->value('transaction');
        $lieu_ville = Ville::where('id', $transaction->value('ville_id'))->value('name');
        $lieu_quartier= Ville::where('id', $transaction->value('quartier_id'))->value('name');

        $locale = 'fr_FR';

        $request['name'] = $name = $transaction->value('name');
        $request['phone'] = $phone = $transaction->value('phone');
        $request['ville'] = $ville = $lieu_ville;
        $request['quartier'] = $quartier = $lieu_quartier;
        $request['datetime'] = $datetime =  Carbon::parseFromLocale($transaction->value('meeting_datetime'),$locale )->IsoFormat('LLLL');
        $request['description'] = $description = $transaction->value('description');
        $request['transaction'] = $transaction_cause = $transaction_current;

        $data = $request->all();

        Mail::to(['zankafred@gmail.com'])->bcc('honorezemagho@gmail.com')->send(new UrgenceContactMail($data));

        if (Mail::failures()) {
            $header = " Contacter Un Médecin";
            $messages = "Désolé, une erreur est survenue, veuillez réessayer";
            return view('Confirm.status', compact('messages', 'header'));
        }

        else{
            $header = " Contacter Un Médecin";
            $messages = "Votre rendez-vous a bien été pris en compte, vous recevrez une confirmation par message";
            return view('Confirm.status', compact('messages', 'header'));
        }


/*

        $ids = Medecin::Where('quartier_id', $request['quartier_id']);
        $medecins = $ids->get(['name', 'email', 'id', 'phone', 'matricule']);


$string = "";
$transactions = "";


        $str = rand();
        $fuel= hash("sha256", $str);
        $transaction = Transaction::create(['transaction' => $fuel]);

        $request['transaction_id'] = $transaction->id;

        $thanks = Transaction::Where('id' , $request['transaction_id'])->get('transaction');


        foreach( $thanks as $key =>$thank){
            $transactions .= $thank->transaction;
        }


    foreach($medecins as $medecin){

        $request['transaction'] = $transactions;
        $data = $request->all();

        $string .= $medecin;


           Mail::to($medecin->email)->send(new UrgenceContactMail($data, $string));
    }

     if (Mail::failures()) {
         $header = " Contacter Un Médecin";
         $messages = "Désolé, une erreur est survenue, veuillez réessayer";
         return view('Confirm.status', compact('messages', 'header'));
        }
     else{
         $header = " Contacter Un Médecin";
         $messages = "Merci de nous avoir contactés, nous vous répondrons sous peu";
         return view('Confirm.status', compact('messages', 'header'));
        }*/

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
