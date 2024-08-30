<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$quantidade_de_alunos = ($_POST['quantidade_de_alunos']);
$data_de_inicio = ($_POST['data_de_inicio']);
$data_de_fim = ($_POST['data_de_fim']);

$FieldandValues = [
    'quantidade_de_alunos' => $quantidade_de_alunos,
    'data_de_inicio'       => $data_de_inicio,
    'data_de_fim'          => $data_de_fim
];

$IsSave =  InsertQuery::table('turma')->save($FieldandValues);


if ($IsSave != true) {
    echo 'Não foi possivel salvar o registro';
    die;
}
echo 'Turma cadastrado com sucesso';
die;