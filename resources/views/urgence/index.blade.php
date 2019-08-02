@include('home.head')
@include('home.body')
<div class="container col-md-2"></div>
<div class="container col-md-6">
<h1 class="text-center"> Medecins </h1>

<table class = "table">

    <thead>
    <tr>
        <th> Id</th>
        <th> Nom</th>
        <th>Email</th>
        <th>Téléphone</th>

    </tr>
    </thead>


    <tbody>
    @if($medecins)

        @foreach($medecins as $medecin)

            <tr>
                <td>{{$medecin->id}}</td>
                <td>{{$medecin->name}}</td>
                <td>{{$medecin->email}}</td>
                <td>{{$medecin->phone}}</td>
            </tr>

        @endforeach
    @endif

    </tbody>
</table>
</div>

