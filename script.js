$(document).ready(function () {
  $("#my-hostname").text(window.location.hostname);
  document.addEventListener("contextmenu", (event) => event.preventDefault());
  $("#my-command-input").focus();

  $(document).click(function () {
    $("#my-command-input").focus();
  });

  let key = "";
  $.ajax({
    url: "./license.key",
    async: false,
    success: function (data) {
      key = data;
    },
    error: function () {
      console.error("An error has occurred. Failed to load API.");
    },
  });

  let api = {};
  $.post("./api.php", { key: key }, function (data) {
    api = JSON.parse(data);
  })
    .done(function () {})
    .fail(function () {
      console.error("An error has occurred. Failed to load API.");
    })
    .always(function () {});

  $("#my-command-form").submit(function (event) {
    event.preventDefault();
    let command = $("#my-command-input").text();
    if (command === "") {
      return;
    }
    $("#my-command-input").text("");
    performCommand(api, command);
    $("#my-terminal-output").scrollTop($("#my-terminal-output").height());
  });

  $("#my-command-input").keypress(function (event) {
    $("#my-terminal-output").scrollTop($("#my-terminal-output").height());
    if (event.which === 13) {
      event.preventDefault();
      $("#my-command-form").submit();
    }
  });
});

function performCommand(api, command) {
  if (command === "clear") {
    $("#my-terminal-output").empty();
    return;
  }

  let output_element = $("<p/>");
  output_element.addClass("mb-2");
  let request_element = "<span class='bi bi-chevron-right px-3'></span>";
  request_element += "<span>" + command + "</span><br/>";

  let response_element = "";
  let api_response = api[command];

  if (api_response === undefined) {
    response_element = command + " is undefined command.";
  } else {
    for (let api_response_line of api_response["response"]) {
      response_element += api_response_line + "<br/>";
    }
  }
  output_element.html(request_element + response_element);
  $("#my-terminal-output").append(output_element);
}
