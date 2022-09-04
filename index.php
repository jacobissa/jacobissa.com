<?php
$site_version = "1.0.0";
$jquery_version = "3.6.1";
$bootstrap_version = "5.2.0";
$bootstrap_icons_version = "1.9.1";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Jacob Issa</title>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="title" content="Jacob Issa">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="./lib/bootstrap/css/bootstrap.min.css?v=<?php echo $bootstrap_version; ?>">
    <link rel="stylesheet" type="text/css" href="./lib/bootstrap-icons/bootstrap-icons.css?v=<?php echo $bootstrap_icons_version; ?>">
    <link rel="stylesheet" type="text/css" href="./style.css?v=<?php echo $site_version; ?>">
</head>

<body class="bg-light">
    <div class="vh-100 vw-100 p-3 user-select-none fs-6 text-wrap lh-1 font-monospace">
        <div class="h-100 w-100 overflow-hidden vstack p-0 bg-dark shadow border border-secondary border-3 rounded-4">
            <div class="bg-secondary hstack p-2">
                <div class="rounded-circle p-2 me-1 bg-danger"></div>
                <div class="rounded-circle p-2 me-1 bg-warning"></div>
                <div class="rounded-circle p-2 me-1 bg-success"></div>
                <div class="my-hostname mx-auto px-auto text-center text-light"></div>
                <div class="p-2 ms-1"></div>
                <div class="p-2 ms-1"></div>
                <div class="p-2 ms-1"></div>
            </div>
            <div class="overflow-hidden p-2">
                <div class="h-100 overflow-auto p-2 text-warning" id="my-terminal">
                    <div id="my-terminal-output"></div>
                    <div class="pb-3" id="my-terminal-input">
                        <form id="my-command-form" autocomplete="off">
                            <span class="my-hostname"></span>
                            <span class="bi bi-chevron-right"></span>
                            <span id="my-command-input" role="textbox" contenteditable></span>
                            <span id="my-caret" class="border-warning">&nbsp;</span>
                            <input type="submit" hidden />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="./lib/bootstrap/js/bootstrap.bundle.min.js?v=<?php echo $bootstrap_version; ?>"></script>
    <script src="./lib/jquery/jquery.min.js?v=<?php echo $jquery_version; ?>"></script>
    <script src="./script.js?v=<?php echo $site_version; ?>"></script>
</body>

</html>