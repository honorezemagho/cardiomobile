
@extends('adminlte::page')
@section('content')
    <?php

            use Illuminate\Support\Facades\Auth;
            $medecin_id = Auth::user()->medecin_id;
    ?>


<div class="row">
    @can( 'is_admin')
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua-gradient">
            <div class="inner">

                <h3>{{\App\User::count()}}</h3>
                <p>Inscriptions</p>

            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="/admin/users" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    @endcan


    <!-- ./col -->
        @can('is_admin')
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                      <h3>{{\App\Urgence::count()}}</h3>
                        <p>Interventions</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="admin/urgences" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        @endcan


        @can('is_medecin')
            <div class="col-lg-3  col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                <h3>{{\App\Urgence::where('medecin_id', $medecin_id)->count()}}</h3>
                        <p>Rendez-vous</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="admin/urgences" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
         @endcan

        @can('is_medecin')
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>{{\App\Urgence::where('medecin_id', $medecin_id)->where('expires', 0)->count()}}</h3>
                        <p>Rendez-vous en attente</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="admin/urgences" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        @endcan

        @can('is_medecin')
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-light-blue-gradient">
                    <div class="inner">
                        <h3>{{\App\Urgence::where('medecin_id', $medecin_id)->where('expires', 1)->count()}}</h3>
                        <p>Rendez-vous confirmées</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="admin/urgences" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        @endcan


    @can('is_admin')
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                    <h3>{{\App\Available::count()}}</h3>
                <p>Disponibilités</p>
            </div>
            <div class="icon">
                <i class="icon ion-person"></i>
            </div>
            <a href="admin/medecin/available" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    @endcan


        @can('is_medecin')
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-light-blue">
                    <div class="inner">
                        <h3>{{\App\Available::where('medecin_id', $medecin_id)->count()}}</h3>
                        <p>Disponibilités</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="admin/urgences" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        @endcan
    <!-- ./col -->
    @can('is_admin')
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{\App\Medecin::count()}}</h3>
                <p>Médecins</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    @endcan
    <!-- ./col -->
</div>
@endsection
