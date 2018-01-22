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
      $('#blank-title-delete').fadeOut();
      $('#nonmatching-title-delete').fadeOut();

      $(form.submit(function (event) {
        event.preventDefault();

        var title = form.find('input[name="title"]').val();
        var uri = encodeURIComponent(title);

        // Verify the title the user entered
        if (title.length > 0) {
          if (title === target) {
            modal.modal('hide');
            title = "";
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
