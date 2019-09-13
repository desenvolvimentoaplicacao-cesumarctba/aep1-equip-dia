<?php
    
    $get = $_GET['nome_get'] ?? null;

    $post = $_POST['nome'] ?? null;
    
    echo "get => $get";
    echo "<br> post => $post";