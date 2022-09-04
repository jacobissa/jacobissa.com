$(document).ready(function () {
  $("#my-command-input").focus();

  $("#my-terminal").click(function () {
    $("#my-command-input").focus();
  });

  let api = {};
  $.getJSON("api.json", function (data) {
    api = data;
  }).fail(function () {
    console.log("An error has occurred. Failed to load API.");
  });

  $("#my-command-form").submit(function (event) {
    let command = $("#my-command-input").val();
    $("#my-command-input").val("");
    $("#my-terminal-output").append(api[command] + "<br>");
    event.preventDefault();
  });
});
