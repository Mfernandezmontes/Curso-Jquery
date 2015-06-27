<?php
/**
 * Created by IntelliJ IDEA.
 * User: adminlocal
 * Date: 01/03/2015
 * Time: 12:49
 */

$form = array();

parse_str($_POST["form"],$form);

$input = $form["input"];
$select = $form["select"];

echo json_encode($form);