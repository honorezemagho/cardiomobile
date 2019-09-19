<?php

namespace App\Http\Controllers;

use App\Medecin;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class GiveMedecinAccessToAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::where('medecin_id', '!=', 'null')->get();
        return view('admin.users.medecin.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::pluck('name', 'id')->forget(['id' => '1'])->all();
        return view('admin.users.medecin.create', compact('roles'));
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
            'medecin_id.required' => "L'id du Médecin est requis!",
            'role_id.required' => 'Le rôle est requis!',
            'is_active.required' => 'Le Statut est requis!',
            'password.required' => 'Le Mot de passe est requis!',
            'medecin_id.exists' => 'Ce Medecin Id est Inexistant!',
        ];

             $data = $request->validate([
                    'medecin_id' => [
                    'required',
                    Rule::exists('medecins', 'id')->where(function ($query) use ($request) {
                    $query->where('id',$request['medecin_id']);
                    }),
                    ],
                    'role_id' => 'required',
                     'is_active' => 'required',
                    'password' => 'required',
                        ], $message);


             $request['email'] = Medecin::where('id', $request['medecin_id'])->value('email');
            $request['phone'] = Medecin::where('id', $request['medecin_id'])->value('phone');
            $request['name'] = Medecin::where('id', $request['medecin_id'])->value('name');

        if(trim($request->password) == ''){

            $input = $request->except('password');
        }else{

            $input = $request->all();

            $input['password'] = bcrypt($request->password);

        }


        if($file = $request->file('photo_id')){

            $name = time(). $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] =  $photo->id;

        }

        User::create($input);

        return redirect('/admin/becomeuser/medecin');
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
