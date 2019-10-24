
@include('home.head')
@include('home.body')

<section id="home" >
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container  pt-50 pb-5">
                <h3 class="mt-0  pt-20 mb-10 text-theme-colored text-center">MEDECIN D'URGENCE</h3>
                <h4 class="mt-0  pt-10 text-center text-theme-colored"><i>Vous Souhaitez Prendre un de RDV?</i></h4>

                <?php
                use Carbon\Carbon;
                $locale = 'fr_FR';
                $begin = Carbon::now('Africa/Douala');;
            echo $begin;
                ?>

            </div>
        </div>
    </div>

</section>

@include('home.footer')