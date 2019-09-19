@include('home.head')
@include('home.body')
<div class="container col-md-2"></div>
<div class="container col-md-6">
<h1 class="text-center"> Spécialités </h1>



    {!! Form::open(['method' =>'POST', 'action' => 'UrgenceFormReceivingCliniqueController@save', 'class' => 'bg-theme-colored p-30 text-white']) !!}

    <div class="form-group mb-10 text-theme-colored text-center">

        <div class="custom-control custom-radio mb-10">

            <div class="form-control">
            <input class="custom-control-input" type="radio" name="speciality_id" id="example-radio2" value="1">
            <label class="custom-control-label" for="CARDIOLOGUE">
                <h5 class="text-theme-colored custom-control-input">CARDIOLOGUE</h5>
            </label>
            </div>

            <div class="form-control">
                <input class="custom-control-input" type="radio" name="speciality_id" id="example-radio2" value="2">
                <label class="custom-control-label" for="NEUROLOGUE">
                    <h5 class="text-theme-colored custom-control-input">NEUROLOGUE</h5>
                </label>
            </div>


            <div class="form-control">
                <input class="custom-control-input" type="radio" name="speciality_id" id="example-radio2" value="3">
                <label class="custom-control-label" for="PNEUMOLOGUE">
                    <h5 class="text-theme-colored custom-control-input">PNEUMOLOGUE</h5>
                </label>
            </div>


            <div class="form-control">
                <input class="custom-control-input" type="radio" name="speciality_id" id="example-radio2" value="4">
                <label class="custom-control-label" for="DIABETOLOGUE">
                    <h5 class="text-theme-colored custom-control-input">DIABETOLOGUE</h5>
                </label>
            </div>


            <div class="form-control">
                <input class="custom-control-input" type="radio" name="speciality_id" id="example-radio2" value="5">
                <label class="custom-control-label" for="NEPHROLOGUE">
                    <h5 class="text-theme-colored custom-control-input">NEPHROLOGUE</h5>
                </label>
            </div>


            <input type="hidden" value="{{$data['name']}}" name="name">
            <input type="hidden" value="{{$data['phone']}}" name="phone">
            <input type="hidden" value="{{$data['ville_id']}}" name="ville_id">
            <input type="hidden" value="{{$data['quartier_id']}}" name="quartier_id">
            <input type="hidden" value="{{$data['description']}}" name="description">
            <input type="hidden" value="{{$data['urgence_type']}}" name="urgence_type">
            <input type="hidden" value="{{$data['transaction_id']}}" name="transaction_id">
        </div>
    </div>

    <div class = "form-group col-md-11"></div>
    <div class = "form-group col-md-1">
        {!! Form::Submit ('Envoyer', ['class' => 'bg-theme-colored'] ) !!}
    </div>


    {!! Form::close() !!}

</div>

