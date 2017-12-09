var request;

$(document).ready(function () {
  $('#login-error').hide();

  $('#login-form').submit(function (event) {
    event.preventDefault();

    // Abort any pending request
    if (request) {
        request.abort();
    }

    var form = $(this);

    var username = $('#username').val();
    var password = $('#password').val();

    if (username.length > 0) {
      if (password.length > 0) {
        if (attemptLogin(form)) {
          alert('login');
        } else {
          showError('<p><strong>Error:&nbsp;</strong>login attempt failed.</p>');
        }
      } else {
        showError('<p>Password cannot be blank</p>');
      }
    } else {
      showError('<p>Username cannot be blank</p>');
    }
  });
});

function attemptLogin(form) {
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
    console.log(response);
    console.log(response.message);
  });

  request.fail(function (jqXHR, textStatus, errorThrown) {
      console.error(
          "The following error occurred: "+
          textStatus, errorThrown
      );
  });

  request.always(function () {
      inputs.prop("disabled", false);
  });

  return false;
}

function showError(message) {
  $('#login-form').effect('shake');
}
