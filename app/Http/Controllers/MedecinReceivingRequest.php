<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class MedecinReceivingRequest extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function update(Request $request, $id , $medecin_phone, $shortcode, $matricule)
    {
        //
        $input = $request->all();
        $input['shortcode'] = $shortcode;
        $input['medecin_phone'] = $medecin_phone;
        $input['matricule'] = $matricule;


        $validator = Validator::make($input, [
            'shortcode' => 'required|numeric|digits:4',
            'medecin_phone' => 'required_with:67,69,65,68|numeric|digits:9',
            'matricule' => 'required|string',
        ],

            $messages = [
            'shortcode.required' => 'le numéro court est requis',
            'medecin_phone.required'  => 'Numéro de téléphone requis',
            'matricule.required'  => 'Le matricule est requis',
            'shortcode.digits' => 'le numéro court est mal entré',
            'medecin_phone.digits'  => 'Le numéro de téléphone du médecin est mal entré',
    ]);




        if ($validator->fails()) {
            $errors = $validator->errors();
            echo ('<h1 style="color: red">Veuillez bien rentrer les champs </h1>');
            foreach ($errors->all() as $message) {
                echo ('<li>' .$message. '</li>');
            }
        }

        else{
            DB::table('urgences')->Where(['id' => $id])->update($input);
            echo ('Merci de votre réponse');
        }
        /*
            if ($validator->fails()) {
                  echo ("Oups!! Quelque chose n'a pas marché veuillez vérifier votre requête puis réesssayer ");
            }else{
          DB::table('urgences')->Where(['id' => $id])->update($input);
          echo ('Merci de votre réponse');
            }*/

    }


  /*  public function messages()
    {
        return [
            'shortcode.required' => 'le numéro court est requis',
            'medecin_phone.required'  => 'Numéro de téléphone requis',
            'matricule.required'  => 'Le matricule est requis',
            'shortcode.digits' => 'le numéro court est mal entré',
            'medecin_phone.digits'  => 'Le numéro de téléphone du médecin est mal entré',
        ];
    }*/


    public function attributes()
    {
        return [
            'shortcode' => 'Numéro court',
            'medecin_phone' => 'Numéro du médecin',
            'matricule' => 'matricule',
        ];
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
