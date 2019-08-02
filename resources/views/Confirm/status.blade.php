@include('home.head')
@include('home.body')


            <div class="main-content">
                <h1 class="text-center">   {{$header}} </h1>
                <section>
<div class="container alert-info text-center">

                {{$messages}}

</div>
    </section>
</div>

<div class="container col-md-2 centered-block">
</div>

@include('home.footer')