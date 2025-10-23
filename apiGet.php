<?php
    //cabeçalhos que contem metasdados (configuraçoes) sobre api
    header("Content-Type: application;json; charset-UTF-8");
    header("Access-Control-Allow-Origin:*");
    
    $metodo = $_SERVER['REQUEST_METHOD'];
    //sistema da API(codigo PHP)

    switch($metodo){
        case "GET":
                metodoGET();
            break;
        case "POST":
            break;
        default:
                echo 'Método não indentificado';
            break;
    }       

    function metodoGET(){
        $pacoca = json_decode(file_get_contents("pacoca.json"),true);
        $pacoca_especifica = $_GET['pacoca'];
        $tipo= $_GET['tipo'];

        switch($pacoca_especifica){
            case "coco":
                    $pacoca_coco = $pacoca['pacocas']['pacoca de coco'];
                    
                    echo json_encode($pacoca_coco);
                break;
            
            default:
                    echo json_encode($pacoca);
                break;

    }

    }
