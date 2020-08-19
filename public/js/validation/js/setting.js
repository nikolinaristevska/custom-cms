var validation = function() {
    'use strict';
    $("#mycontactform").validate({
        submitHandler: function() {
            $("#submit").addClass("disabled");
            $(".status-progress").html("<div class='wow rotateIn' data-wow-iteration='infinite' data-wow-duration='2s'><i class='fa fa-hour-glass'></i></div> ");
            $.post("contact/email.php", $("#mycontactform").serialize(), function(response) {
                $('#success').html(response);
                $("#submit").removeClass("disabled");
                $(".status-progress").html("");
            });
            return false;
        }
    });
}();