$(document).ready(function () {
  $('#login-form').submit(function (event) {
    event.preventDefault();

    $.post("login.php", $('#login-form').serialize(), function (data) {
      $('#result').html(data);
    });
  });
});
