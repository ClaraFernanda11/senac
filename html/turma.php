<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$fieldAndValues = [
    'quantidade_de_alunos' => '30',
    'data_de_inicio' => '2024.01.22',
    'data_de_fim' => '2024.06.03'
];

$IsUpdate = UpdateQuery::tabela('turma')
    ->set($fieldAndValues)
    ->where('id', '=', 71)
    ->update();

var_dump($IsUpdate);