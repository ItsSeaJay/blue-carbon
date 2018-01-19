var request;

$('document').ready(function () {
  var buttons = $('.btn-delete-project');
  var modal = $('#delete-project');

  for (var button = 0; button < buttons.length; ++button) {
    $(buttons[button]).click(function (event) {
      event.preventDefault();
    });
  }
});
