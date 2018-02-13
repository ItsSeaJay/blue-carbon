$(document).ready(function () {
    $(document).click(function () {
      var details = [];

      var headerInputs = $('.input-detail-header');
      var contentInputs = $('.input-detail-content');

      // This code assumes that the number of headers and contents is the same
      for (var input = 0; input < headerInputs.length; input++) {
        var detail = {
          header: "",
          content: ""
        };

        detail.header = headerInputs[input].value;
        detail.content = contentInputs[input].value;

        details.push(detail);
      }

      console.log(details);
    });
});
