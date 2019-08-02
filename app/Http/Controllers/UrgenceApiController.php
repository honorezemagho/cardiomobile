<?php

namespace App\Http\Controllers;

use App\Http\Resources\UrgenceResourceCollection;
use App\Person;
use Illuminate\Http\Request;
use App\Http\Resources\UrgenceResource as UrgenceResource;
use App\Urgence;

class UrgenceApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():UrgenceResourceCollection
    {
        //
       /* $urgences = Urgence::paginate(15);
        //
        return UrgenceResource::collection($urgences);*/
       return new UrgenceResourceCollection(Urgence::paginate());
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
        $request->validate([
            'name' => 'required',
            'ville_id' => 'required',
            'quartier_id' => 'required',
            'phone' => 'required',
            'description' => 'required',
        ]);

        $urgence= Urgence::create($request->all());

        return new UrgenceResource($urgence);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Urgence $medecin):UrgenceResource
    {
        //
        return new UrgenceResource($medecin);
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
    public function update(Request $request, Urgence $medecin)
    {

        $request->validate([
            'matricule_id' => 'required',
            'medecin_phone' => 'required',
        ]);

        $medecin->update($request->all());
        return response()->json($medecin, 200);

      /*  $urgence = Urgence::findOrFail($id);*/
        //

        /*
        $urgence->update($request->all());

        return ($urgence);*/

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Urgence $medecin)
    {
        //
        $medecin->delete();
    }
}
