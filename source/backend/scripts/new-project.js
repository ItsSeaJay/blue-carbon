$('document').ready(function () {
  $('#new').click(function () {
    var project = {
      title: 'Untitled',
      subtitle: 'nothing special',
      description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus eros. Integer tempor ac felis id consequat. Cras quis felis in purus vehicula pellentesque. Ut metus orci, rhoncus vel pellentesque sit amet, luctus a libero. Vestibulum quis ullamcorper dui. Quisque volutpat ipsum felis, quis viverra enim consectetur et. Sed mattis libero sed elit mollis fringilla. Etiam quis metus orci. Maecenas aliquam orci sed velit accumsan finibus. Nulla condimentum elit id felis sagittis, ac bibendum sapien posuere. Vestibulum ultricies congue lorem, non pellentesque lectus. Proin nisi lectus, tristique eu arcu id, vulputate venenatis odio. Curabitur ut maximus sapien. Donec urna nulla, viverra sagittis massa sed, congue congue mauris. Nullam ullamcorper iaculis ligula, eu tempor justo luctus et. Nam consequat elementum felis, in finibus leo vehicula in.',
      html:
      `
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
      `
    };

    $(project.html).hide().prependTo("#sortable").slideDown();
  })
});
