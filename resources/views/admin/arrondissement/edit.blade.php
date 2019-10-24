@extends('adminlte::page')
@can('is_admin')
@section('content')

    <h1 style="text-align: center">  Modifier un Arrondissement</h1>

    {!! Form::model($arrondissements, ['method' =>'PATCH', 'action' => ['AdminArrondissementController@update', $arrondissements->id], 'files'=>true]) !!}

    <div class = "form-group">
        {!! Form::label('name', 'Nom') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group mb-10 text-theme-colored">
        {!! Form::label('ville_id', 'Ville:') !!}
        {!! Form::select('ville_id', [null => 'Veuillez choisir votre Ville de résidence']
        + $villes , null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::Submit ('Modifier', ['class' => 'btn btn-primary'] ) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')
@endsection
@endcan