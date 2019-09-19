@extends('adminlte::page')

@section('content')
    @can('is_admin')

    @if(Session::has('deleted_user'))

        <p class="bg-danger"> {{session('deleted_user')}}</p>

    @endif

    <h1 style="text-align: center">Médécins ayant des comptes utilisateurs</h1>

    <table class="table">
        <thead>
        <tr>
            <th> Id</th>
            <th class="hidden-xs"> Photo </th>
            <th> Name </th>
            <th class="hidden-xs"> Email </th>
            <th>Téléphone</th>
            <th class="hidden-xs">Role </th>
            <th class="hidden-xs"> Statut</th>
        </tr>
        </thead>

        <tbody>
        @if($users)
            @foreach($users as $user)
                <tr>
                    <td> {{$user->id}} </td>
                    <td class="hidden-xs"><img height="50" src="{{$user->photo ? $user->photo->file: '/images/default.jpg'}}" alt=""></td>
                    <td class="visible-xs"><a href="{{ URL::action('AdminUsersController@edit',  $user->id) }}">
                            {{ $user->medecin->name}}</a>
                    </td>
                    <td class="hidden-xs">
                            {{ $user->medecin->name}}
                    </td>
                    <td class="hidden-xs"> {{$user->email}}</td>
                    <td> {{$user->medecin->phone}}</td>
                    <td class="hidden-xs"> {{$user->role ? $user->role->name : 'User has no role'}} </td>
                    <td class="hidden-xs"> {{$user->is_active == 1 ? 'Actif' : 'Inactif'}}</td>
                    <td class="hidden-xs">
                        <a class="btn btn-primary" href="{{ URL::action('AdminUsersController@edit',  $user->id) }}">Modifier</a>
                        {!! Form::open(['method' => 'DELETE','action' => ['AdminUsersController@destroy', $user->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger inline']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        @endif


        </tbody>
    </table>
    @endcan


    @can('is_gestionnaire')

        @if(Session::has('deleted_user'))

            <p class="bg-danger"> {{session('deleted_user')}}</p>

        @endif

        <h1 style="text-align: center">Médécins ayant des comptes utilisateurs</h1>

        <table class="table">
            <thead>
            <tr>
                <th> Id</th>
                <th class="hidden-xs"> Photo </th>
                <th> Name </th>
                <th class="hidden-xs"> Email </th>
                <th>Téléphone</th>
                <th class="hidden-xs"> Statut</th>
            </tr>
            </thead>

            <tbody>
            @if($users)
                @foreach($users as $user)
                    <tr>
                        <td> {{$user->id}} </td>
                        <td class="hidden-xs"><img height="50" src="{{$user->photo ? $user->photo->file: '/images/default.jpg'}}" alt=""></td>
                        <td>{{ $user->medecin->name}}</td>
                        <td class="hidden-xs"> {{$user->email}}</td>
                        <td> {{$user->medecin->phone}}</td>
                        <td class="hidden-xs"> {{$user->is_active == 1 ? 'Actif' : 'Inactif'}}</td>
                    </tr>
                @endforeach
            @endif


            </tbody>
        </table>
    @endcan
@stop
