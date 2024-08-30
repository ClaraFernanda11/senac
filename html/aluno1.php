<?php
use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$nome = ($_POST['nome']);
$cpf = ($_POST['cpf']);
$rg = ($_POST['rg']);
$data_nascimento = ($_POST['data nascimento']);

$FieldandValues = [
    'nome'=> $nome,
    'cpf' => $cpf,
    'rg' => $rg,
    "data_nascimento" => $data_nascimento
];

$IsSave = InsertQuery::table('alunos')->save($FieldandValues);

if ($IsSave != true) {
    echo 'Não foi possivel salvar o registro';

}
echo 'Aluno cadastrado com sucesso';
die;
