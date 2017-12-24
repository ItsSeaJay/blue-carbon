var request;

$('document').ready(function () {
  $('#new-project').submit(function (event) {
    var project = `
      <li class="alert alert-dark">
        <!-- Left Side -->
        Untitled

        <!-- Right Side -->
        <div class="float-right">
          <!-- Edit -->
          <a class="btn btn-sm btn-primary" href="edit.php?title=Untitled" role="button">
            <span class="oi oi-pencil"></span>
            &nbsp;
            Edit
          </a>
          <!-- Delete -->
          <button class="btn btn-sm btn-danger" type="button" name="button">
            <span class="oi oi-trash"></span>
            Delete
          </button>
        </div>
      </li>
    `;

    event.preventDefault();

    if (request) {
      request.abort();
    }

    var button = $(this);

    button.prop('disabled', true);

    request = $.ajax({
      url: 'new_project.php',
      type: 'post'
    });

    request.done(function (response, status, jqXHR) {
      console.log(response);
    });

    request.fail(function (jqXHR, status, error) {
      console.error(
        'The following error occurred: ',
        status,
        error
      )
    });

    request.always(function () {
      button.prop('disabled', false);
    });

    $(project).hide().appendTo("#sortable").slideDown();
  })
});
