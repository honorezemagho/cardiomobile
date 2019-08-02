@include('home.head')
@include('home.body')
<!-- Divider: Contact -->
<section class="divider">
    <div class="container">
        <div class="row pt-30">
            <div class="col-md-6">
                <h3 class="line-bottom mt-0 mb-30">Voulez vous Discuter?</h3>

                <!-- Contact Form -->
                <form id="contact_form" name="contact_form" class="" action="{{asset('includes/sendmail.php')}}" method="post">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nom <small>*</small></label>
                                <input name="form_name" class="form-control" type="text" placeholder="Votre Nom" required="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email<small>*</small></label>
                                <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Sujet<small>*</small></label>
                                <input name="form_subject" class="form-control required" type="text" placeholder="Votre Sujet">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Téléphone<small>*</small></label>
                                <input name="form_phone" class="form-control" type="text" placeholder="Enter votre numéro de Téléphone">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="form_message" class="form-control required" rows="5" placeholder="Entrez votre Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input name="form_botcheck" class="form-control" type="hidden" value="" />
                        <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Envoyez votre message</button>
                    </div>
                </form>

                <!-- Contact Form Validation-->
                <script type="text/javascript">
                    $("#contact_form").validate({
                        submitHandler: function(form) {
                            var form_btn = $(form).find('button[type="submit"]');
                            var form_result_div = '#form-result';
                            $(form_result_div).remove();
                            form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                            var form_btn_old_msg = form_btn.html();
                            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                            $(form).ajaxSubmit({
                                dataType:  'json',
                                success: function(data) {
                                    if( data.status === 'true' ) {
                                        $(form).find('.form-control').val('');
                                    }
                                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                                    $(form_result_div).html(data.message).fadeIn('slow');
                                    setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                                }
                            });
                        }
                    });
                </script>
            </div>


       {{--     <form id="formmomo" method="GET" action="https://developer.mtn.cm/OnlineMomoWeb/faces/transaction/transactionRequest.xhtml" target="_top">
                <input type="hidden" name="idbouton" value="2" autocomplete="off">
                <input type="hidden" name="typebouton" value="PAIE" autocomplete="off">
                <input class="momo mount" type="hidden" placeholder="" name="_amount" value="5000" id="montant" autocomplete="off">
                <input class="momo host" type="hidden" placeholder="" name="_tel" value="670404095" autocomplete="off">
                <input class="momo pwd" placeholder="Please enter your password" name="_clP" value="" autocomplete="off" type="hidden">
                <input type="hidden" name="_email" value="zankafred@gmail.com" autocomplete="off">
                <input type="image" id="Button_Image" src="https://developer.mtn.cm/OnlineMomoWeb/console/uses/itg_img/buttons/MOMO_buy_now_EN.jpg" style="width : 250px; height: 100px;" border="0" name="submit" alt="OnloneMomo, le réflexe sécurité pour payer en ligne" autocomplete="off">
            </form>--}}

            <div class="col-md-6">
                <h3 class="line-bottom mt-0">Restons Connectés</h3>
                <p>Nos Différents Contacts et comptes sociaux.</p>
                <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">
                    <li><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="tel:+237689756789" data-bg-color="#A4CA39"><i class="fa fa-whatsapp"></i></a></li>

                </ul>

                <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                    <div class="media-body">
                        <h5 class="mt-0">Notre Emplacement</h5>
                        <p>Akwa, Immeuble LGQ</p>
                    </div>
                </div>
                <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                    <div class="media-body">
                        <h5 class="mt-0">Numéro Téléphonique</h5>
                        <p><a href="tel:+237689756789">+237689756789</a></p>
                    </div>
                </div>
                <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                    <div class="media-body">
                        <h5 class="mt-0">Adresse Email</h5>
                        <p><a href="mailto:supporte@uberambulance.com">support@uberambulance.com</a></p>
                    </div>
                </div>
                <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="fa fa-skype text-theme-colored"></i></a>
                    <div class="media-body">
                        <h5 class="mt-0">Skype</h5>
                        <p>id_skype = "uberambulance"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- end main-content -->
@include('home.footer')