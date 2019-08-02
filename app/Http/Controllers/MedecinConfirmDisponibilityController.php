<?php

namespace App\Http\Controllers;

use App\Medecin;
use App\Transaction;
use App\Urgence;
use Illuminate\Http\Request;
use DB;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class MedecinConfirmDisponibilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Confirm.urgence');
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

        $message = [
            'transaction.required' => 'Le Numéro de Transaction est requis!',
            'matricule.required' => 'Le Matricule est requis!',
            'medecin_phone.required' => 'Votre Numéro de téléphone est requis!',
        ];

       /* $transaction = Transaction::Where('transaction', $request['transaction'])->exists();*/

        $transactions = Transaction::all();

            $fielde = '';

        foreach( $transactions as $key =>$transaction){

            $fielde .= $transaction->transaction.',';
        }
        $input = $request->all();


        $data = $request->validate([
            'transaction' => 'required',
            'matricule' => 'required',
            'medecin_phone' => 'required',
        ], $message);


            $ids = Transaction::where('transaction', $request['transaction'])->value('id');
        $expires = Urgence::where('transaction_id', $ids)->value('expires');
        $id = Urgence::where('transaction_id', $ids)->value('id');

        if (Transaction::Where('transaction', $request['transaction'])->exists() &
          Medecin::Where('matricule', $request['matricule'])->exists() &
            Urgence::Where('transaction_id', $ids)->exists() & $expires == 0)
        {

            DB::table('urgences')
                ->where('id', $id)
                ->update(['medecin_matricule' => $request['matricule'], 'medecin_phone' => $request['medecin_phone'],
                    'expires' => 1]);



            $header = " Confirmation de disponibilité";
            $messages = "Merci pour votre disponibilité, M. DJOMOU";
             return view('Confirm.status', compact('messages', 'header'));
        }


        elseif($expires == 1){

            $header = " Confirmation de disponibilité";
            $messages = "Désolé, cette Opération n'est plus valide";
            return view('Confirm.status', compact('messages', 'header'));

        }


        else
        {
            $header = " Confirmation de disponibilité";
            $messages = "Paramètres Incorrects, Veuilllez réessayer";
            return view('Confirm.status', compact('messages', 'header'));
        }



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
