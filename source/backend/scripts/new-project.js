$('document').ready(function () {
  $('#new').click(function () {
    var project = '<li class="alert alert-dark">Hello</li>';

    $('#sortable').prepend(project);
  })
});
