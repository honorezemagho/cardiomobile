<?php

namespace App\Http\Controllers;

use App\Arrondissement;
use App\Ville;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminArrondissementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $arrondissements = Arrondissement::all();

        return view('admin.arrondissement.index', compact('arrondissements'));

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
        return view('admin.arrondissement.create', compact('villes'));
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
        $input = $request->all();
        Arrondissement::create($input);
        return redirect('admin/arrondissement');

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
        $arrondissements = Arrondissement::findOrFail($id);
        $villes = Ville::pluck('name', 'id')->all();
        return view('admin.arrondissement.edit', compact('arrondissements', 'villes'));
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
        $arrondissements = Arrondissement::findOrFail($id);

        $input = $request->all();

        $arrondissements->update($input);

        return redirect('admin/arrondissement');
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
        $arrondissements = Arrondissement::findOrFail($id);

        $arrondissements->delete();

        Session::flash('deleted_payment', 'Le Paiement a été supprimé avec succès');

        return redirect('admin/arrondissement');
    }
}
