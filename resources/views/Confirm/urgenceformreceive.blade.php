@include('home.head')
@include('home.body')

@if($urgence_info)
<div class="main-content center-block">
    <h1 style="text-align: center">   {{$header}} </h1>
    <section>
        <div class="container alert-info text-center">

            <div class='container'>
                <div class='col-sm-6 col-xs-6 ' >
                        {!! Form::open(['method' =>'POST', 'action' => 'ClientContactMedecinController@store']) !!}

                    <input type='hidden' value='{{$transaction->id}}' class="btn btn-primary" name="transaction">
                    <input type='hidden' value='{{$datetime}}' class="btn btn-primary" name="datetime">

                    <input type='submit' value='DOMICILE' class="btn btn-primary" name="domicile">

                    {!! Form::close() !!}

                </div>

                <div class='col-sm-6 col-xs-6 ' >
                    {!! Form::open(['method' =>'POST', 'action' => 'ClientContactCliniqueController@store']) !!}

                    <input type='hidden' value='{{$transaction->id}}' class="btn btn-primary" name="transaction">
                    <input type='hidden' value='{{$datetime}}' class="btn btn-primary" name="datetime">
                    <input type='submit' value='CLINIQUE' class="btn btn-primary" name="clinique">

                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </section>
</div>

<div class="container col-md-2 centered-block">
</div>
@endif
@include('home.footer')