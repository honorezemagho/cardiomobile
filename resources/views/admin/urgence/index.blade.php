@extends('adminlte::page')
@section('content')

    <h2 class="text-center"><span>Rendez-vous Médecins </span></h2>
    <?php
    ?>

        @can(['is_gestionnaire'])
            <table class = "table">

                <thead>
                <tr>
                    <th> Id</th>
                    <th> Nom</th>
                    <th> Ville</th>
                    <th> Quartier</th>
                    <th>Téléphone</th>
                    <th>Description</th>
                    <th>Nom du Médecin</th>
                    <th>Type</th>
                    <th>Rendez-Vous</th>
                    <th> statut</th>
                </tr>
                </thead>

                <tbody>

        @if($medecins)

            @foreach($medecins as $medecin)

                <tr>
                    <td>{{$medecin->id}}</td>
                    <td>{{$medecin->name}}</td>
                    <td>{{$medecin->ville->name}}</td>
                    <td>{{$medecin->quartier->name}}</td>
                    <td>{{$medecin->phone}}</td>
                    <td>{{$medecin->description}}</td>
                    <td>{{$medecin->urgence_type}}</td>
                    <td>{{$medecin->available->datetime}}</td>
                    <td>
                        @if($medecin->expires == 0)
                           En attente
                        @else
                            Transaction Confirmée
                        @endif
                    </td>


                </tr>

            @endforeach
        @endif
        </tbody>
    </table>
        @endcan



        @can(['is_admin'])

            <table class = "table">

                <thead>
                <tr>
                    <th> Id</th>
                    <th> Nom</th>
                    <th class="hidden-xs"> Ville</th>
                    <th class="hidden-xs"> Quartier</th>
                    <th>Téléphone</th>
                    <th class="hidden-xs">Description</th>
                    <th>Nom du Médecin</th>
                    <th>Type</th>
                    <th>Rendez-Vous</th>
                    <th> statut</th>
                </tr>
                </thead>

                <tbody>

            @if($medecins)

                @foreach($medecins as $medecin)

                    <tr>
                        <td>{{$medecin->id}}</td>
                        <td>{{$medecin->name}}</td>
                        <td class="hidden-xs">{{$medecin->ville->name}}</td>
                        <td class="hidden-xs">{{$medecin->quartier->name}}</td>
                        <td>{{$medecin->phone}}</td>
                        <td class="hidden-xs">{{$medecin->description}}</td>
                        <td>{{$medecin->medecin->name}}</td>
                        <td>{{$medecin->urgence_type}}</td>
                        <td>{{$medecin->available->datetime}}</td>
                        <td>
                            @if($medecin->expires == 0)
                                En attente
                            @else
                                Transaction Confirmée
                            @endif
                        </td>

                    </tr>

                @endforeach
            @endif
        </tbody>
    </table>
        @endcan






        @can(['is_medecin'])

            <table class = "table">

                <thead>
                <tr>
                    <th class="hidden-xs"> Id</th>
                    <th> Nom</th>
                    <th class="hidden-xs"> Ville</th>
                    <th class="hidden-xs"> Quartier</th>
                    <th class="hidden-xs">Téléphone</th>
                    <th>Description</th>
                    <th>Rendez-Vous</th>
                    <th> statut</th>
                </tr>
                </thead>

                <tbody>

            @if($medecins_urgences )

                @foreach($medecins_urgences as $medecin)

                    <tr>
                        <td class="hidden-xs"> {{$medecin->id}}</td>
                        <td>{{$medecin->name}}</td>
                        <td class="hidden-xs">{{$medecin->ville->name}}</td>
                        <td class="hidden-xs">{{$medecin->quartier->name}}</td>
                        <td class="hidden-xs">{{$medecin->phone}}</td>
                        <td>{{$medecin->description}}</td>
                        <td>{{$medecin->available->datetime}}</td>
                        <td>

                            @if($medecin->expires == 0)
                            <a href="{{url('/urgence/confirm-disponibility/'.$medecin->transaction->transaction.'/'.$medecin_matricule.'/'.$medecin_phone)}}" target="_blank" class="btn btn-primary">Confirmez</a>
                                @else
                                Transaction Confirmée
                            @endif


                        </td>
                    </tr>

                @endforeach
            @endif
        @endcan
        </tbody>
    </table>

  {{--  <script>
    function autoRefreshPage()

    {

    window.location = window.location.href;

    }

    setInterval('autoRefreshPage()', 10000);
    </script>
    --}}
@endsection
