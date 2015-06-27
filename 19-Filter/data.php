<?php

if(isset($_GET["callbackvar"])){
    $array = array("message" => "La peticion ajax con jsonp");
    echo $_GET["callbackvar"]. "(". json_encode($array). ")";
}