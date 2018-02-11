var request;

$('document').ready(function () {
  $('#details').submit(function (event) {
    var modal = '#new-project';
    var form = $('#details');
    var title = form.find('input[name="title"]').val();
    var uri = encodeURIComponent(title);

    event.preventDefault();

    if (title.length > 0) {
      if (request) {
        request.abort();
      }

      var inputs = form.find('input, select, button, textarea');
      data = form.serialize();

      inputs.prop('disabled', true);

      request = $.ajax({
        url: 'new_project.php',
        type: 'post',
        data: data
      });

      request.done(function (response, status, jqXHR) {
        response = JSON.parse(response);
        console.log(response);

        if (response.success) {
          var project = `
            <li class="alert alert-dark">` +
            title +
            `<div class="float-right">
              <a class="btn btn-sm btn-primary" href="edit.php?title=` +
            encodeURI(title) +
            `" role="button">
                <span class="oi oi-pencil"></span>
                Edit
              </a>
            &nbsp;
            <a class="btn btn-sm btn-danger btn-delete-project"` +
            ` href="dashboard.php" data-title="` +
            title +
            `">
              <span class="oi oi-trash"></span>
              Delete
            </a>
            </div>
            </li>`;

          $(modal).modal('hide');
          $(project).hide().appendTo("#sortable").slideDown();

          form.trigger('reset');
        } else {
          // The request failed
          $('#unique-title').slideDown();
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
      $('#blank-title').slideDown();
    }
  });
});
