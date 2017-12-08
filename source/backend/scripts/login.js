$(document).ready(function () {
  $('#login-form').submit(function (event) {
    // Prevent the form from refreshing the page
    event.preventDefault();

    var url = 'login.php';

    $.post(url, $('#login-form').serialize(), function (data) {
      $('#result').html(data);
    });
  });
});
