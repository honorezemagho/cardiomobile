$(document).ready(function() {

    $('select[name="ville_id"]').on('change', function(){
        var countryId = $(this).val();
        if(countryId) {
            $.ajax({
                url: '/quartier/get/'+countryId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="quartier_id"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="quartier_id"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="quartier_id"]').empty();
        }

    });

});