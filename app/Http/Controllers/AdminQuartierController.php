<?php

namespace App\Http\Controllers;

use App\Arrondissement;
use Illuminate\Http\Request;
use App\Quartier;
use App\Ville;
use App\Http\Requests\VilleCreateRequest;
use Illuminate\Support\Facades\DB;

class AdminQuartierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $quartiers = Quartier::all();
        return view('admin.quartier.index', compact('quartiers'));
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
        $arrondissements = Arrondissement::pluck('name', 'id')->all();
        return view('admin.quartier.create', compact('villes', 'arrondissements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VilleCreateRequest $request)
    {
        //

        $input = $request->all();

        Quartier::create($input);

        return redirect('/admin/quartier');
    }


    public function arrondissement($id) {

        $arrondissements = DB::table("arrondissements")->where("ville_id",$id)->pluck("name","id");

        return json_encode( $arrondissements);

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
        return view('admin.quartier.show');
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
        return view('admin.quartier.edit');
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
