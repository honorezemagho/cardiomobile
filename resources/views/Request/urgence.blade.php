@include('home.head')
@include('home.body')
<div class="container centered-block text-center">

    @if($send)
        <h2><span class="text-theme-colored text-center">Recherche de Médecins disponibles</span></h2>
        <div class="container  text-center"> {{ $send . "  exist and it's works"}}</div>
        <div id="preloader">
            <div id="spinner">
                <img src="{{asset('dentalpro/images/preloaders/13.gif')}}" alt="">
            </div>
        </div>
    @endif

    </div>
</div>

<script type="text/javascript">


</script>
</body>
@include('home.footer')

