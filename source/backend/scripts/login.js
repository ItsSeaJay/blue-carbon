$(document).ready(function () {
  // Attach a submit handler to the form
  $("#login-form").submit(function(event) {
    // Stop form from submitting normally
    event.preventDefault();

    console.log($(this).serialise());
  });
});
