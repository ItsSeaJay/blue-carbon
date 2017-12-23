var request;

$(function() {
  $('#sortable').sortable({
    axis: 'y',
    stop: function (e, ui) {
      // Abort any pending request
      if (request) {
          request.abort();
      }

      var sortable = $('#sortable');
      var data = sortable.sortable('toArray');

      console.log(data);

      // Fire off the request to /form.php
      request = $.ajax({
          url: "initiative.php",
          type: "post",
          data: data
      });

      // Callback handler that will be called on success
      request.done(function (response, textStatus, jqXHR) {
        // Log a message to the console
        console.log("Hooray, it worked! " + response);
      });

      // Callback handler that will be called on failure
      request.fail(function (jqXHR, textStatus, errorThrown) {
        // Log the error to the console
        console.error(
            "The following error occurred: " +
            textStatus, errorThrown
        );
      });

      // Callback handler that will be called regardless
      // if the request failed or succeeded
      // request.always(function () {
      //
      // });
    }
  });
  $('#sortable').disableSelection();
});
