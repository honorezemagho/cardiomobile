<?php

namespace App\Http\Controllers;

use App\Available;
use App\Medecin;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class MedecinDisponibilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.medecindisponibility.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $medecins = Medecin::pluck('name', 'id')->all();
        return view('admin.medecindisponibility.create', compact('medecins'));
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
        $message = [
            'medecin_id.required' => 'Le Numéro de Transaction est requis!',
            'datetime.required' => 'Date et Heure requis!',
            'quartier_id.required' => 'Le Quartier du médecin est requis!',
            'price.required' => 'Le prix est requis'
        ];

        $request['datetime'] = Carbon::parse($request['datetime'])->toDateTimeString();

        $request['quartier_id'] = Medecin::where('id', $request['medecin_id'])->value('quartier_id');

        $request['type_id'] = Medecin::where('id', $request['medecin_id'])->value('type_id');

        $request['speciality_id'] = Medecin::where('id', $request['medecin_id'])->value('speciality_id');

        $data = $request->validate([
            'medecin_id' => [
                'required',
                Rule::exists('medecins', 'id')->where(function ($query) use ($request) {
                    $query->where('id',$request['medecin_id']);
                }),
            ],
            'datetime' => 'required|date',
            'quartier_id' => 'required',
            'price' =>  'required'

        ], $message);

        $data = $request->all();


        Available::create($data);

        return redirect('admin/medecin/available');

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
        //
        $available = Available::findOrFail($id);

        return view('admin.medecindisponibility.edit', compact('available'));
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

        $message = [
            'medecin_id.required' => 'Le Numéro de Transaction est requis!',
            'datetime.required' => 'Date et Heure requis!',
            'quartier_id.required' => 'Le Quartier du médecin est requis!',
            'price.required' => 'Le prix est requis'
        ];

        $request['datetime'] = Carbon::parse($request['datetime'])->toDateTimeString();

        $request['quartier_id'] = Medecin::where('id', $request['medecin_id'])->value('quartier_id');

        $request['type_id'] = Medecin::where('id', $request['medecin_id'])->value('type_id');

        $request['speciality_id'] = Medecin::where('id', $request['medecin_id'])->value('speciality_id');


        $data = $request->validate([
            'medecin_id' => [
                'required',
                Rule::exists('medecins', 'id')->where(function ($query) use ($request) {
                    $query->where('id',$request['medecin_id']);
                }),
            ],
            'datetime' => 'required|date',
            'quartier_id' => 'required',
            'price' =>  'required'

        ], $message);

       $medecin = Available::findOrFail($id);

        $input = $request->all();

        $medecin->update($input);

        return redirect('admin/medecin/available');

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
        $available = Available::findOrFail($id);

        $available->delete();

        Session::flash('deleted_disponibility', 'Disponibilité supprimée avec succès');

        return redirect('admin/medecin/available');
    }
}
