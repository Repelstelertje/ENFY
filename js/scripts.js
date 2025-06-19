/*!
* Start Bootstrap - One Page Wonder v6.0.6 (https://startbootstrap.com/theme/one-page-wonder)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-one-page-wonder/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

// Contact form handling
$(document).ready(function () {
    $('#contactForm').on('submit', function (event) {
        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'send_email.php',
            data: $(this).serialize(),
            success: function (response) {
                $('#responseMessage').html('<div class="alert alert-success">' + response + '</div>');
                $('#contactForm')[0].reset();
            },
            error: function () {
                $('#responseMessage').html('<div class="alert alert-danger">Er is iets misgegaan. Probeer het later opnieuw.</div>');
            }
        });
    });
});
