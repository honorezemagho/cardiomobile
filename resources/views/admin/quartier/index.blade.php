@extends('adminlte::page')

@section('content')


    @if(Session::has('deleted_user'))

        <p class="bg-danger"> {{session('deleted_user')}}</p>

    @endif

    <h1 style="text-align: center">Quartiers</h1>

    <table class="table">
        <thead>
        <tr>
            <th> Id</th>
            <th> Nom </th>
            <th> Arrondissement </th>
            <th>Ville</th>
        </tr>
        </thead>

        <tbody>
        @if($quartiers)

            @foreach($quartiers as $quartier)
                <tr>
                    <td> {{$quartier->id}} </td>
                    <td> {{$quartier->name}}</td>
                    <td> {{$quartier->arrondissement->name}}</td>
                    <td> {{$quartier->ville->name}} </td>
                </tr>
            @endforeach
        @endif


        </tbody>
    </table>
    @endsection

