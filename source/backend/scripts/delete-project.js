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

      event.preventDefault();
      modal.modal('show');
      span.html(target);

      $(form.submit(function (event) {
        event.preventDefault();

        var title = form.find('input[name="title"]').val();
        var uri = encodeURIComponent(title);

        if (title.length > 0) {
          if (title === target) {
            modal.modal('hide');
          } else {
            console.error('Title doesn\'t match!');
          }
        } else {
          console.error('Title cannot be blank!');
        }
      }));
    });
  }
});
