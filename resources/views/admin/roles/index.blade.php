@extends('adminlte::page')

@section('content')


    <h1 style="text-align: center">Roles</h1>

    <table class="table">
        <thead>
        <tr>
            <th> Id</th>
            <th> Nom </th>
        </tr>
        </thead>

        <tbody>
        @if($roles)

            @foreach($roles as $role)
                <tr>
                    <td> {{$role->id}} </td>
                    <td> {{$role->name}}</td>
                </tr>
            @endforeach
        @endif


        </tbody>
    </table>

@endsection