@extends('adminlte::page')

@section('content')


    <h1>  Modifier La Spécialité</h1>

    <div class="row">


        <div class="col-sm-9">

            {!! Form::model($specialities, ['method' =>'PATCH', 'action' => ['SpecialityController@update', $specialities->id]]) !!}

            <div class = "form-group">
                {!! Form::label('Spécialité', 'speciality') !!}
                {!! Form::text('speciality', null, ['class' => 'form-control']) !!}
            </div>




            <div class = "form-group">
                {!! Form::Submit ('Modifier', ['class' => 'btn btn-primary btn-group mr-2'] ) !!}

                {!! Form::close() !!}


                {!! Form::open(['method' => 'DELETE', 'action' => ['SpecialityController@destroy', $specialities->id], 'class'=>'btn-group mr-2 visible-xs']) !!}


                {!! Form::Submit ('Supprimer', ['class' => 'btn btn-danger ' ], ['data-toggle' => 'modal'],['data-target' => '.bd-example-modal-lg']  ) !!}
            </div>

            {!! Form::close() !!}




        </div>
    </div>


    <div class="row">
        @include('includes.form_error')

    </div>

@endsection