@include('home.head')
<body class="">
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="header">
        {{--  <div class="header-top bg-theme-colored sm-text-center">
              <div class="container">
                  <div class="row">
                      <div class="col-md-8">
                          <div class="widget text-white">

                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="widget">
                              <ul class="list-inline text-right flip sm-text-center">
                                  <li>
                                      <a class="text-white" href="#">Questions Fréquentes</a>
                                  </li>
                                  <li class="text-white">|</li>
                                  <li>
                                      <a class="text-white" href="" onclick="$crisp.push(['do', 'chat:open'])" >Discutons!</a>
                                      --}}{{--<button onclick="$crisp.push(['do', 'chat:open'])" class="text-white">Cliquez ici pour commencer le tchat!</button>--}}{{--
                                  </li>
                                  <li class="text-white">|</li>
                                  <li>
                                      <a class="text-white" href="#">Support</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>--}}

        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                <div class="container">
                    <nav id="menuzord" class="menuzord blue no-bg">
                        <a class="menuzord-brand pull-left flip mb-15" href="/"><img src="{{ asset('dentalpro/images/logo.png') }}" alt=""></a>
                        <ul class="menuzord-menu">
                            <li class="active"><a href="#home">Accueuil</a></li>


                            <li class="active"><a href="#">Services</a>
                                <ul class="dropdown">
                                    <li><a data-toggle="modal" data-target="#Itiform"><i class="fa fa-ambulance text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>Commander une Ambulance</a></li>
                                    <li><a data-toggle="modal" data-target="#Medform"><i class="fa fa-user-md text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>Avoir un Medecin d'urgence</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="#">A Propos</a></li>
                            <li class="active"><a href="#">Support</a>
                                <ul class="dropdown">
                                    <li><a href="/"><i class="fa fa-wechat text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>Chat</a></li>
                                    <li><a href="/"><i class="fa fa-envelope text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>Contactez - Nous</a></li>
                                    <li><a href="/"><i class="fa fa-question-circle text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>Questions Fréquentes</a></li>
                                </ul>
                            </li>
                        </ul><br>
                        <button  class="font-14 text-white text-uppercase btn btn-primary active pull-right visible-lg visible-md" data-toggle="modal" data-target="#Itiform" >  AMBULANCE </button>
                        <button  class="font-14 text-white text-uppercase btn btn-primary active pull-right visible-lg visible-md" data-toggle="modal" data-target="#Medform"> MEDECIN D'URGENCE</button>
                    </nav>
                </div>
            </div>
            <div class="text-center text-theme-colored">
                {{-- <i class="fa fa-warning  font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none center-block" style="color: red"></i>--}}

                <marquee behavior="scroll" direction="left" scrollamount="10">
                    <h3> Pour Toute Urgence, Envoyez par sms <b>"SECOURS"</b> AU 8735, c'est gratuit, disponible 24H/24, 7J/7</h3>
                </marquee>
            </div>
        </div>
        <div class="header-middle p-0 bg-lighter xs-text-center visible-xs visible-sm">
            <div class="container pt-20 pb-20">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                            <i class="fa fa-ambulance text-theme-colored font-28 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                            <button  class="font-20 text-white text-uppercase btn btn-primary" data-toggle="modal" data-target="#Itiform" >  AMBULANCE </button>
                            <h5 class="font-13 text-black m-0 text-center"> CLIQUEZ SUR CE BUTTON</h5>
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-4 col-md-4">
                        <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                            <i class="fa fa-user-md text-theme-colored font-28 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                            <button  class="font-20 text-white text-uppercase btn btn-primary" data-toggle="modal" data-target="#Medform"> MEDECIN D'URGENCE</button>
                            <h5 class="font-13 text-black m-0 text-center "> CLIQUEZ SUR CE BUTTON</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </header>



    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: home -->



        <section id="itiform">

            <div class="modal fade" id="Itiform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h2><span class="text-theme-colored text-center">Définir votre itinéraire </span></h2>
                        </div>
                        <div class="modal-body">

                            {!! Form::open(['method' =>'POST', 'action' => 'AdminItineraireController']) !!}

                            <div class = "form-group">
                                {!! Form::label('name', 'Nom et Prénoms') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group">
                                {!! Form::label('depart', 'Mon Quartier') !!}
                                {!! Form::text('depart', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group">
                                {!! Form::label('destination', 'Destination') !!}
                                {!! Form::text('destination', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group">
                                {!! Form::label('date', 'Date et Heure') !!}
                                {!! Form::text('date', null, ['class' => 'form-control datetimepicker']) !!}
                            </div>


                            <div class = "form-group">
                                {!! Form::label('price', 'Prix') !!}
                                {!! Form::number('price',  null, ['class' => 'form-control']) !!}
                            </div>


                            <div class = "form-group">
                                {!! Form::label('phone', 'Téléphone:') !!}
                                {!! Form::number('phone',  null, ['class' => 'form-control']) !!}
                            </div>


                            {!! Form::close() !!}

                            @include('includes.form_error')

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            {!! Form::Submit ('Valider', ['class' => 'btn btn-primary'] ) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="Medform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h2><span class="text-center text-theme-colored">Prendre un Rendez - Vous avec un Médécin</span></h2>
                        </div>
                        <div class="modal-body">


                            {!! Form::open(['method' =>'POST', 'action' => 'AdminItineraireController']) !!}

                            <div class = "form-group">
                                {!! Form::label('name', 'Nom et Prénoms') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group">
                                {!! Form::label('depart', 'Mon Quartier') !!}
                                {!! Form::text('depart', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group">
                                {!! Form::label('date', 'Date et Heure') !!}
                                {!! Form::text('date', null, ['class' => 'form-control datetimepicker']) !!}
                            </div>

                            <div class = "form-group">
                                {!! Form::label('price', 'Prix') !!}
                                {!! Form::number('price',  null, ['class' => 'form-control']) !!}
                            </div>


                            <div class = "form-group">
                                {!! Form::label('phone', 'Téléphone:') !!}
                                {!! Form::number('phone',  null, ['class' => 'form-control']) !!}
                            </div>


                            {!! Form::close() !!}

                            @include('includes.form_error')

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            {!! Form::Submit ('Valider', ['class' => 'btn btn-primary'] ) !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="container pt-0 pb-0">
                <div class="section-content">
                    <div class="row equal-height-inner mt-sm-0" data-margin-top="-110px">
                        <div class="col-sm-12 col-md-3 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
                            <div class="sm-height-auto bg-theme-colored">
                                <div class="p-30">
                                    <h3 class="text-uppercase text-white mt-0 text-center" >Docteurs QUALIFIES</h3>
                                    <p class="text-white text-center">Nous vous proposons des docteurs qualifiés.</p>
                                    <a href="#about" class="btn btn-border btn-circled btn-transparent btn-sm center-block">Contactez Un Médécin</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
                            <div class="sm-height-auto bg-theme-colored2">
                                <div class="p-30">
                                    <h3 class="text-uppercase text-white mt-0">Heures de Service </h3>
                                    <div class="opening-hours">
                                        <ul class="list-unstyled text-white">
                                            <li class="clearfix"> <span> Lundi à Vendredi </span>
                                                <div class="value"> 8:00H - 18:00H </div>
                                            </li>
                                            <li class="clearfix"> <span>Tues - Thur</span>
                                                <div class="value">8:00H - 12:00H</div>
                                            </li>
                                            <li class="clearfix"> <span>Dimanche</span>
                                                <div class="value">Fermé</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="btn btn-border btn-circled btn-transparent btn-sm mt-20 center-block" data-toggle="modal" data-target="#BSParentModal" href="ajax-load/form-appointment.html">Contactez - Nous </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 pl-0 pr-0 pl-sm-15 0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
                            <div class="sm-height-auto bg-theme-colored">
                                <div class="p-30 text-center ">
                                    <h3 class="text-uppercase text-white mt-0 text-center" >PLATEFORME DISPONIBLE 24H/24, 7J/7</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
                            <div class="sm-height-auto bg-theme-colored2">
                                <div class="p-30">
                                    <h2 class="text-uppercase text-white mt-0 text-center">NUMERO VERT</h2>
                                    <h2 class="text-white text-center">Envoyez  <span class="text-theme-colored"> URGENCE </span>  au </h2>
                                    <h1 class="text-white text-center"> 8070 </h1>
                                    <p class="text-white text-center">Service GRATUIT et Disponible même sans Connection Internet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: about -->
        <section id="about">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="twentytwenty-container">
                                <img src="{{ asset('dentalpro/images/Minsante.jpg') }}" alt="">
                                <img src="{{ asset('dentalpro/images/Minsante.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h2 class="font-size-38 mt-0 text-center">Nous Sommes  <span class="text-theme-colored"> 100% CONFORMES</span> AUX NORMES EN VIGUEUR</h2>
                            <p class="lead text-center">Nous Sommes certifiées par le ministère de la santé publique et reconnus par plusiurs grands hopitaux du Cameroun.
                            </p>
                            <ul class="list-inline">
                                <li><img src="{{ asset('dentalpro/images/awards/1.png') }}" alt=""></li>
                                <li><img src="{{ asset('dentalpro/images/awards/2.png') }}" alt=""></li>
                                <li><img src="{{ asset('dentalpro/images/awards/3.png') }}" alt=""></li>
                            </ul>
                            <a class="btn btn-theme-colored btn-lg btn-circled mt-30 center-block">En Savoir Plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Services -->
        <section class="bg-silver-light">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase mt-0 line-height-1 theme-colored2">Services <i class="fa fa-ambulance text-theme-colored  sm-display-block flip sm-pull-none"></i></h2>
                            <p> Nos services à votre portée!</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="icon-box iconbox-theme-colored2 left media p-0">
                                <a href="#" class="icon icon-bordered icon-circled media-left pull-left"><i class="flaticon-medical-ambulance9 text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h3 class="media-heading heading">Transport Ambulatoire</h3>
                                    <p>Pour le transport de vos malades  afin d'assurer votre fierté.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="icon-box iconbox-theme-colored2 left media p-0">
                                <a href="#" class="icon icon-bordered icon-circled media-left pull-left"><i class="fa fa-medkit text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h3 class="media-heading heading">Mise en relations avec des médécins</h3>
                                    <p>Des Médécins Compétents et disponibles et à votre portée</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="icon-box iconbox-theme-colored2 left media p-0">
                                <a href="#" class="icon icon-bordered icon-circled media-left pull-left"><i class="fa fa-headphones text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h3 class="media-heading heading">Support Qualifié</h3>
                                    <p> Nous sommes à votre écoute pour tout souci ou préoccupation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: Call To Action -->
        <section  class="divider parallax layer-overlay overlay-theme-colored-8" data-bg-img="{{ asset('images/bg_3.jpg') }}">
            <div class="container">
                <div class="call-to-action">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h2 class="text-white"><i class="pe-7s-call text-white"></i><a class="text-white" href="#"> 8796</a></h2>
                            <h2 class="text-white">Contactez ce numéro vert gratuitement en cas d'urgence.</h2>
                            <a href="#" class="btn btn-default btn-theme-colored2 mt-20">Contactez - Nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--start testimonial Section-->
        <section class="divider parallax layer-overlay overlay-theme-colored-8" data-parallax-ratio="0.1" data-bg-img="{{ asset('images/bg_3.jpg') }}">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase text-white mt-0 line-height-1">Témoignages</h2>
                            <p class="text-white">Avis de Clients ayants déja utilisés notre plateforme</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel-3col" data-dots="true">
                                <div class="item">
                                    <div class="testimonial style1">
                                        <div class="comment bg-theme-colored2">
                                            <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="{{ asset('images/person_1.jpg') }}"> </div>
                                            <div class="text-right flip pull-right flip mr-20 mt-10">
                                                <h5 class="author text-theme-colored2">Gavin Smith</h5>
                                                <h6 class="title text-white">Patient Heureux</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial style1">
                                        <div class="comment bg-theme-colored2">
                                            <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="{{ asset('images/person_2.jpg') }}"> </div>
                                            <div class="text-right flip pull-right flip mr-20 mt-10">
                                                <h5 class="author text-theme-colored2">Jonathan Smith</h5>
                                                <h6 class="title text-white">Patient Heureux</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial style1">
                                        <div class="comment bg-theme-colored2">
                                            <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="{{ asset('images/person_3.jpg') }}"> </div>
                                            <div class="text-right flip pull-right flip mr-20 mt-10">
                                                <h5 class="author text-theme-colored2">Mary James</h5>
                                                <h6 class="title text-white">Patient Heureux</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial style1">
                                        <div class="comment bg-theme-colored2">
                                            <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="{{ asset('images/person_4.jpg') }}> </div>
                                            <div class="text-right flip pull-right flip mr-20 mt-10">
                                                <h5 class="author text-theme-colored2">Lucy brown</h5>
                                                <h6 class="title text-white">Patient Heureux</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script type="text/javascript">
            $(function () {
                $('.datetimepicker').datetimepicker();
            });
        </script>

@include('home.footer')