var request;

$(document).ready(function () {
  $('#login-form').submit(function (event) {
    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    // Abort any pending request
    if (request) {
        request.abort();
    }

    var form = $(this);

    var username = $('#username').val();
    var password = $('#password').val();

    // Let's select and cache all the fields
    var inputs = form.find("input, select, button, textarea");

    // Serialize the data in the form
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

    request.done(function (response, textStatus, jqXHR){
        console.log("Blue Carbon login request done!");
    });

    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    request.always(function () {
        inputs.prop("disabled", false);

        // TODO: Remove this output
        console.log('Username:', username);
        console.log('Password:', password);
    });
  });
});
