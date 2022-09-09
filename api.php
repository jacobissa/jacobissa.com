<?php

if (empty($_POST))
{
    header("Location: ./index.php", true, 301);
    exit();
}

$key = file_get_contents("./license.key");
if ($_POST['key'] != $key)
{
    header("Location: ./index.php", true, 301);
    exit();
}

$api = file_get_contents("./api.json");
echo $api;
