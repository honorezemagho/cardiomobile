<?php

namespace App\Http\Controllers;

use App\Available;
use App\Http\Requests\TestClientContactMedecinRequest;
use App\Mail\UrgenceContactMail;
use App\Payment;
use App\Quartier;
use App\Transaction;
use App\Urgence;
use App\Ville;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestClientContactCliniqueController extends Controller
{
    //
    public function store(TestClientContactMedecinRequest $request)
    {
        $str = rand();
        $fuel= hash("sha256", $str);

     /*   $request['meeting_datetime'] = Carbon::parse($request['meeting_datetime']);*/

       /* $datetime = $request['meeting_datetime']->toDateTimeString();*/

        $lieu_ville = Ville::where('id', $request['ville_id'])->value('name');
        $lieu_quartier= Quartier::where('id',$request['quartier_id'])->value('name');

     /*   $locale = 'fr_FR';*/

        $request['ville'] = $ville = $lieu_ville;
        $request['quartier'] = $quartier = $lieu_quartier;

        $request['transaction'] = $fuel;

        $transaction = Transaction::create(['transaction' => $fuel]);

        $request['transaction_id'] = $transaction->id;

       /* $request['meeting_datetime'] = Carbon::parseFromLocale($datetime,$locale)->IsoFormat('LLLL');*/
        $request['available1'] = Available::where([['expires', 0] , ['medecin_id', 3]])->get();

       /* $request['available2'] = Available::where([['expires', 0], ['quartier_id',$request['quartier_id'],
            ['medecin_id','!', 3]]])->get();*/

        $request['available2'] = Available::where('expires', 0)
           ->where('quartier_id', $request['quartier_id'])
           ->where('medecin_id', '!=', 3)
        ->get();

        $request['payment_amount'] =  Payment::where('id', 2)->value('price');
        $data = $request->all();




    if($request['urgence_type'] == 'clinique'){
    return view('urgence_type.clinique', compact('data'));
    }elseif($request['urgence_type'] == 'domicile'){
    return view('urgence_type.domicile', compact('data'));
    }



      /*Mail::to(['zankafred@gmail.com','cardiomobile@mydigis.com', 'honorezemagho@yahoo.fr'])->bcc('honorezemagho@gmail.com')
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
        }*/



    }
}
