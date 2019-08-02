<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Step From Wizard - 03 - transition</title>

    <script src="{{ asset('wizard/js/jquery-2.1.4.min.js') }}"></script>

    <!-- bootstrap for better look example, but not necessary -->
    <link rel="stylesheet" href="{{ asset('wizard/css/bootstrap.min.css') }}" type="text/css" media="screen, projection">

    <!-- Step Form Wizard plugin -->
    <link rel="stylesheet" href="{{ asset('wizard/css/step-form-wizard-all.css') }}" type="text/css" media="screen, projection">
    <script src="{{ asset('wizard/js/step-form-wizard.min.js') }}"></script>

    <!-- nicer scroll in steps -->
    <link rel="stylesheet" href="{{ asset('wizard/css/jquery.mCustomScrollbar.min.css') }}">
    <script src="{{ asset('wizard/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

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

</head>
<body>
<div class="container">
    <div class="site-index">
        <div class="body-content">

            <div class="row">
                <div class="col-md-12">
                    <form id="wizard_example" action="">
                        <fieldset>
                            <legend>Basic information</legend>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label {{--for="exampleInputEmail1"--}}>Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               name="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                               name="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password again</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordAgain1"
                                               name="exampleInputPasswordAgain1" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Favorite number</label>
                                        <select class="form-control" name="favoriteNumber">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Own animals</label>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="animal[]" value="goat" data-sf-text="Koza"> Goat
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="animal[]" value="cow"> Cow
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="animal[]" value="rooster" data-sf-text="Kohout"> Rooster
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="animal[]" value="crocodile"> Crocodile
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    In publishing and graphic design, lorem ipsum is common placeholder text used to
                                    demonstrate the graphic elements of a document or visual presentation, such as web
                                    pages, typography, and graphical layout. It is a form of "greeking".
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Condition</legend>
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
