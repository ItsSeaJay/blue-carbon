var request;

$(document).ready(function () {
  var buttons = $('btn-delete-detail');
  var form = $('project-form');

  for (var button = 0; button < buttons.length; button++) {
    $(buttons[button]).click(function (event) {
      var target = $(this).parent();

      event.preventDefault();

      if (request) {
        request.abort();
      }

      data = target.data('id');

      request = $.ajax({
        url: 'remove_detail.php',
        type: post,
        data
      });
    })
  }
});
