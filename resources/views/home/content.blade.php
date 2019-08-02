@include('home.head')
@include('home.body')
@include('home.slider')


    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: home -->

        <!-- Section: Welcome -->
        <section>
            <div class="container pb-0 pt-110">
                <div class="row equal-height-inner">
                    <div class="col-md-4 mb-sm-60">
                        <div class="feature-icon-box p-30">
                            <div class="feature-icon bg-theme-colored">
                                <i class="fa fa-ambulance text-white font-30"></i>
                            </div>
                            <h6 class="text-uppercase">BESOIN D'AIDE</h6>
                            <h4 class="text-uppercase">AMBULANCE D'URGENCE</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis id explicabo quam quo nisi nihil ducimus, possimus, in aperiam, optio repellat commodi labore. Explicabo quam dolor sit.</p>
                            <a href="#" class="btn p-0 mt-15 font-13">Contact Now <i class="fa fa-angle-double-right ml-5"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4  mb-sm-60">
                        <div class="feature-icon-box p-30">
                            <div class="feature-icon bg-theme-colored">
                                <i class="fa fa-user-md text-white font-30"></i>
                            </div>
                            <h6 class="text-uppercase">Rencontrez vos Docteurs</h6>
                            <h4 class="text-uppercase">MEDECIN D'URGENCE</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis id explicabo quam quo nisi nihil ducimus, possimus, in aperiam, optio repellat commodi labore. Explicabo quam dolor sit.</p>
                            <a href="#" class="btn p-0 mt-15 font-13">Read More <i class="fa fa-angle-double-right ml-5"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-icon-box p-30 pb-0">
                            <div class="feature-icon bg-theme-colored">
                                <i class="fa fa-question text-white font-30"></i>
                            </div>
                            <h6 class="text-uppercase ">BESOIN D'AIDE</h6>
                            <h4 class="text-uppercase mb-5">LIRE LE GUIDE UTILISATEUR</h4>
                            <div class="widget mb-0">
                                <div class="opening-hours">
                                    <a  class="font-20 text-white text-uppercase btn btn-theme-colored" href="/manual"> CLIQUEZ ICI</a>
                                    <br><br>
                                    <button class="btn btn-theme-colored" onclick="$crisp.push(['do', 'chat:open'])">Lancer de chat</button>

                    </div>
                </div>
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
        <section  class="divider parallax layer-overlay overlay-theme-colored-8">

        <!--start testimonial Section-->
        <section class="divider parallax layer-overlay overlay-theme-colored-8" data-parallax-ratio="0.1" >
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
                                            <p>Grâce à cardiomobile, la vie de ma fille a été sauvée, Grand Merci.</p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="{{ asset('images/person_1.jpg') }}" height="50"> </div>
                                            <div class="text-right flip pull-right flip mr-20 mt-10">
                                                <h5 class="author text-theme-colored2">Anabelle Tsamo</h5>
                                                <h6 class="title text-white">Client Heureux</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial style1">
                                        <div class="comment bg-theme-colored2">
                                            <p>CARDIOMOBILE a réinventé le déplacement ambulatoire au Cameroun, un grand bravo.</p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="{{ asset('images/person_2.jpg') }}" height="50"> </div>
                                            <div class="text-right flip pull-right flip mr-20 mt-10">
                                                <h5 class="author text-theme-colored2">Brice Kamga</h5>
                                                <h6 class="title text-white">Client Heureux</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial style1">
                                        <div class="comment bg-theme-colored2">
                                            <p>Enfin une solution pour rencontrer les médécins en urgence, il était temps.</p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="{{ asset('images/person_3.jpg') }}" height="50"> </div>
                                            <div class="text-right flip pull-right flip mr-20 mt-10">
                                                <h5 class="author text-theme-colored2">Mary ATSAMA</h5>
                                                <h6 class="title text-white">Client Heureux</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial style1">
                                        <div class="comment bg-theme-colored2">
                                            <p>Nous sommes trop content, CARDIOMOBILE votre service est génial.</p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="{{ asset('images/person_4.jpg') }}" height="50"> </div>
                                            <div class="text-right flip pull-right flip mr-20 mt-10">
                                                <h5 class="author text-theme-colored2">Lucy KEIGNI</h5>
                                                <h6 class="title text-white">Client Heureux</h6>
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

        <script>
                $(document).ready(function () {
                    $("#wizard_example").stepFormWizard({
                        transition: '3d-cube', // slide, fade, 3d-cube, none
                        duration: 2000,
                        theme: 'circle'
                    });
                })
                $(window).load(function () {
                    /* only if you want use mcustom scrollbar */
                    $(".sf-step").mCustomScrollbar({
                        theme: "dark-3",
                        scrollButtons: {
                            enable: true
                        }
                    });

                });
            </script>
        </section>
</div>
</body>

@include('home.footer')
