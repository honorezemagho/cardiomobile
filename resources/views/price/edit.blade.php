@extends('adminlte::page')

@section('content')


    <h1>  Modifier Le Prix </h1>

    <div class="row">


        <div class="col-sm-9">

            {!! Form::model($payment, ['method' =>'PATCH', 'action' => ['PaymentController@update', $payment->id], 'files'=>true]) !!}

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
                {!! Form::Submit ('Modifier', ['class' => 'btn btn-primary btn-group mr-2'] ) !!}


                {!! Form::close() !!}



                {!! Form::open(['method' => 'DELETE', 'action' => ['PaymentController@destroy', $payment->id], 'class'=>'btn-group mr-2']) !!}


                {!! Form::Submit ('Supprimer', ['class' => 'btn btn-danger ' ], ['data-toggle' => 'modal'],['data-target' => '.bd-example-modal-lg']  ) !!}
            </div>

            {!! Form::close() !!}




        </div>
    </div>


    <div class="row">
        @include('includes.form_error')

    </div>

@endsection