var request;

var login = {
  request: function (form) {
    // Let's select and cache all the fields
    var inputs = form.find("input, select, button, textarea");
    var serializedData = form.serialize();

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    inputs.prop("disabled", true);

    request = $.ajax({
      url: "login.php",
      type: "post",
      data: serializedData
    });

    request.done(function (response, textStatus, jqXHR) {
      response = JSON.parse(response);
      console.log(response);
      if (response.success) {
        window.location.replace('dashboard.php');
      } else {
        login.error(response.message);
      }
    });

    request.fail(function (jqXHR, textStatus, errorThrown) {
      console.error(
          'The following error occurred: ' +
          textStatus, errorThrown
      );
    });

    request.always(function () {
      inputs.prop("disabled", false);
    });
  },
  error: function (message) {
    var alert = '<div><strong>Error:&nbsp;</strong>' + message + '</div>';
    var duration = 2048;

    $('#login-form').effect('shake');
    $('#response').html(alert);
  }
};

$(document).ready(function () {
  $('#login-error').hide();
  $('#username-required').hide();
  $('#password-required').hide();

  if (location.protocol != 'https:') {
    console.warn('Connection is not secure.');
  }

  $('#login-form').submit(function (event) {
    event.preventDefault();

    // Abort any pending request
    if (request) {
      request.abort();
    }

    var form = $(this);

    var username = $('#username').val();
    var password = $('#password').val();

    // Validate that a username and password has been sent
    if (username.length == 0) {
      $('#username-required').slideDown();
    } else {
      $('#username-required').fadeOut();
    }

    if (password.length == 0) {
      $('#password-required').slideDown();
    } else {
      $('#password-required').fadeOut();
    }

    if (username.length > 0 && password.length > 0) {
      login.request(form);
    }
  });
});
