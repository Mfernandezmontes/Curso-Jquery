<?php

$array = array(
    "angularjs", "jquery", "python", "mysql", "php"
);

echo json_encode($array[$_POST["id"]]);