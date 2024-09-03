<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$fieldAndValues = [
    'nome' => 'Carlos',
    'cpf' => '456.951.357-21',
    'rg' => '2',
    'data_nascimento' => '1998.02.25'
];

$IsUpdate = UpdateQuery::tabela('professor')
    ->set($fieldAndValues)
    ->where('id', '=', 35)
    ->update();

var_dump($IsUpdate);