var request;

$(document).ready(function () {
  var buttons = $('.btn-delete-detail');
  var form = $('#project-form');

  for (var button = 0; button < buttons.length; button++) {
    $(buttons[button]).click(function (event) {
      var node = $(this).parent();

      event.preventDefault();

      if (request) {
        request.abort();
      }

      id = node.data('id');
      data = {
        'id': id
      };

      request = $.ajax({
        url: 'remove_detail.php',
        type: 'post',
        data: data
      });

      request.done(function (response, status, jqXHR) {
        response = JSON.parse(response);
        console.log(response);

        if (response.success) {
          node.fadeOut(300, function () {
            $(this).remove();
          });
        } else {
          console.error(response.message);
        }
      });

      request.fail(function (jqXHR, status, error) {
        console.error(
          'The following error occurred: ',
          status,
          error
        );
      });
    });
  }
});
