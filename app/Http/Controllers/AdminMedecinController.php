<?php

namespace App\Http\Controllers;

use App\Code;
use App\Hopital;
use App\Mail\MedecinUploadPhoto;
use App\Medecin;
use App\MedecinsType;
use App\Photo;
use App\Quartier;
use App\Speciality;
use App\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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
        $hopitaux = Hopital::pluck('name', 'id')->all();

        return view('admin.medecin.create', compact('villes', 'quartiers', 'matricules',
            'speciality', 'types', 'hopitaux'));
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
        $rand = mt_rand(100000,999999);
        $code  = Code::create(['code' => $rand]);
        $request['code_id'] = $code->id;

        $input = $request->all();
        $request['ville'] = Ville::where('id', $request['ville_id'])->value('name');
        $request['quartier'] = Quartier::where('id', $request['quartier_id'])->value('name');
        $request['speciality'] = Speciality::where('id', $request['speciality_id'])->value('speciality');
        $request['code'] = Code::where('id', $request['code_id'])->value('code');

        $data = $request->all();

        // Mail::to([$request['email']])->bcc('honorezemagho@gmail.com', 'zankafred@gmail.com')
        //     ->send(new MedecinUploadPhoto($data));

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



    public function medecinuploadphoto($code, $medecin_matricule)
    {
        //

        $message = [
            'code' => 'Le code est requis pour pouvoir valider',
            'medecin_matricule.required' => 'Votre Matricule est requis!',
        ];

        $request['code'] = $code;
        $request['medecin_matricule'] = $medecin_matricule;


        $ids = Code::where('code', $request['code'])->value('id');
        $medecin_id = Medecin::where('matricule', $medecin_matricule)->value('id');

        if (Code::Where('code', $request['code'])->exists() &
            Medecin::Where('matricule', $request['medecin_matricule'])->exists())
        {

            DB::table('Medecins')
                ->where('id', $medecin_id)
                ->update(['status' => 1]);

            return view('medecin.upload', compact('ids', 'medecin_id'));

        }

            else
        {
            $header = " Confirmation de disponibilité";
            $messages = "Paramètres Incorrects, Veuilllez réessayer";
            return view('Confirm.status', compact('messages', 'header'));
        }

    }


    public function upload(Request $request){

        $file = $request->file('photo_id');

            $name = time(). $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);
            $input['medecin_id'] = $request['medecin_id'];
            $input['photo_id'] =  $photo->id;

        Medecin::where('id', $input['medecin_id'])->update(['photo_id' => $input['photo_id']]);

        $header = " Ajout de photo";
        $messages = "Fichier ajouté avec succès";
        return view('Confirm.status', compact('messages', 'header'));

}

}