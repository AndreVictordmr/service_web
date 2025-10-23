<?php

    //do lado do cliente (consumindo a api)
    // de usa url com endpoint para requisitar algum serviço da api

    $url="http://localhost/service_web/apiGET.php?pacoca=coco";

    $resposta=file_get_contents($url);
    $dados=json_decode($resposta,true);


    echo $dados;