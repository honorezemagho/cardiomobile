@include('home.head')
@include('home.body')


<section id="home" >
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container  pt-50 pb-5 float-md-right">
                <h3 class="mt-0  pt-20 mb-10 text-theme-colored text-center">FINALISATION DE VOTRE INSCRIPTION</h3>
            


    <h1 style="text-align: center">  Ajouter une photo </h1>

    {!! Form::open(['method' =>'POST', 'action' => 'AdminMedecinController@upload', 'files'=>true]) !!}

    <div class = "form-group">
        {!! Form::label('photo_id', 'Veuillez uploader une photo:') !!}
        {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
    </div>

    <input type = "hidden" name="medecin_id" value="{{$medecin_id}}">


    <div class = "form-group">
        {!! Form::Submit ('Envoyer', ['class' => 'btn btn-primary'] ) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')


            </div>
        </div>
    </div>

</section>

@include('home.footer')