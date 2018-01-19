var request;

$('document').ready(function () {
  var buttons = $('.btn-delete-project');
  var modal = $('#delete-project');
  var form = $('#delete-form');
  var submit = form.find('submit');

  for (var button = 0; button < buttons.length; ++button) {
    $(buttons[button]).click(function (event) {
      event.preventDefault();
      modal.modal('show');

      $(form.submit(function (event) {
        event.preventDefault();

        var title = form.find('input[name="title"]').val();
        var uri = encodeURIComponent(title);

        console.log($(buttons[button]).attr('data-title'));

        if (title.length > 0) {
          if (title === $(buttons[button]).attr('data-title')) {

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
