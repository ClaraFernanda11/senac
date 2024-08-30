<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$nome = ($_POST['nome']);
$cpf = ($_POST['CPF']);
$rg = ($_POST['RG']);
$data_nascimento = ($_POST['data_nascimento']);

$FieldsandValues = [
    'nome'                  => $nome,
    'cpf'                   => $cpf,
    'rg'                    => $rg,
    'data_nascimento'       => $data_nascimento
];
$IsSave =  InsertQuery::table('professor')->save($FieldsandValues);


if ($IsSave != true) {
    echo 'Não foi possivel salvar o registro';
    die;
}
echo 'Professor cadastrado com sucesso';
die;