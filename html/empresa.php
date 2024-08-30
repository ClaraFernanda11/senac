<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

    $nome_fantasia = ($_POST['nome_fantasiaa']);      
    $cnpj           = ($_POST['CNPJ']);       
    $data_de_nascimento  = ($_POST['data_de_nascimento']);        
    $inscricao_estadual   = ($_POST['inscricao_estadual']);    

$FieldandValues = [
    'nome_fantasia'=> $nome_fantasia,
    'cnpj'=>$cnpj,
    'data_de_nascimento'=>$data_de_nascimento,
    'inscricao_estadual'=>$inscricao_estadual
];
$IsSave = InsertQuery::table('empresa')->save($FieldandValues);

if ($IsSave != true) {
    echo 'Não foi possivel salvar o registro';
    die;
}
echo 'Empresa cadastrado com sucesso';
die;