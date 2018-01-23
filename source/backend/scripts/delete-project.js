var request;

$('document').ready(function () {
  var buttons = $('.btn-delete-project');
  var modal = $('#delete-project');
  var form = $('#delete-form');
  var span = $('#title-span');
  var submit = form.find('submit');

  for (var button = 0; button < buttons.length; button++) {
    $(buttons[button]).click(function (event) {
      var target = this.dataset.title;
      var node = $(this).parent().parent();

      event.preventDefault();
      modal.modal('show');
      span.html(target);
      $('#blank-title-delete').fadeOut();
      $('#nonmatching-title-delete').fadeOut();

      $(form.submit(function (event) {
        event.preventDefault();

        var title = form.find('input[name="title"]').val();
        var uri = encodeURIComponent(title);

        // Verify the title the user entered
        if (title.length > 0) {
          if (title === target) {
            // Make the AJAX request
            if (request) {
              request.abort();
            }

            var inputs = form.find('input, select, button, textarea');
            data = form.serialize();

            inputs.prop('disabled', true);

            request = $.ajax({
              url: 'delete_project.php',
              type: 'post',
              data: data
            });

            request.done(function (response, status, jqXHR) {
              response = JSON.parse(response);
              console.log(response);

              if (response.success) {
                modal.modal('hide');
                node.fadeOut();
              }
            });

            request.fail(function (jqXHR, status, error) {
              console.error(
                'The following error occurred: ',
                status,
                error
              );
            });

            request.always(function () {
              inputs.prop('disabled', false);
            });
          } else {
            $('#nonmatching-title-delete').slideDown();
          }
        } else {
          $('#blank-title-delete').slideDown();
        }
      }));
    });
  }
});
