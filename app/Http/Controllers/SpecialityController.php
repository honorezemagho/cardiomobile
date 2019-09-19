<?php

namespace App\Http\Controllers;

use App\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $specialities = Speciality::all();
        return view('admin.speciality.index', compact('specialities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.speciality.create');
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

        Speciality::create($input);
        return redirect('admin/speciality');
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
        $specialities = Speciality::findOrFail($id);

        return view('admin.speciality.edit', compact('specialities'));
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
        $specialities = Speciality::findOrFail($id);

        $input = $request->all();

        $specialities->update($input);

        return redirect('admin/speciality');
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
        $specialities = Speciality::findOrFail($id);

        $specialities->delete();

        Session::flash('deleted_payment', 'Cette Spécialité a été supprimée avec succès');

        return redirect('admin/speciality');
    }
}
