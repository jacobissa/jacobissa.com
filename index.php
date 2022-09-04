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

</head>

<body>
    <div class="vh-100 vw-100 vstack bg-light" id="my-terminal">
        <div class="bg-light overflow-auto pb-5 font-monospace user-select-none" id="my-terminal-output">
        </div>
        <form id="my-command-form" autocomplete="off" class="fixed-bottom container-fluid bg-warning">
            <div class="input-group row">
                <div class="input-group-text col-auto bg-transparent border-0" id="my-command-label">
                    <span class="bi bi-chevron-right"></span>
                </div>
                <input type="text" class="form-control-plaintext col font-monospace" name="command" placeholder="" aria-label="Command" id="my-command-input" aria-describedby="my-command-label" autofocus />
                <input type="submit" hidden />
            </div>
        </form>
    </div>

    <!-- JS -->
    <script src="./lib/bootstrap/js/bootstrap.bundle.min.js?v=<?php echo $bootstrap_version; ?>"></script>
    <script src="./lib/jquery/jquery.min.js?v=<?php echo $jquery_version; ?>"></script>
    <script src="./script.js?v=<?php echo $site_version; ?>"></script>
</body>

</html>