$(document).ready(function() {

    $('select[name="ville_id_start"]').on('change', function(){
        var countryId = $(this).val();
        if(countryId) {
            $.ajax({
                url: '/states/get/'+countryId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="quartier_id_start"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="quartier_id_start"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="quartier_id_start"]').empty();
        }

    });

    $('select[name="ville_id_stop"]').on('change', function(){
        var countryId = $(this).val();
        if(countryId) {
            $.ajax({
                url: '/states/get/'+countryId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="quartier_id_stop"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="quartier_id_stop"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="quartier_id_stop"]').empty();
        }

    });
});
