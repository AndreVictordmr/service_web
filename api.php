<?php

    /*Estruturando uma API */
    //Cabecalho da API
    header("Content-Type: application/json; charset-UTF-8");
    header("Acess-Control-Allow-Origin: *");

    //sistemas do serviço web

    // Leitura do arquivo JSON e armazzenamento em Array na vertical
    $pacoca = json_decode(file_get_contents("pacoca.json"),true);

    //echo $pacoca['pacoca']['Pacoca de amedoin']['nome'];

    //Variavel para guardar o que tem naa posiço enviada pelo link
    $pacoca_especifica = $_GET['pacoca'];
    $tipo= $_GET['tipo'];

    
    //cadastra_pacoca("pacoca de coco","doce","coco","cocoativo");
    function cadastra_pacoca($nome,$tipo,$origem,$nutrientes){
        $pacoca["pacoca"][$nome]["nome"]=$nome;
        $pacoca["pacoca"][$nome]["Tipo"]=$tipo;
        $pacoca["pacoca"][$nome]["Origem"]=$origem;
        $pacoca["pacoca"][$nome]["Nutriente"]=$nutrientes;
        
        if(false){
            salvar_dados($pacoca);
        }
    }
    
    function salvar_dados($variavel){
        //salvar dados no arquivo
        file_put_contents('pacoca.json',json_encode($variavel,JSON_PRETTY_PRINT));
    }
    
    switch($pacoca_especifica){
        case "coco":
            $pacoca_coco = $pacoca['pacoca']['pacoca de coco'];
            
            echo json_encode($pacoca_coco);
            break;
        
        default:
            echo json_encode($pacoca);
            break;

    }
    //Saiada da API
    //echo json_encode($pacoca);