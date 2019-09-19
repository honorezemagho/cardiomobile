
@include('home.head')
@include('home.body')

<section id="home" >
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container  pt-50 pb-5">
                <h3 class="mt-0  pt-20 mb-10 text-theme-colored text-center">Paiements Marchands</h3>
                <h4 class="mt-0  pt-10 text-center text-theme-colored"><i>Veuillez Compléter le paiement</i></h4>
            </div>

                <div class="container text-theme-colored2 text-center">
                   <h4> Votre Facture est de : {{$data['payment_amount']}} XAF (FCFA AU CAMEROUN)</h4>
                </div>

                <div class="wrapper col-md-4 col-md-offset-4">

                    <form action="/payments/now" method="POST" id="wecashup">

                        <script async src="https://www.wecashup.com/library/MobileMoney.js" class="wecashup_button"
                                data-demo
                                data-sender-lang="en"
                                data-sender-phonenumber="{{$data['phone']}}"
                                data-receiver-uid="AtZO3EtkbUXsRkwVGnGKPjqNNaA2"
                                data-receiver-public-key="pk_live_7PGOQNHIjc5L1P2Y"
                                data-transaction-parent-uid=""
                                data-transaction-receiver-total-amount="{{$data['payment_amount']}}"
                                data-transaction-receiver-reference="XVT2VBF"
                                data-transaction-sender-reference="XVT2VBF"
                                data-sender-firstname="Test"
                                data-sender-lastname="Test"
                                data-transaction-method="pull"
                                data-image="https://www.cardiomobile.mydigis.com/dentalpro/images/apple-touch-icon-144x144.png"
                                data-name="CARDIOMOBILE"
                                data-crypto="true"
                                data-cash="true"
                                data-telecom="true"
                                data-m-wallet="true"
                                data-split="true"
                                configuration-id="3"
                                data-marketplace-mode="false"
                                data-product-1-name="Billet ABJ PRS"
                                data-product-1-quantity="1"
                                data-product-1-unit-price="{{$data['payment_amount']}}"
                                data-product-1-reference="XVT2VBF"
                                data-product-1-category="URGENCE"
                                data-product-1-description="RENDEZ VOUS A A CLINIQUE"
                        >

                        </script>
                    </form>

                </div>

                        </div>
            </div>

</section>




@include('home.footer')
