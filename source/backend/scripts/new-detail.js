$(document).ready(function () {
  var container = $('#details');
  var button = $('#new-detail');

  button.on('click', function (event) {
    event.preventDefault();

    var detail = `
    <hr>

    <div class="row">

      <a href="">
      <span class="oi oi-x"></span>
      </a>

      <div class="col-auto">
        <div class="form-group">
          <div class="input-group">

          <div class="input-group-addon">
            <span class="oi oi-header"></span>
          </div>

          <input
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
  });
});
