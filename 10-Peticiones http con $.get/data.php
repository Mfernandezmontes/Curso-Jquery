<?php
/**
 * Created by IntelliJ IDEA.
 * User: adminlocal
 * Date: 28/02/2015
 * Time: 0:30
 */

$days = array();
foreach($_GET["dias"] as $dia){
    $days[] = $dia;
}

echo json_encode($days);