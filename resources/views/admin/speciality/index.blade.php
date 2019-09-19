@extends('adminlte::page')

@section('content')
        @can('is_admin')
    <h1 style="text-align: center">Spécialités</h1>

    <table class="table">
        <thead>
        <tr>
            <th> Id</th>
            <th> Spécialité </th>
        </tr>
        </thead>

        <tbody>
        @if($specialities)

            @foreach($specialities as $speciality)
                <tr>
                    <td> {{$speciality->id}} </td>
                    <td class="visible-xs"><a href="{{ URL::action('SpecialityController@edit',  $speciality->id) }}">
                            {{ $speciality->speciality}}</a></td>

                    <td class="hidden-xs">{{ $speciality->speciality}}</td>

                    <td class="hidden-xs">
                        <a class="btn btn-primary" href="{{ URL::action('SpecialityController@edit',
                         $speciality->id) }}">Modifier</a>

                        {!! Form::open(['method' => 'DELETE','action' => ['SpecialityController@destroy',
                        $speciality->id],'style'=>'display:inline']) !!}

                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger inline']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@stop
@endcan
