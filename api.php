<?php

    /*Estruturando uma API */
    //Cabecalho da API
    header("Content-Type: application/json; charset-UTF-8");
    header("Access-Control-Allow-Origin: *");

    //sistemas do serviço web

    // Leitura do arquivo JSON e armazzenamento em Array na vertical
    $pacoca = json_decode(file_get_contents("pacoca.json"),true);

    //echo $pacoca['pacoca']['Pacoca de amedoin']['nome'];

    //Variavel para guardar o que tem naa posiço enviada pelo link
    $pacoca_especifica = $_GET['pacoca'];
    $tipo= $_GET['tipo'];

    
    function cadastra_pacoca($arquivo,$nome,$tipo,$origem,$nutrientes){
        
        $arquivo["paçocas"][$nome]=[
            "nome"=>$nome,
            "Tipo"=>$tipo,
            "Origem"=>$origem,
            "Nutriente"=>$nutrientes
        ];
        //if(false){
            salvar_dados($arquivo);
        //}
    }
    
    function salvar_dados($variavel){
        //salvar dados no arquivo
        file_put_contents('pacoca.json',json_encode($variavel,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE));
    }
    cadastra_pacoca($pacoca,"paçoca de coco","doce","coco","cocoativo");
    $pacoca = json_decode(file_get_contents("pacoca.json"),true);

    switch($pacoca_especifica){
        case "coco":
            $pacoca_coco = $pacoca['paçocas']['paçoca de coco'];
            
            echo json_encode($pacoca_coco);
            break;
        
        default:
            echo json_encode($pacoca);
            break;

    }
    //Saiada da API
    //echo json_encode($pacoca);