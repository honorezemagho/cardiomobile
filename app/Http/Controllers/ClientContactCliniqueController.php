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

class ClientContactCliniqueController extends Controller
{
    //
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'transaction' => 'required|numeric',
        ]);

        Urgence::Where(['transaction_id' => $request['transaction']])
            ->update(['urgence_type' => $request['clinique']]);

        $transaction =  Urgence::where('transaction_id', $request['transaction']);
        $transaction_current = Transaction::where('id',  $request['transaction'])->value('transaction');
        $lieu_ville = Ville::where('id', $transaction->value('ville_id'))->value('name');
        $lieu_quartier= Ville::where('id', $transaction->value('quartier_id'))->value('name');

        $locale = 'fr_FR';

        $request['name'] = $name = $transaction->value('name');
        $request['phone'] = $phone = $transaction->value('phone');
        $request['ville'] = $ville = $lieu_ville;
        $request['quartier'] = $quartier = $lieu_quartier;
        $request['datetime'] = $datetime =  Carbon::parseFromLocale($transaction->value('meeting_datetime'),$locale)
            ->IsoFormat('LLLL');
        $request['description'] = $description = $transaction->value('description');
        $request['transaction'] = $transaction_cause = $transaction_current;

        $data = $request->all();

        Mail::to(['zankafred@gmail.com','cardiomobile@mydigis.com', 'honorezemagho@yahoo.fr'])->bcc('honorezemagho@gmail.com')
            ->send(new UrgenceContactMail($data));

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
}
