var request;

$('document').ready(function () {
  var buttons = $('.btn-delete');
  var modal = $('#delete-project');

  $(buttons).click(function (event) {
    event.preventDefault();
    modal.modal('show');
  });
});
