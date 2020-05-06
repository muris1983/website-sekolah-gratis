/*

Script  : Admission Form
Version : 1.0
Author  : Surjith S M
URI     : http://themeforest.net/user/surjithctly

Copyright © All rights Reserved
Surjith S M / @surjithctly

*/

$(function() {

    "use strict";


    /* ================================================
   jQuery Validate - Reset Defaults
   ================================================ */

    $.validator.setDefaults({
        ignore: [],
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-danger');
            $(element).addClass('form-control-danger');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-danger');
            $(element).removeClass('form-control-danger');
        },
        errorElement: 'div',
        errorClass: 'form-control-feedback',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length || element.parent('label').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });


    /* 
    VALIDATE
    -------- */

    $("#admissionform").submit(function(e) {
        e.preventDefault();
    }).validate({
        rules: { 
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            first_name: "Your first name please",
            last_name: "Your last name please",
            email: "We need your email address",
            phone: "Please enter your phone number",
            message: "Please enter your message"
        },
        submitHandler: function(form) {

            $("#js-admission-btn").attr("disabled", true);

            /* 
            CHECK PAGE FOR REDIRECT (Thank you page)
            ---------------------------------------- */

            var redirect = $('#admissionform').data('redirect');
            var noredirect = false;
            if (redirect == 'none' || redirect == "" || redirect == null) {
                noredirect = true;
            }

            $("#js-admission-result").html('<p class="help-block">Please wait...</p>');

            /* 
            FETCH SUCCESS / ERROR MSG FROM HTML DATA-ATTR
            --------------------------------------------- */

            var success_msg = $('#js-admission-result').data('success-msg');
            var error_msg = $('#js-admission-result').data('error-msg');

            var dataString = $(form).serialize();

            /* 
             AJAX POST
             --------- */

            $.ajax({
                type: "POST",
                data: dataString,
                url: "php/admission.php",
                cache: false,
                success: function(d) {
                    $(".form-group").removeClass("has-success");
                    if (d == 'success') {
                        if (noredirect) {
                            $('#js-admission-result').fadeIn('slow').html('<div class="alert alert-success mt-3">' + success_msg + '</div>').delay(3000).fadeOut('slow');
                        } else {
                            window.location.href = redirect;
                        }
                    } else {
                        $('#js-admission-result').fadeIn('slow').html('<div class="alert alert-danger mt-3">' + error_msg + '</div>').delay(3000).fadeOut('slow');
                        if (window.console) {
                            console.log('PHP Error: ' + d);
                        }
                    }
                    $("#js-admission-btn").attr("disabled", false);
                },
                error: function(d) {
                    $('#js-admission-result').fadeIn('slow').html('<div class="alert alert-danger mt-3"> Cannot access Server</div>').delay(3000).fadeOut('slow');
                    $("#js-admission-btn").attr("disabled", false);
                    if (window.console) {
                        console.log('JS Error: Please make sure you are running on a PHP Server');
                    }
                }
            });
            return false;

        }
    });

})
