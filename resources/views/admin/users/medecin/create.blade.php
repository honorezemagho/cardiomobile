@extends('adminlte::page')
@extends('adminlte::page')
@can('is_admin')
@section('content')

    <h1 style="text-align: center">  Ajouter un Médecin comme Utilisateur </h1>

    {!! Form::open(['method' =>'POST', 'action' => 'GiveMedecinAccessToAdminController@store', 'files'=>true]) !!}

    <div class = "form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::label('medecin_id', 'Id du Médecin:') !!}
        {!! Form::number('medecin_id', null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::hidden('role_id',  3, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::label('is_active', 'Statut:') !!}
        {!! Form::select('is_active', array(1 => 'Actif', 0=> 'Inactif' ), 0, ['class' => 'form-control']) !!}
    </div>


    <div class = "form-group">
        {!! Form::label('photo_id', 'Veuillez uploader une photo') !!}
        {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
    </div><br>


    <div class = "form-group">
        {!! Form::label('password', 'Mot de passe: &emsp;') !!}
        {!! Form::password('password', null, ['class' => 'form-control']) !!}
    </div>



    <div class = "form-group">
        {!! Form::Submit ('Créer un Utilisateur', ['class' => 'btn btn-primary'] ) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')
@endsection
@endcan


@can('is_gestionnaire')
@section('content')

    <h1 style="text-align: center">  Ajouter un Utilisateur </h1>

    {!! Form::open(['method' =>'POST', 'action' => 'AdminUsersController@store', 'files'=>true]) !!}

    <div class = "form-group">
        {!! Form::label('name', 'Nom') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>


    <div class = "form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::label('role_id', 'Rôle:') !!}
        {!! Form::select('role_id', [null => 'Veuillez choisir un rôle'] + $roles , null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::label('phone', 'Téléphone:') !!}
        {!! Form::number('phone',  null, ['class' => 'form-control']) !!}
    </div>


    <div class = "form-group">
        {!! Form::label('is_active', 'Statut:') !!}
        {!! Form::select('is_active', array(1 => 'Actif', 0=> 'Inactif' ), 0, ['class' => 'form-control']) !!}
    </div>


    <div class = "form-group">
        {!! Form::label('photo_id', 'Veuillez uploder une photo') !!}
        {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
    </div><br>


    <div class = "form-group">
        {!! Form::label('password', 'Mot de passe: &emsp;') !!}
        {!! Form::password('password', null, ['class' => 'form-control']) !!}
    </div>



    <div class = "form-group">
        {!! Form::Submit ('Créer un Utilisateur', ['class' => 'btn btn-primary'] ) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')
@endsection
@endcan