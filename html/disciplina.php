<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$fieldAndValues = [
    'nome' => 'matematica',
    'ativo' => 'true'
];

$IsUpdate = UpdateQuery::tabela('disciplina')
    ->set($fieldAndValues)
    ->where('id', '=', 101)
    ->update();

var_dump($IsUpdate);