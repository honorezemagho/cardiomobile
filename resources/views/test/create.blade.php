
@include('home.head')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="container center-block">
<h1 style="text-align: center">  Ajouter un Médécin </h1>

{!! Form::open(['id' =>'urgence', 'method' => 'post']) !!}

<div class = "form-group">
    {!! Form::label('name', 'Nom') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class = "form-group">
    {!! Form::label('ville', 'Ville :') !!}
    {!! Form::text('ville', null, ['class' => 'form-control']) !!}
</div>

<div class = "form-group">
    {!! Form::label('quartier', 'Quartier :') !!}
    {!! Form::text('quartier' , null, ['class' => 'form-control']) !!}
</div>

<div class = "form-group">
    {!! Form::label('phone', 'Téléphone:') !!}
    {!! Form::number('phone',  null, ['class' => 'form-control']) !!}
</div>

<div class = "form-group">
    {!! Form::Submit ('Créer', ['class' => 'btn btn-primary', 'id' => 'upload'] ) !!}
</div>

    <div class = "form-group">
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
    </div>
{!! Form::close() !!}


    <script type="text/javascript">




        $(".btn-submit").click(function(e){

            e.preventDefault();

            var name = $("input[name=name]").val();
            var ville = $("input[name=ville]").val();
            var quartier = $("input[name=quartier]").val();
            var phone = $("input[name=phone]").val();
            var _token = $('#token').val();

            $.ajax({

                type:'POST',
                url:'/api/urgence/create',
                data:{name:name, ville:ville, quartier:quartier, phone:phone,  _token:_token},
            });


        });

    </script>


</div>
