<?php
    include_once("classes\classe2.php");
    $classes = new classe2(true);

    $v1 = 'Ismael, Fabiana, Nathan, Daniel';
    $array = $classes->virgulaArray($v1);
    echo '<pre>' . print_r($array, true);
    $json = $classes->json($v1);
    echo $json;
