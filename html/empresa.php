<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';


$fieldAndValues = [
    'nome_fantasia' => 'lua',
    'cnpj' => '1',
    'data_de_nascimento' => '2001-01-05',
    'inscricao_estadual' => '1'
];

$IsUpdate = UpdateQuery::tabela('empresa')
    ->set($fieldAndValues)
    ->where('id', '=', 68)
    ->update();

var_dump($IsUpdate); 
