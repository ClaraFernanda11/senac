<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';


$fieldAndValues = [
    'nome' => 'Fernanda',
    'cpf' => '159.357.268-58',
    'rg' => '1',
    'data_nascimento' => '2008-01-29'
];

$IsUpdate = UpdateQuery::tabela('alunos')
    ->set($fieldAndValues)
    ->where('id', '=', 142)
    ->update();

var_dump($IsUpdate);
