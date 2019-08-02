@extends('adminlte::page')
@section('content')

    <h2 class="text-center"><span>Contacter un Médécin d'urgence </span></h2>
<script src="{{ asset('js/custom.js') }}"></script>
    <div class="container col-sm-12">
        <div class="row equal-height">
            <div class="col-sm-6 align-center ">
                {!! Form::open(['method' =>'POST', 'action' => 'AdminContactMedecinController@store']) !!}

                <div class = "form-group align-center">
                    {!! Form::label('name', 'Nom') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>


                    <div class = "form-group align-center">
                        {!! Form::label('ville_id', 'Ville :') !!}
                        {!! Form::select('ville_id', [null => 'Veuillez choisir une Ville'] + $villes , null, ['class' => 'form-control']) !!}
                    </div>

                    <div class = "form-group align-center">
                        {!! Form::label('quartier_id', 'Quartier :') !!}
                        {!! Form::select('quartier_id', [null => 'Veuillez choisir un quartier'] + $quartiers , null, ['class' => 'form-control']) !!}
                    </div>

                <div class = "form-group align-center">
                    {!! Form::label('phone', 'Téléphone:') !!}
                    {!! Form::number('phone',  null, ['class' => 'form-control']) !!}
                </div>
            </div>

                <div class="col-sm-6 center-block align-content-center align-center align">
                    <div class = "form-group align-center h-50">
                        {!! Form::label('description', 'De Quoi Souffrez - Vous ?:') !!}
                        {!! Form::textarea('description',  null, ['class' => 'form-control h-50']) !!}
                    </div>

                    <div class = "form-group">
                        {!! Form::Submit ('Je Contacte', ['class' => 'btn btn-primary'] ) !!}
                    </div>
                    {!! Form::close() !!}

                    @include('includes.form_error')

                </div>
            </div>
        </div>
    </div>

@endsection
