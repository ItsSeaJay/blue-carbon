var request;

$(document).ready(function () {
  $('#description').on('input', function (event) {
    event.preventDefault();

    if (request) {
      request.abort();
    }

    var textarea = $(this);
    var data = {
      'description': $(textarea).val()
    };

    request = $.ajax({
      url: 'preview_description.php',
      type: 'post',
      data: data
    });

    request.done(function (response, status, jqXHR) {
      $('#preview').html(response);
    });

    request.fail(function (jqXHR, status, error) {
      console.error(
        "The following error occurred: "+
        textStatus, errorThrown
      );
    });

    // request.always(function () {
    //
    // });
  });
})
