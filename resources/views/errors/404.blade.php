
@include('home.head')
<!-- Start main-content -->
<div class="container">
    <!-- Section: home -->
    <section id="home" class="fullscreen bg-lightest">
        <div class="display-table text-center p-100">
            <div class="display-table-cell">
                <div class="container pt-100 pb-1000">
                    <div class="row">
                        <div class="col-md-8 col-lg-8">
                            <h1 class="font-200 line-height-1em mt-0 mb-0 text-theme-colored">404!</h1>
                            <h2 class="mt-0">Désolé page non trouvé</h2>
                            <p>La page que vous recherchiez est introuvable.</p>
                            <a class="btn btn-border btn-gray btn-transparent btn-circled smooth-scroll-to-target" href="/">
                                Retourner à l'accueuil
                            </a>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <h3>Quelques Liens Utiles</h3>
                            <div class="widget">
                                <ul class="list-border">
                                    <li><a target="blank" href="{{Request::root()}}">Accueuil</a></li>
                                    <li><a onclick="$crisp.push(['do', 'chat:open'])">Chat</a></li>
                                    <li><a href="/itineraire/create">Ambulance</a></li>
                                    <li><a href="{{Request::root()}}">Medecin D'urgence</a></li>
                                    <li><a target="blank" href="/contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div >
    </section>
</div>
<!-- end main-content -->

<!-- Footer -->

<footer id="footer" class="footer">
    <div class="container p-40 ">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="mb-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> CARDIOMOBILE. Tout Droits Réservés</p>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
