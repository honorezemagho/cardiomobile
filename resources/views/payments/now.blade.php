
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
                   <h4> Votre Facture est de : Payer 10$ (5000 FCFA)</h4>
                </div>

                <div class="wrapper col-md-4 col-md-offset-4">

                    <div class="content">
                        <h1>Laravel 5.8 PayPal Integration Tutorial - ItSolutionStuff.com</h1>

                        <table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr>
                            <tr><td align="center"><a href="https://www.paypal.com/in/webapps/mpp/paypal-popup"
 title="How PayPal Works"
onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700');
return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo"></a></td></tr></table>

                        <a href="{{ route('payment') }}" class="btn btn-success">Payer 10$ (5000 FCFA) avec Paypal</a>

                    </div>

                </div>

                        </div>
            </div>

</section>




@include('home.footer')
