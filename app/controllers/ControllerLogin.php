<?php

namespace app\controllers;

use app\database\builder\SelectQuery;

class ControllerLogin extends Base
{
    public function login($request, $response)
    {
        $TemplateData = [
            'titulo' => 'Login'
        ];
        return $this->getTwig()
            ->render($response, $this->setView('login'), $TemplateData)
            ->withHeader('Content-Type', 'text/html')
            ->withStatus(200);
    }
}