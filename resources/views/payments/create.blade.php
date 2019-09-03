@extends('adminlte::page')
@can('is_admin')
@section('content')

    <h1 style="text-align: center">  Ajouter un Prix </h1>

    {!! Form::open(['method' =>'POST', 'action' => 'PaymentController@store', 'files'=>true]) !!}

    <div class = "form-group">
        {!! Form::label('name', 'Nom') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>


    <div class = "form-group">
        {!! Form::label('price', 'Prix:') !!}
        {!! Form::number('price', null, ['class' => 'form-control']) !!}
    </div>



    <div class = "form-group">
        {!! Form::label('details', 'Veuillez donner plus de détails') !!}
        {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
    </div><br>


    <div class = "form-group">
        {!! Form::Submit ('Créer un Paiement', ['class' => 'btn btn-primary'] ) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')
@endsection
@endcan