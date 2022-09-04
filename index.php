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

<body>
    <div class="vh-100 vw-100 vstack fs-6 text-wrap lh-1 font-monospace overflow-hidden user-select-none bg-dark text-warning" id="my-terminal">
        <div class="overflow-auto pb-2" id="my-terminal-output"></div>
        <div class="sticky-bottom pt-2" id="my-terminal-input">
            <form id="my-command-form" autocomplete="off">
                <span id="my-hostname"></span>
                <span class="bi bi-chevron-right"></span>
                <span id="my-command-input" role="textbox" contenteditable></span>
                <span id="my-caret" class="border-warning">&nbsp;</span>
                <input type="submit" hidden />
            </form>
        </div>
    </div>

    <!-- JS -->
    <script src="./lib/bootstrap/js/bootstrap.bundle.min.js?v=<?php echo $bootstrap_version; ?>"></script>
    <script src="./lib/jquery/jquery.min.js?v=<?php echo $jquery_version; ?>"></script>
    <script src="./script.js?v=<?php echo $site_version; ?>"></script>
</body>

</html>