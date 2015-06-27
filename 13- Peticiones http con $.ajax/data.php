<?php
/**
 * Created by IntelliJ IDEA.
 * User: adminlocal
 * Date: 15/03/2015
 * Time: 19:14
 */

if($_GET["type"] === "xml"){
    $new = '<?xml version="1.0" encoding="iso-8859-1"?></data>';
    foreach($_GET as $key => $values){
        $new = "<$key>$values</$key>";
    }
    echo $new."</data>";
}

if($_GET["type"] === "json"){
   $val = array();
    foreach($_GET as $key => $values){
        $val[$key] = $values;
    }
    echo json_encode($val);
}


if($_GET["type"] === "html"){

     $html = "";
    foreach($_GET as $key => $values){
        $html.= $values;
    }
    echo $html;
}


if($_GET["type"] === "script"){

  header("Content-type: application/javascript");
$str = <<<EOF
    alert("Javascript");
EOF;

    echo $str;

}