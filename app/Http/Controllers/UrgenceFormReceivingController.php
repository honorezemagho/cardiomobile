<?php

namespace App\Http\Controllers;

use App\Mail\UrgenceContactMail;
use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Ville;
use App\Quartier;
use App\Medecin;
use App\Http\Requests\ContactMedecinRequest;
use App\Urgence;
use Illuminate\Http\Resources\Json\JsonResource;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;

class UrgenceFormReceivingController extends Controller
{
    //
    public function store(ContactMedecinRequest $request)
    {

        $header = 'Choisir le type de Rendez - Vous';

        $urgence_info = $request->all();
        $str = rand();
        $fuel= hash("sha256", $str);

        $transaction = Transaction::create(['transaction' => $fuel]);

        $request['transaction_id'] = $transaction->id;

        $request['datetime'] = Carbon::parse($request['datetime']);

        $datetime = $request['datetime']->toDateTimeString();;

        Urgence::create(['name' => $request['name'], 'ville_id' => $request['ville_id'], 'quartier_id' => $request['quartier_id'],
            'phone' => $request['phone'], 'description' => $request['description'], 'transaction_id' => $request['transaction_id'],
            'meeting_datetime' => $request['datetime']]);

        return view('Confirm.urgenceformreceive', compact('urgence_info', 'header', 'transaction', 'datetime'));


    }
}
