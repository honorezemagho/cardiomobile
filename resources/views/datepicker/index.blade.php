<html>
<head>
    <title>The Materialize Range Example</title>
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
   <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      
</head>

<body class = "container">
<div class = "row">
    <form class = "col s12">
        <div class = "row">
            <label>Materialize DatePicker</label>
            <input type = "text" class = "datepicker" />
        </div>
    </form>
</div>

<script type = "text/javascript" src = "{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script>
$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
    container: undefined, // ex. 'body' will append picker to body
  });  
</script>

{{-- <script>

    $(document).ready(function(){
        $('.datepicker').pickadate({
            format: 'dd/mm/yyyy',
            minDate: new Date(),
            yearRange : 10,
            showClearBtn: false,
            months: [

                    'Janvier',
                    'Février',
                    'Mars',
                    'Avril',
                    'Mai',
                    'Juin',
                    'Juillet',
                    'Août',
                    'Septembre',
                    'Octobre',
                    'Novembre',
                    'Decembre'
            ],
            monthsShort:
                [
                    'Jan',
                    'Fev',
                    'Mar',
                    'Avr',
                    'Mai',
                    'Juin',
                    'Juil',
                    'Août',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ],

            weekdays: [
                    'Dimanche',
                    'Lundi',
                    'Mardi',
                    'Wedny',
                    'Thursday',
                    'Friday',
                    'Saturday'
                ]

        });
    });

</script> --}}
</body>
</html>