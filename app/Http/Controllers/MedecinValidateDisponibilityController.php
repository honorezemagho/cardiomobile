<?php

namespace App\Http\Controllers;

use App\Available;
use App\Medecin;
use App\Transaction;
use App\Urgence;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;


class MedecinValidateDisponibilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function update(Request $request, $operation, $matricule, $medecin_phone)
    {
        //


        $message = [
            'transaction.required' => 'Le Numéro de Transaction est requis!',
            'matricule.required' => 'Le Matricule est requis!',
            'medecin_phone.required' => 'Votre Numéro de téléphone est requis!',
        ];

        /* $transaction = Transaction::Where('transaction', $request['transaction'])->exists();*/

        $transactions = Transaction::all();

        $fielde = '';

        foreach( $transactions as $key =>$transaction){

            $fielde .= $transaction->transaction.',';
        }
        $input = $request->all();

        $request['transaction'] = $operation;
        $request['matricule'] = $matricule;
        $request['medecin_phone'] = $medecin_phone;

        $data = $request->validate([
            'transaction' => 'required',
            'matricule' => 'required',
            'medecin_phone' => 'required',
        ], $message);


        $ids = Transaction::where('transaction', $request['transaction'])->value('id');
        $expires = Urgence::where('transaction_id', $ids)->value('expires');

        $id = Urgence::where('transaction_id', $ids)->value('id');
        $locale = 'fr_FR';

        $patient_name = Urgence::where('transaction_id', $ids)->value('name');
        $patient_datetime_first = Urgence::where('transaction_id', $ids)->value('available_id');

        $patient_datetime_second = Available::where('id', $patient_datetime_first)->value('datetime');
        $patient_datetime = Carbon::parse($patient_datetime_second)->toDateTimeString();

       $patient_date = Carbon::parseFromLocale($patient_datetime,$locale)->IsoFormat(' Do MMMM YYYY');
        $patient_heure = Carbon::parseFromLocale($patient_datetime,$locale)->toTimeString();

        $patient_phone = Urgence::where('transaction_id', $ids)->value('phone');
        $send_message = 'Bonjour M.'.$patient_name .', votre rendez-vous a été confirmé à la clinique Coeur et Vie le '
            . $patient_date .' à '. $patient_heure .' '.' Pour toute  assistance, veuillez contacter le  676667626';


        if (Transaction::Where('transaction', $request['transaction'])->exists() &
            Medecin::Where('matricule', $request['matricule'])->exists() &
            Urgence::Where('transaction_id', $ids)->exists() & $expires == 0)
        {

            DB::table('urgences')
                ->where('id', $id)
                ->update(['medecin_matricule' => $request['matricule'], 'medecin_phone' => $request['medecin_phone'],
                    'expires' => 1]);

            $send = "http://5.39.75.139:22140/message?user=digis&pass=digis123&from=8002&to=+237$patient_phone
        &text=".$send_message."&dlrreq=1";

            $client = new \GuzzleHttp\Client();

              /// Create a request
            $request = $client->get($send);
            // Get the actual response without headers
            $response = $request->getBody();


            $header = " Confirmation de disponibilité";
            $messages = "Merci pour votre disponibilité, Docteur DJOMOU";
            return view('Confirm.status', compact('messages', 'header'));
        }


        elseif($expires == 1){

            $header = " Confirmation de disponibilité";
            $messages = "Désolé, cette Opération n'est plus valide";
            return view('Confirm.status', compact('messages', 'header'));

        }


        else
        {
            $header = " Confirmation de disponibilité";
            $messages = "Paramètres Incorrects, Veuilllez réessayer";
            return view('Confirm.status', compact('messages', 'header'));
        }

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
