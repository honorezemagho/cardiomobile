<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quartier;
use App\Ville;
use App\Itineraire;

use App\Http\Requests;
use App\Http\Requests\ItineraireCreateRequest;

class AdminItineraireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $itineraires = Itineraire::all();

        return view('admin.itineraire.index', compact('itineraires'));
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
        return view('admin.itineraire.create', compact('villes', 'quartiers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItineraireCreateRequest  $request)
    {
        $input = $request->all();
        Itineraire::create($input);
        return redirect('/admin/itineraire');
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
        return view('itineraire.edit');
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

    /**
     * Load dynamically by dropdown town with quaters.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
