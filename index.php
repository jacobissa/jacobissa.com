<?php
$ini_array = parse_ini_file("config.ini");
$version = $ini_array["version"];
$jquery_version = $ini_array["jquery"];
$jquery_ui_version = $ini_array["jquery"];
$bootstrap_version = $ini_array["bootstrap"];
$bootstrap_icons_version = $ini_array["bootstrap-icons"];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light">

<head>
	<title>Jacob Issa</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="title" content="Jacob Issa">
	<meta name="description" content="Jacob Issa">
	<meta name="keywords" content="Jacob Issa">
	<meta name="copyright" content="Jacob Issa">
	<meta name="author" content="Jacob Issa">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- http-equiv -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="0">

	<!-- Favicon -->
	<link rel="icon" type="image/svg+xml" href="./img/favicon.svg?v=<?php echo $version; ?>">
	<link rel="shortcut icon" type="image/svg+xml" href="./img/favicon.svg?v=<?php echo $version; ?>">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="./lib/jquery-ui/jquery-ui.css?v=<?php echo $jquery_ui_version; ?>">
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap/css/bootstrap.css?v=<?php echo $bootstrap_version; ?>">
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap-icons/bootstrap-icons.css?v=<?php echo $bootstrap_icons_version; ?>">
	<link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo $version; ?>">
</head>

<body>
	<div id="containment-wrapper" class="vw-100 vh-100">
		<div id="background" class="vw-100 vh-100">
			<nav class="navbar fixed-bottom bg-dark py-0">
				<div class="d-flex flex-row">
					<div class="btn-group dropup">
						<button type="button" class="btn dropdown-toggle no-dropdown-toggle py-1 px-3" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="bi bi-windows bg-dark text-light fs-4"></i>
						</button>
						<ul class="dropdown-menu dropdown-menu-dark rounded-0 m-0">
							<li>
								<button class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<i class="bi bi-terminal me-2"></i>
									<span>Command Prompt</span>
								</button>
							</li>
							<li>
								<button class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<i class="bi bi-github me-2"></i>
									<span>GitHub</span>
								</button>
							</li>
							<li>
								<button class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<i class="bi bi-linkedin me-2"></i>
									<span>LinkedIn</span>
								</button>
							</li>
						</ul>
					</div>
					<button type="button" class="btn py-1 px-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
						<i class="flip-v bi bi-search bg-dark text-light fs-4"></i>
					</button>
					<button type="button" class="btn py-1 px-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
						<i class="bi bi-list-task bg-dark text-light fs-4"></i>
					</button>
				</div>
			</nav>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal modal-static fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					...
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Understood</button>
				</div>
			</div>
		</div>
	</div>
	<!--
    <div class="vh-100 vw-100 p-3 user-select-none fs-6 text-wrap lh-sm font-monospace">
        <div class="h-100 w-100 overflow-hidden vstack p-0 bg-dark shadow border border-secondary border-3 rounded-4">
            <div class="bg-secondary hstack p-2">
                <div class="rounded-circle p-2 me-1 bg-danger"></div>
                <div class="rounded-circle p-2 me-1 bg-warning"></div>
                <div class="rounded-circle p-2 me-1 bg-success"></div>
                <div class="mx-auto px-auto text-center text-light">Jacob Issa</div>
                <div class="p-2 ms-1"></div>
                <div class="p-2 ms-1"></div>
                <div class="p-2 ms-1"></div>
            </div>
            <div class="overflow-hidden p-2">
                <div class="h-100 overflow-auto p-2 text-warning" id="my-terminal">
                    <div id="my-terminal-output">
                        <p class="mb-2">Hello! I'm Jacob Issa. Thank you for visiting my website. You can start with the 'help' command.</p>
                    </div>
                    <div class="pb-3" id="my-terminal-input">
                        <form id="my-command-form" autocomplete="off">
                            <span id="my-hostname"></span>
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
	-->
	<!-- JS -->
	<script src="./lib/jquery/jquery.js?v=<?php echo $jquery_version; ?>"></script>
	<script src="./lib/jquery-ui/jquery-ui.js?v=<?php echo $jquery_ui_version; ?>"></script>
	<script src="./lib/bootstrap/js/bootstrap.bundle.js?v=<?php echo $bootstrap_version; ?>"></script>
	<script src="./js/script.js?v=<?php echo $version; ?>"></script>
</body>

</html>