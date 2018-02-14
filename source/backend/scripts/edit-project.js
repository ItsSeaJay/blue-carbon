var request;

var headerInputs;
var contentInputs;
var detailRows;

$(document).ready(function () {
  refreshInputs();

  $(document).click(function () {
    refreshInputs();
  });

  $('.input-detail-header').on('input', function () {
    refreshInputs();
    updateDetails();
  });

  $('.input-detail-content').on('input', function () {
    refreshInputs();
    updateDetails();
  });
});

function refreshInputs() {
  headerInputs = $('.input-detail-header');
  contentInputs = $('.input-detail-content');
  detailRows = $('.row-detail');
}

function updateDetails() {
  var details = [];

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

  if (details.length > 0) {
    if (request) {
      request.abort();
    }

    request = $.ajax({
      url: 'update_details.php',
      type: 'post',
      data: { details: JSON.stringify(details) }
    });

    request.done(function (response, textStatus, jqXHR) {
      response = JSON.parse(response);
    });

    request.fail(function (jqXHR, textStatus, errorThrown) {
      console.error(
          'The following error occurred: ' +
          textStatus, errorThrown
      );
    });
  }
}
