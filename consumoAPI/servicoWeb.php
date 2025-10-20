<?php 
//url da API
$url="";

//faz a requisição e guarda a resposta
$resposta = file_get_contents($url);
//Converte o JSON em array associativo
$dados = json_decode($resposta,true);
//Pega o Valor do Array
$valor = $dados[""];
//Mostra no navegador
echo $valor;
