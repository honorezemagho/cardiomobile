@extends('adminlte::page');

@section('content')


    <h1 style="text-align: center">Quartiers</h1>

    <table class="table">
        <thead>
        <tr>
            <th> Id</th>
            <th> Nom </th>
            <th> Date de Creation </th>
            <th> Dernière Modification </th>
        </tr>
        </thead>

        <tbody>
        @if($villes)

            @foreach($villes as $ville)
                <tr>
                    <td> {{$ville->id}} </td>
                    <td> {{$ville->name}}</td>
                    <td> {{$ville->created_at->diffForHumans()}}</td>
                    <td> {{$ville->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif


        </tbody>
    </table>

@endsection