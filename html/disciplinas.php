<?php
use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$ativo = isset($_POST['nome']) ? filter_var($_POST['nome'], FILTER_UNSAFE_RAW) : '';
$ativo = (isset($_POST['ativo']) and ($_POST['ativo']== 'true'))? 'true' : 'false';


$nome = ($_POST['nome']);
$ativo = ($_POST['ativo']);

$FieldandValues = [
    'nome'=> $nome,
    'ativo' => $ativo,
  
];

$IsSave = InsertQuery::table('disciplina')->save($FieldandValues);

if ($IsSave != true) {
    echo 'Não foi possivel salvar o registro';
    die;
}
echo 'Disciplina cadastrado com sucesso';
die;