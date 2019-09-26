<?php

namespace App\Http\Controllers;

use App\Hopital;
use App\Http\Requests\MedecinCreateRequest;
use App\Medecin;
use App\MedecinsType;
use App\Quartier;
use App\Speciality;
use App\Ville;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminMedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medecins = Medecin::all();
        $villes = Ville::pluck('name', 'id')->all();
        $quartiers = Quartier::pluck('name', 'id')->all();
        $countries = DB::table('villes')->pluck("name","id");
        return view('admin.medecin.index', compact('medecins', 'villes', 'quartiers', 'countries'));
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
      /*  $quartiers = Quartier::pluck('name', 'id')->all();*/
        $matricule = DB::table('medecins')->latest('id')->value('id');
        $b = 1;
        $mat = $matricule + $b;
        $matricules = 'Med'.$mat;
        $speciality = Speciality::pluck('speciality', 'id')->all();
        $types = MedecinsType::pluck('name', 'id')->all();

        return view('admin.medecin.create', compact('villes', 'quartiers', 'matricules',
            'speciality', 'types'));
    }


    public function getStates($id) {
        $states = DB::table("quartiers")->where("ville_id",$id)->pluck("name","id");

        return json_encode($states);

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
        Medecin::create($input);
        return redirect('admin/medecin');
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
        $medecins = Medecin::findOrFail($id);
        $villes = Ville::pluck('name', 'id')->all();
        $quartiers = Quartier::pluck('name', 'id')->all();
        $speciality = Speciality::pluck('speciality', 'id')->all();
        $types = MedecinsType::pluck('name', 'id')->all();

        return view('admin.medecin.edit', compact('medecins', 'villes','quartiers','speciality','types'));
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
        $medecins = Medecin::findOrFail($id);

        $input = $request->all();

        $medecins->update($input);

        return redirect('admin/medecin');
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
        $medecins = Medecin::findOrFail($id);

        $medecins->delete();

        Session::flash('deleted_payment', 'Cette Médecin a été supprimée avec succès');

        return redirect('admin/medecins');
    }
}
