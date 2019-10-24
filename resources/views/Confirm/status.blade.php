@include('home.head')
@include('home.body')


            <div style="width:800px; margin:0 auto;">
                <h1 class="text-center">   {{$header}}
            </div >


        <section>
        <div class="container alert-info text-center">

                {{$messages}}<br><br>

        </div>
                </section>

        <div class="container col-md-2 centered-block">
        </div>

            @include('home.footer')