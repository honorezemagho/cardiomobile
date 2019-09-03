<?php

namespace App\Http\Controllers;

use App\Available;
use App\Mail\UrgenceCaisseMail;
use App\Payment;
use App\Quartier;
use App\Transaction;
use App\Urgence;
use App\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Urgenceformreceivingclinique extends Controller
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


        Urgence::create(['name' => $request['name'], 'ville_id' => $request['ville_id'],
            'quartier_id' => $request['quartier_id'],
            'phone' => $request['phone'], 'description' => $request['description'],
            'transaction_id' => $request['transaction_id'], 'urgence_type' => $request['urgence_type']
            , 'available_id' => $request['available_id'], 'payment_method' => $request['payment_method']]);

        $request['ville'] = Ville::where('id', $request['ville_id'])->value('name');
        $request['quartier'] = Quartier::where('id', $request['quartier_id'])->value('name');
        $request['meeting_datetime'] = Available::where('id', $request['available_id'])->value('datetime');
        $request['transaction'] =  Transaction::where('id', $request['transaction_id'])->value('transaction');
        $request['payment_amount'] =  Payment::where('id', 2)->value('price');

        $data = $request->all();

        Available::where('id', $request['available_id'])->update([ 'expires' => 1]);


    if($request['payment_method'] == 'caisse'){



     Mail::to(['honorezemagho@yahoo.fr'])->bcc('honorezemagho@gmail.com', 'zankafred@gmail.com')
            ->send(new UrgenceCaisseMail($data));

        if (Mail::failures()) {
            $header = " Contacter Un Médecin";
            $messages = "Désolé, une erreur est survenue, veuillez réessayer";
            return view('Confirm.status', compact('messages', 'header'));
        }

        else{
            $header = " Contacter Un Médecin";
            $messages = "Merci de nous avoir contactés, nous vous répondrons sous peu";
            return view('Confirm.status', compact('messages', 'header'));
        }
    }

    else{


        return view('payments.now', compact('data'));

    }

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
