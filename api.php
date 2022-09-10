<?php
if (empty($_POST))
{
    header("Location: ./", true, 301);
    exit();
}

$key = file_get_contents("./api.key");
if ($_POST['key'] != $key)
{
    echo "{}";
    exit();
}

$api = file_get_contents("./api.json");
echo $api;
