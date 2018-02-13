var request;

$(document).ready(function () {
  $(document).click(function () {
    var details = [];

    var headerInputs = $('.input-detail-header');
    var contentInputs = $('.input-detail-content');
    var detailRows = $('.row-detail');

    // This code assumes that the number of headers and contents is the same
    // Add all of the detail information into an array of objects
    for (let input = 0; input < headerInputs.length; input++) {
      let detail = {
        header: '',
        content: '',
        id: ''
      };

      detail.header = headerInputs[input].value;
      detail.content = contentInputs[input].value;
      detail.id = $(detailRows[input]).data('id');

      details.push(detail);
    }

    console.log(details);

    var form = $('#project-form');

    if (details.length > 0) {
      var updateDetail = function (i) {
        if (i < details.length) {
          if (request) {
            request.abort();
          }

          request = $.ajax({
            url: 'update_detail.php',
            type: 'post',
            data: details[i]
          });

          request.done(function (response, textStatus, jqXHR) {
            console.log(response);
            response = JSON.parse(response);

            if (response.success) {
              console.log(response.message);
              i++;
              updateDetail(i);
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
        };
      };

      var iteration = 0;
      updateDetail(iteration);
    }
  });
});
