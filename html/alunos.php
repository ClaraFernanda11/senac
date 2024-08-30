<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$Alunos = [
    'nome'                 => $_POST['nome'],
    'cpf'                  => $_POST['CPF'],
    'rg'                   => $_POST['RG'],
    'data_nascimento'      => $_POST['data_nascimento'],
];

$IsSave =  InsertQuery::table('alunos')->save($Alunos);


if ($IsSave != true) {
    echo 'Não foi possivel salvar o registro';
    die;
}
echo 'Aluno cadastrado com sucesso';
die;