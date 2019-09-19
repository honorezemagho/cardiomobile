<?php

namespace App\Http\Controllers;

use App\Available;
use App\Mail\UrgenceCaisseMail;
use App\Medecin;
use App\Payment;
use App\Quartier;
use App\Transaction;
use App\Urgence;
use App\Ville;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UrgenceFormReceivingCliniqueController extends Controller
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

        $transaction_current = Transaction::where('id',  $request['transaction_id'])->value('transaction');
        $lieu_ville = Ville::where('id', $request['ville_id'])->value('name');
        $lieu_quartier= Quartier::where('id', $request['quartier_id'])->value('name');
        $request['ville'] = $lieu_ville;
        $request['quartier'] = $lieu_quartier;
        $request['transaction'] = $transaction_current;

        DB::table('availables')
            ->where('id', $request['available_id'])
            ->update(['expires' => 1]);


        $request['medecin_id'] = Available::where('id', $request['available_id'])->value('medecin_id');

        $locale = 'fr_FR';
        $request['datetime'] = Available::where('id', $request['available_id'])->value('datetime');
        $request['patient_datetime'] =  $patient_date = Carbon::parse($request['datetime'] )->toDateTimeString();
        $request['meeting_date'] = Carbon::parseFromLocale($patient_date,$locale)->IsoFormat(' Do MMMM YYYY');
        $request['meeting_time']= Carbon::parseFromLocale( $patient_date,$locale)->toTimeString();

        $data = $request->all();

        Urgence::create(['name' => $request['name'], 'ville_id' => $request['ville_id'],
            'quartier_id' => $request['quartier_id'], 'phone' => $request['phone'],
            'description' => $request['description'], 'transaction_id' => $request['transaction_id'],
            'available_id' => $request['available_id'], 'speciality_id' => $request['speciality_id'],
            'medecin_id' => $request['medecin_id'], 'urgence_type' => $request['urgence_type']]);

        Available::where('id', $request['available_id'])->update([ 'expires' => 1]);

        $medecin_phone = Medecin::where('id', $request['medecin_id'])->value('phone');

        Mail::to(['honorezemagho@yahoo.fr'])->bcc('honorezemagho@gmail.com', 'zankafred@gmail.com')
            ->send(new UrgenceCaisseMail($data));

        if (Mail::failures()) {
            $header = " Contacter Un Médecin";
            $messages = "Désolé, une erreur est survenue, veuillez réessayer";
            return view('Confirm.status', compact('messages', 'header'));
        }

        else{


            $send_message = "Un rendez-vous a été demandé, veuillez le confirmer s'il vous plaît";
            $send = "http://5.39.75.139:22140/message?user=digis&pass=digis123&from=8002&to=+237$medecin_phone
        &text=".$send_message."&dlrreq=1";

            $client = new Client();

            /// Create a request
            $request = $client->get($send);
            // Get the actual response without headers
            $response = $request->getBody();

            $header = " Contacter Un Médecin";
            $messages = "Merci de nous avoir contactés, nous vous répondrons sous peu";
            return view('Confirm.status', compact('messages', 'header'));
        }
    }


    public function save(Request $request)
    {
        //
        $data = $request->all();

        if($request['speciality_id'] == 1){

            $disponibility = Available::where('type_id', 1)
                ->where('speciality_id', 1)
                ->where('expires', 0)
                ->orderBy('datetime', 'asc')
                ->get();

            return view('urgence.cardiologue', compact('disponibility', 'data'));

        }

        elseif($request['speciality_id'] == 2){

            $disponibility = Available::where('type_id', 1)
                ->where('speciality_id', 2)
                ->where('expires', 0)
                ->orderBy('datetime', 'asc')
                ->get();

            return view('urgence.neurologue', compact('disponibility', 'data'));

        }

        elseif($request['speciality_id'] == 3){


            $disponibility = Available::where('type_id', 1)
                ->where('speciality_id', 3)
                ->where('expires', 0)
                ->orderBy('datetime', 'asc')
                ->get();

            return view('urgence.pneumologue', compact('disponibility', 'data'));
        }

        elseif($request['speciality_id'] == 4){

            $disponibility = Available::where('type_id', 1)
                ->where('speciality_id', 4)
                ->where('expires', 0)
                ->orderBy('datetime', 'asc')
                ->get();

            return view('urgence.diabetologue', compact('disponibility', 'data'));

        }

        elseif($request['speciality_id'] == 5){

            $disponibility = Available::where('type_id', 1)
                ->where('speciality_id', 5)
                ->where('expires', 0)
                ->orderBy('datetime', 'asc')
                ->get();


            return view('urgence.nephrologue', compact('disponibility','data'));

        }

       else{
        echo "Aucune Spécialitée n'a été sélectionnée";
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


    public function cardiologue(Request $request)
    {
        //
        $data = $request->all();

       $disponibility = Available::where('type_id', 1)
            ->where('speciality_id', 1)
            ->where('expires', 0)
            ->orderBy('datetime', 'asc')
            ->simplePaginate(5);

        return view('urgence.cardiologue', compact('disponibility', 'data'));
    }


}
