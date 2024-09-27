<?php
use app\controllers\ControllerCliente;
use app\controllers\ControllerDisciplina;
use app\controllers\ControllerHome;
use app\controllers\ControllerLogin;
use app\controllers\ControllerUsuario;
use Slim\Routing\RouteCollectorProxy;
use app\Middleware\Middleware;

$app->group('', function (RouteCollectorProxy $group) {
    $group->get('/', ControllerHome::class . ':home')->add(Middleware::route());
    $group->get('/login', ControllerLogin::class . ':login');
    $group->post('/register', ControllerUsuario::class . ':insert')->add(Middleware::route());
});

$app->group('/cliente', function (RouteCollectorProxy $group) {
    $group->get('/cadastro', ControllerCliente::class . ':cadastro')->add(Middleware::route());
});

$app->group('/disciplina', function (RouteCollectorProxy $group) {
    $group->get('/lista', ControllerDisciplina::class . ':lista')->add(Middleware::route());
    $group->get('/cadastro', ControllerDisciplina::class . ':cadastro')->add(Middleware::route());
    $group->get('/alterar/{id}', ControllerDisciplina::class . ':alterar')->add(Middleware::route());
    $group->post('/delete', ControllerDisciplina::class . ':delete')->add(Middleware::route());
});
