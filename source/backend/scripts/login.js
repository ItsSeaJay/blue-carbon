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
        login.error();
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
  error: function () {
    $('#login-form').effect('shake');
  }
};

$(document).ready(function () {
  $('#login-error').hide();

  if (location.protocol != 'https:') {
    // TODO: Add a message to encourage users to use a secure connection
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

    if (username.length == 0) {

    }

    if (username.length == 0) {

    }

    if (username.length > 0 && password.length > 0) {
      login.request(form);
    }
  });
});
