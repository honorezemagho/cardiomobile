@extends('adminlte::page')

@section('content')
    <h1 style="text-align: center">Mon Profil</h1>

    <table class="table">
        <thead>
            <tr>
                <td class="hidden-xs">Photo</td>
                <td> Nom</td>
                <td class="hidden-xs">Email </td>
                <td>Téléphone</td>
				<td class="hidden-xs">Mot de passe</td>
            </tr>

        </thead>

        <?php
         use Illuminate\Support\Facades\Auth;
         use App\Photo;
         use App\User;
        $id = Auth::user()->id;
        $photos = Photo::where('id', Auth::user()->photo_id)->value('file');
        $users = User::where('id', $id)->get();

        ?>

                <tbody>
                        @foreach($users as $user)
                    <td class="hidden-xs"><img height="50" src="{{$user->photo ? $user->photo->file: '/images/default.jpg'}}" alt=""></td>
                        @endforeach

                    <td> @can('is_medecin') Dr. @endcan {{ Auth::user()->name}}</td>
                    <td class="hidden-xs"> {{Auth::user()->email}}</td>
                    <td> {{Auth::user()->phone}}</td>
                    <td class="hidden-xs"> Votre mot de passe défini </td>

                    <td>
                        <a class="btn btn-primary" href="{{ URL::action('UsersProfileController@edit',  $id) }}">Modifier</a>
                    </td>
                </tbody>
             </table>

@endsection