<?php

namespace App\Http\Controllers;
use App\Ambulance;
use App\Vehicule;
use App\Itineraire;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ItineraireCreateRequest;
use App\Ville;
use App\Quartier;
use DB;



class ItineraireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $villes = Ville::pluck('name', 'id')->all();
        $quartiers = Quartier::pluck('name', 'id')->all();
        $countries = DB::table('villes')->pluck("name","id");
        return view('itineraire.index', compact('villes', 'quartiers', 'countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $villes = Ville::pluck('name', 'id')->all();
        $quartiers = Quartier::pluck('name', 'id')->all();
        $countries = DB::table('villes')->pluck("name","id");
        return view('itineraire.create', compact('villes', 'quartiers', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItineraireCreateRequest $request)
    {
        //
        $input = $request->all();

        $destinataires = Ambulance::Where('quartier_id', $input['quartier_id_start'])->get('phone');
        $destinataires1 = Vehicule::Where('quartier_id', $input['quartier_id_start'])->get('phone');



        $string = '';
        foreach( $destinataires as $key =>$destinataire){

            $string .= '+237'.$destinataire->phone;

        }

        $string1 = '';
        foreach( $destinataires1 as $key =>$destinataire1){

            $string1 .= '+237'.$destinataire1->phone;

        }
        $message = 'Êtes-vous disponible pour une urgence concernant  '.$input['description'].'  dans 5 Minutes';



        $send = "http://5.39.75.139:22140/message?user=digis&pass=digis123&from=8002&to=$string,$string1&flash=".$message."&dlrreq=1";

        /*      $client = new \GuzzleHttp\Client();

        // Create a request
                $request = $client->get($send);
   // Get the actual response without headers
              $response = $request->getBody();
              echo $response;*/

/*
	$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	 print_r($httpCode);
	if($httpCode == 200){ //******* well received on our plateform
        if($result == 200){//****** wel transmitted to our Gatteway connect to SMSC Operators
                echo '  Message envoyé avec succès';
        }else{
            echo 'Message non envoyé';
        }
    }*/
        return $send;
       /* return redirect('');*/

      /*return redirect('/itineraire');*/

        /*return view('urgence.index', compact('destinataires', 'message'));*/
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
