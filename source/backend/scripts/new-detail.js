$(document).ready(function () {
  var container = $('#details');
  var button = $('#new-detail');

  button.on('click', function (event) {
    event.preventDefault();

    var detail = `
      <div>
      moo
      </div>
    `;

    container.append(detail);
  });
});
