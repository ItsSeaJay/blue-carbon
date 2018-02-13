var request;

$(document).ready(function () {
    $(document).click(function () {
      var details = [];

      var headerInputs = $('.input-detail-header');
      var contentInputs = $('.input-detail-content');

      // This code assumes that the number of headers and contents is the same
      // Add all of the detail information into an array of objects
      for (let input = 0; input < headerInputs.length; input++) {
        let detail = {
          header: '',
          content: ''
        };

        detail.header = headerInputs[input].value;
        detail.content = contentInputs[input].value;

        details.push(detail);
      }

      console.log(details);

      var form = $('#project-form');

      for (let detail = 0; detail < details.length; detail++) {
        if (request) {
          request.abort();
        }

        request = $.ajax({
          url: 'update_detail.php',
          type: 'post',
          data: details[detail]
        });

        request.done(function (response, textStatus, jqXHR) {
          response = JSON.parse(response);
          console.log(response);

          if (response.success) {
            console.log(response.message);
          } else {
            console.error(response.message);
          }
        });

        request.fail(function (jqXHR, textStatus, errorThrown) {
          console.error(
              'The following error occurred: ' +
              textStatus, errorThrown
          );
        });
      }
    });
});
