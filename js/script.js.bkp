$(document).ready(function () {
  $("#my-hostname").text(window.location.hostname);

  function fixHeight() {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty("--vh", `${vh}px`);
  }
  window.addEventListener(
    "resize",
    function () {
      fixHeight();
    },
    true
  );
  fixHeight();

  document.addEventListener("contextmenu", (event) => event.preventDefault());

  $("#my-command-input").focus();
  $(document).click(function () {
    $("#my-command-input").focus();
  });

  let api = {};
  $.ajax("./api/api.key")
    .done(function (api_key) {
      $.post("./api/api.php", { key: api_key })
        .done(function (data) {
          api = JSON.parse(data);
        })
        .fail(function () {
          console.error("An error has occurred. Failed to load API.");
        })
        .always(function () {});
    })
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
  let output_element = $("<p/>");
  output_element.addClass("mb-2");
  let request_element = "<span class='bi bi-chevron-right px-3'></span>";
  request_element += "<span>" + command + "</span><br/>";

  let response_element = "";
  let api_response = api[command.toLowerCase()];

  if (api_response === undefined) {
    response_element = command + " is undefined command.";
  } else {
    if (api_response["response"] !== undefined) {
      for (let api_response_line of api_response["response"]) {
        response_element += api_response_line + "<br/>";
      }
    } else if (api_response["action"] !== undefined) {
      eval(api_response["action"]);
    }
  }
  output_element.html(request_element + response_element);
  $("#my-terminal-output").append(output_element);
}
