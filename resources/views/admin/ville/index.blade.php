@extends('adminlte::page')

@section('content')


    <h1 style="text-align: center">Villes</h1>

    <table class="table">
        <thead>
        <tr>
            <th> Id</th>
            <th> Nom </th>
        </tr>
        </thead>

        <tbody>
        @if($villes)

            @foreach($villes as $ville)
                <tr>
                    <td> {{$ville->id}} </td>
                    <td> {{$ville->name}}</td>
                </tr>
            @endforeach
        @endif


        </tbody>
    </table>

@endsection