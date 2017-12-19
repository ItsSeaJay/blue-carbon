$('document').ready(function () {
  $('#new').click(function () {
    var project = `
      <li class="alert alert-dark">
        <!-- Left Side -->
        Untitled

        <!-- Right Side -->
        <div class="float-right">
          <!-- Edit -->
          <a class="btn btn-sm btn-primary" href="#" role="button">
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

    $('#sortable').prepend(project);
  })
});
