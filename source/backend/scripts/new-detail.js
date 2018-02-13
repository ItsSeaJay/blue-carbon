var request;

$(document).ready(function () {
  var container = $('#details');
  var button = $('#new-detail');
  var form = $('#project-form');

  button.on('click', function (event) {
    event.preventDefault();

    var data = form.serialize();

    if (request) {
      request.abort();
    }

    request = $.ajax({
      url: 'add_detail.php',
      type: 'post',
      data: data
    });

    request.done(function (response, status, jqXHR) {
      response = JSON.parse(response);
      console.log(response);

      if (response.success) {
        var detail = `
          <div class="row" data-id="` + response.id +`">

            <a class="btn-delete-detail" href="">
              <span class="oi oi-x"></span>
            </a>

            <div class="col-auto">
              <div class="form-group">
                <div class="input-group">

                <div class="input-group-addon">
                  <span class="oi oi-header"></span>
                </div>

                <input
                  style="font-weight: bold;"
                  class="form-control"
                  type="text"
                  placeholder="Header">
                </input>

              </div>
            </div>
          </div>

          <div class="col">

            <div class="form-group">
              <div class="input-group">

                <div class="input-group-addon">
                  <span class="oi oi-ellipses"></span>
                </div>

                <input
                  class="form-control"
                  type="text"
                  placeholder="Content">
                </input>

              </div>
            </div>
          </div>
        `;

        $(detail).hide().appendTo(container).slideDown();
      } else {
        consol.error(response.message);
      }
    });

    request.fail(function (jqXHR, status, error) {
      console.error(
        'The following error occurred: ',
        status,
        error
      );
    });

    request.always(function () {
      // Purposefully left blank
    });
  });
});
