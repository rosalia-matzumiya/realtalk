$(document).ready(function () {
        $('#input').change(function () {
            $.ajax({
                type:'GET',
                url: '/bot',
                dataType: 'json',
                //data: '{',
                success: function (msg) {
                    $.each(result[0], function (key, value) {
                        console.log(key, value);
                    });
                }
            });
        });
    });