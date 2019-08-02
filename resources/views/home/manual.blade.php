
@include('home.body')
@include('adminlte::master');
<div class="container centered-block">
<ul class="timeline">

    <!-- timeline time label -->
    <li class="time-label">
        <span class="bg-blue">
            Etape 1
        </span>
    </li>
    <!-- /.timeline-label -->

    <!-- timeline item -->
    <li>
        <!-- timeline icon -->
        <i class="fa fa-globe bg-blue"></i>
        <div class="timeline-item">
            <h3 class="timeline-header text-uppercase">Aller sur le site<a href="https://cardiomobile.mydigis.com" target="_blank" class="text-theme-colored"> cardiomobile.mydigis.com </a> </h3>

            <div class="timeline-body">
               <img src = "{{ asset('images/web1m.jpg') }}">
            </div>
        </div>
    </li>
    <!-- END timeline item -->

    ...

</ul>


    <ul class="timeline">

        <!-- timeline time label -->
        <li class="time-label">
        <span class="bg-blue">
            Etape 2
        </span>
        </li>
        <!-- /.timeline-label -->

        <!-- timeline item -->
        <li>
            <!-- timeline icon -->
            <i class="fa fa-globe bg-blue"></i>
            <div class="timeline-item">
                <h3 class="timeline-header text-uppercase">Choisir le service souhaité </h3>

                <div class="timeline-body">
                   <h4 class="text-theme-colored text-uppercase"> Si vous désirez rencontrer un Médécin, veuillez remplir le formulaire. <br>
                       <br>
                    Si vous désirez  plutôt commander une Ambulance veuillez cliquer sur <b> COMMANDER UNE AMBULANCE</b> </h4>
                    <img src = "{{ asset('images/web1m.jpg') }}">
                </div>

            </div>
        </li>
        <!-- END timeline item -->

        ...

    </ul>


    </ul>


    <ul class="timeline">

        <!-- timeline time label -->
        <li class="time-label">
        <span class="bg-blue">
            MEDECIN D'URGENCE
        </span>
        </li>
        <!-- /.timeline-label -->

        <!-- timeline item -->
        <li>
            <!-- timeline icon -->
            <i class="fa fa-globe bg-blue"></i>
            <div class="timeline-item">
                <h3 class="timeline-header text-uppercase">Remplissez le formulaire médécin d'urgence </h3>

                <div class="timeline-body">
                    <h4 class="text-theme-colored text-uppercase">
                        1.  Rentrez dans le formulaire votre nom complet, Choisissez votre ville et votre quartier puis cliquez sur <b>"suivant"</b> <br><br>
                        2.  Ensuite rentrez dans le formulaire votre numéro de téléphone puis  donnez-nous une brève description du problème et enfin cliquez sur <b>"envoyer" </b><br><br>
                        3.  La plateforme fera la recherche du médécin disponible dans votre secteur<br><br>
                        4. Si Après 5 Minutes, aucun médécin n'est disponible, l'opération est annulée<br><br>

                        <img src = "{{ asset('images/med.png') }}">
                        <img src = "{{ asset('images/med2.png') }}"><br><br>
                        5. Si un médécin est disponible, la plateforme vous redirige vers une page où vous verez le prix du service et les moyens de paiement<br><br>
                        6. Lorsque le paiement a été effectué, la plateforme vous donnera le nom du médécin pour l'opération et son matricule et
                        un message lui sera envoyé pour se mettre en route. </h4>
                </div>

            </div>
        </li>
        <!-- END timeline item -->

        ...

    </ul>

    </ul>


    <ul class="timeline">

        <!-- timeline time label -->
        <li class="time-label">
        <span class="bg-blue">
            COMMANDER UNE AMBULANCE
        </span>
        </li>
        <!-- /.timeline-label -->

        <!-- timeline item -->
        <li>
            <!-- timeline icon -->
            <i class="fa fa-globe bg-blue"></i>
            <div class="timeline-item">
                <h3 class="timeline-header text-uppercase"> CLIQUEZ SUR COMMANDER UNE AMBULANCE</h3>

                <div class="timeline-body">
                    <h4 class="text-theme-colored text-uppercase">
                        1.  Rentrez dans le formulaire votre nom complet, Choisissez votre ville et votre quartier de votre localisation actuelle(Départ) ensuite remplissez votre ville et votre quartier que vous souhaitez aller(Arrivée) . Exemple (DOUALA-AKWA-SUD, YAOUNDE-NGOUSSO) puis cliquez sur <b>"suivant"</b> <br><br>
                        2.  Ensuite rentrez dans le formulaire votre nom complet, votre numéro de téléphone puis  donnez-nous une brève description du problème et enfin cliquez sur <b>"COMMANDER" </b><br><br>
                        3.  La plateforme fera la recherche du médécin disponible dans votre secteur<br><br>
                        4. Si Après 5 Minutes, aucune ambulance n'est disponible, l'opération est annulée<br><br>
                        <div class="container">
                        <div class="row col-sm-5"><img src = "{{ asset('images/Iti.PNG') }}"></div>
                            <div class="col-sm-2"></div>
                        <div class="row col-sm-5"><img src = "{{ asset('images/Iti1.png') }}"></div>
                        </div>
                    </h4>

                    <div class="container">
                    <h4 class="text-theme-colored text-uppercase">
                        5. Si une ambulance est disponible, la plateforme vous redirige vers une page où vous verez le prix du service et les moyens de paiement<br><br>
                        6. Lorsque le paiement a été effectué, la plateforme vous donnera le nom de l'ambulance pour l'opération et son matricule et
                        un message lui sera envoyé pour se mettre en route. </h4></div>
                </div>

            </div>
        </li>
        <!-- END timeline item -->

        ...

    </ul>
</div>


@include('home.head')
@include('home.footer2')
