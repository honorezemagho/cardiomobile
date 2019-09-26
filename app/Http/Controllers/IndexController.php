<?php

namespace App\Http\Controllers;

use App\Available;
use Illuminate\Http\Request;
use App\Ville;
use App\Quartier;
use DB;

class IndexController extends Controller
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
        return view('home.content', compact('villes', 'quartiers', 'countries'));
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

        return redirect('/');
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


    public function manual()
    {
        //
        return view('home.manual');
    }


    public function contact()
    {
        //
        return view('contact.create');
    }


    public function admin()
    {
        //
        return view('admin.index');
    }


    public function disponibility()
    {
        //
        return view('urgence_type.test');
    }


    public function speciality()
    {
        //
        return view('urgence.index');
    }


    public function paginate()
    {
        //
        $data = Available::paginate(5);
        return view('paginate.test', compact('data'));
    }

}
