<?php
    //INCLUE A CLASSE
    include_once("classes\classe2.php");

    //INSTANCIA A CLASSE.
    $classes = new classe2(true);

    //UMA VARIAVEL COM UM STRING
    $v1 = 'Ismael, Fabiana, Nathan, Daniel';

    //USA UMA FUNCAO DA CLASSE E INSERE NA VARIAVEL $ARRAY
    $array = $classes->virgulaArray($v1);

    //MOSTRA A VARIAVEL
    echo '<pre>' . print_r($array, true);

    //USA UMA FUNCAO DA CLASSE E INSERE NA VARIAVEL $JSON
    $json = $classes->json($v1);
    
    //ECOA A VARIAVEL
    echo $json;
