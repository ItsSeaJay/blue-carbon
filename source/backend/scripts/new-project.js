var request;
var project = {
  new: function (title, subtitle) {

  }
};

$('document').ready(function () {
  $('#details').submit(function (event) {
    var modal = '#new-project';
    var form = $('#details');
    var title = form.find('input[name="title"]').val();
    var uri = encodeURIComponent(title);

    console.log(title);

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
            <li class="alert alert-dark">
              <!-- Left Side -->
              ` + title + `
              <!-- Right Side -->
              <div class="float-right">
                <!-- Edit -->
                <a class="btn btn-sm btn-primary" href="edit.php?title=` +
                encodeURI(uri) +
                `" role="inputs"><span class="oi oi-pencil"></span>&nbsp;Edit</a>
                <!-- Delete -->
                <inputs class="btn btn-sm btn-danger" type="inputs" name="inputs">
                  <span class="oi oi-trash"></span>
                  Delete
                </inputs>
              </div>
            </li>
          `;

          console.log(response);
          $(modal).modal('hide');
          $(project).hide().appendTo("#sortable").slideDown();
        } else {
          console.error('An error occured when creating a new project');
          console.error(response["error"]);
        }
      });

      request.fail(function (jqXHR, status, error) {
        console.error(
          'The following error occurred: ',
          status,
          error
        )
      });

      request.always(function () {
        inputs.prop('disabled', false);
      });
    } else {
      $('#blank-title').slideDown();
    }
  });
});
