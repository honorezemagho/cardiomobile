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
        @if($roles)

            @foreach($roles as $role)
                <tr>
                    <td> {{$role->id}} </td>
                    <td> {{$role->name}}</td>
                    <td> {{$role->created_at->diffForHumans()}}</td>
                    <td> {{$role->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif


        </tbody>
    </table>

@endsection