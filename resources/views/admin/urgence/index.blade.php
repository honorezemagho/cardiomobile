@extends('adminlte::page')
@section('content')

    <h2 class="text-center"><span>Urgences Médecins </span></h2>


    <table class = "table">

        <thead>
        <tr>
            <th> Id</th>
            <th> Nom</th>
            <th> Ville</th>
            <th> Quartier</th>
            <th>Téléphone</th>
            <th>Description</th>
            <th>Date de Création</th>
            <th> statut</th>
        </tr>
        </thead>

        <tbody>



        @can(['is_admin', 'is_getionnaire'])
        @if($medecins)

            @foreach($medecins as $medecin)

                <tr>
                    <td>{{$medecin->id}}</td>
                    <td>{{$medecin->name}}</td>
                    <td>{{$medecin->ville->name}}</td>
                    <td>{{$medecin->quartier->name}}</td>
                    <td>{{$medecin->phone}}</td>
                    <td>{{$medecin->description}}</td>
                    <td>{{$medecin->created_at->diffForhumans()}}</td>
                    <td>

                    </td>
                </tr>

            @endforeach
        @endif
@endcan


        <?php
        use App\Available;
        use App\Medecin;use App\Transaction;
        use App\Urgence;

        $medecins_urgence = Available::where('medecin_id', auth()->id())->value("id");
        $medecins_urgence = Available::where('medecin_id', auth()->id())->value("medecin_id");
        $medecins_urgent = Urgence::where("available_id",$medecins_urgence)->value('expires');
        $medecins_urgent_transaction = Urgence::where("available_id",$medecins_urgence)->value('transaction_id');
        $transaction =  Transaction::where('id', $medecins_urgent_transaction)->value('transaction');
        $medecin_id = Medecin::where("id",$medecins_urgence)->value('id');
        $medecin_phone = Medecin::where('id',  $medecin_id)->value('phone');

        ?>


        @can(['is_medecin'])
            @if($medecins_urgences )

                @foreach($medecins_urgences as $medecin)

                    <tr>
                        <td>{{$medecin->id}}</td>
                        <td>{{$medecin->name}}</td>
                        <td>{{$medecin->ville->name}}</td>
                        <td>{{$medecin->quartier->name}}</td>
                        <td>{{$medecin->phone}}</td>
                        <td>{{$medecin->description}}</td>
                        <td>{{$medecin->created_at->diffForhumans()}}</td>
                        <td>

                            @if($medecins_urgent == 0)
                            <a href="{{url('/'.$transaction.'/'.$medecin_id.'/'.$medecin_phone)}}" class="btn btn-primary">Confirmez</a>
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

@endsection
