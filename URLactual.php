<?php

    $dominio = $_SERVER["HTTP_HOST"];
    $rest = $_SERVER["REQUEST_URI"];

    $url_completa = "http://" . $dominio . $rest;

    echo $url_completa;
    
?>