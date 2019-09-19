@extends('adminlte::page')

@section('content')

    <h1 style="text-align: center">Paiements</h1>

    <table class="table">
        <thead>
        <tr>
            <th> Id</th>
            <th> Nom </th>
            <th> Prix </th>
            <th> Details </th>
          {{--  <th> Action</th>--}}
        </tr>
        </thead>

        <tbody>
        @if($payments)

            @foreach($payments as $payment)
                <tr>
                    <td> {{$payment->id}} </td>
                    <td class="visible-xs"><a href="{{ URL::action('PaymentController@edit',  $payment->id) }}">{{ $payment->name}}</a></td>
                    <td class="hidden-xs">{{ $payment->name}}</td>
                    <td> {{$payment->price}}</td>
                    <td> {{$payment->details}}</td>
                   <td>
                        <a class="btn btn-primary" href="{{ URL::action('PaymentController@edit',  $payment->id) }}">Modifier</a>
                        {!! Form::open(['method' => 'DELETE','action' => ['PaymentController@destroy', $payment->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger inline']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        @endif


        </tbody>
    </table>

@stop