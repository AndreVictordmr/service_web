<?php
$url = "dados.json";
$resposta=file_get_contents($url);
$dados = json_decode($resposta,true);

echo $dados["hobbies"][0];
