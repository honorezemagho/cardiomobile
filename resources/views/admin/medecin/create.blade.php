@extends('adminlte::page');
@section('content')
    <h1 style="text-align: center">  Ajouter un Médécin </h1>

    {!! Form::open(['method' =>'POST', 'action' => 'AdminMedecinController@store']) !!}

    <div class = "form-group">
        {!! Form::label('name', 'Nom') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::label('ville', 'Ville :') !!}
        {!! Form::select('ville_id', [null => 'Veuillez choisir votre Ville de résidence'] + $villes , null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::label('quartier', 'Quartier :') !!}
        {!! Form::select('quartier_id', [null => 'Veuillez choisir un Quartier'] + $quartiers , null, ['class' => 'form-control']) !!}
    </div>


    <div class = "form-group">
        {!! Form::label('phone', 'Téléphone:') !!}
        {!! Form::number('phone',  null, ['class' => 'form-control']) !!}
    </div>


    <div class = "form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email',  null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        <input type="hidden" value="{{$matricules}}" name="matricule">
    </div>

    <div class = "form-group">
        {!! Form::Submit ('Créer', ['class' => 'btn btn-primary'] ) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')

    <script src="{{ asset('js/custom.js') }}"></script>

@endsection
