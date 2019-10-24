<?php

namespace App\Http\Controllers;

use App\Arrondissement;
use Illuminate\Http\Request;
use App\Photo;
use App\Quartier;
use App\User;
use App\Ville;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class UsersProfileController extends Controller
{
    //

    public  function  show(){

        return view('admin.profile.index');

    }


    public function edit($id){


        $user = User::findOrFail($id);

        if(Auth::user()->id != $id)
        {
        return redirect('admin');
        }
        else{
            return view('admin.profile.edit', compact('user'));
        }

    }



    public function  update(Request $request ,$id){

        $user = User::findOrFail($id);

         $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|starts_with:67,65,68,69,66,24|min:9',
            'password' => 'required|min:8',
            'email' => 'required|email',
        ]);



        if(trim($request->password) == ''){

            $input = $request->except('password');
        }
        else{

            $input = $request->all();

            $input['password'] = bcrypt($request->password);

        }


        if($file = $request->file('photo_id')){

            $name =time() .$file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;

        }

        $user->update($input);

        Session::flash('updated_profile', 'Le profil a été mis à jour avec succès');

        return redirect('admin/profile');
    }
}
