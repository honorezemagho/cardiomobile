<?php

namespace App\Http\Controllers;

use App\Available;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Ville;
use App\Quartier;
use App\Medecin;
use App\Http\Requests\ContactMedecinRequest;
use App\Urgence;
use App\Transaction;
use Illuminate\Support\Facades\Auth;

class AdminContactMedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medecins = Urgence::all();
        $medecins_available = Available::where('medecin_id', Auth::user()->medecin_id)->value('id');

        $medecins_urgences = Urgence::where('medecin_id', Auth::user()->medecin_id)->get();

        $medecins_urgent = Urgence::where('available_id', $medecins_available)->value('expires');

       /* $medecins_urgent_transaction = Urgence::where("available_id",$medecins_available)->value('transaction_id');
        $transaction =  Transaction::where('id', $medecins_urgent_transaction)->value('transaction');*/

        $medecin_phone = Medecin::where('id',   Auth::user()->medecin_id)->value('phone');
        $medecin_matricule = Medecin::where('id',   Auth::user()->medecin_id)->value('matricule');

      /*  $request['1'] =  Urgence::where('medecin_id', Auth::user()->medecin_id)->get('available_id');;*/

       /* $medecins_urgent_transaction = Urgence::where("available_id",$medecins_available)->value('transaction_id');
        $transaction =  Transaction::where('id', $medecins_urgent_transaction)->value('transaction');
        $medecin_phone = Medecin::where('id',  $medecins_available)->value('phone');
        $medecin_matricule = Medecin::where('id',  $medecins_available)->value('matricule');*/


      /*  $data = $request['1'] ;
        return $data;*/


        return view('admin.urgence.index', compact('medecins', 'medecins_urgences', 'medecins_urgent'
        , 'transaction', 'medecin_phone', 'medecin_matricule'));
    }


    public function getStates($id) {

        $states = DB::table("quartiers")->where("ville_id",$id)->pluck("name","id");

        return json_encode($states);
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
        return view('admin.urgence.create', compact('villes', 'quartiers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactMedecinRequest $request)
    {
        //
        $input = $request->all();

       Urgence::create($input);

        return redirect('/admin/contact/medecin');
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
