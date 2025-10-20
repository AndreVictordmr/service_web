<?php
    /*Consumo de API - Utilização de um serviço web */
    // Requsição através de uma URL (protocolo HTTP)
    $url = "http://localhost/service_web/api.php";

    //guardar um valor de resposta da API
    $resposta = file_get_contents($url);

    echo $resposta;
    //Conversão JSON para um Array associativo
    $valores = json_decode($resposta,true);
