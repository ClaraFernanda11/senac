<?php
namespace app\controllers;

use app\database\builder\InsertQuery;
use Exception;

class ControllerUsuario extends Base
{
    public function insert($request, $response)
    {
        try {
            $form = $request->getParsedBody();

            // Sanitiza e verifica os dados de entrada
            $nome = filter_var($form['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $login = filter_var($form['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $email = filter_var($form['email'], FILTER_SANITIZE_EMAIL);
            $senha = filter_var($form['password'], FILTER_UNSAFE_RAW);

            if (empty($nome) || empty($login) || empty($email) || empty($senha)) {
                return $response->withJson(['status' => false, 'message' => 'Todos os campos são obrigatórios.'], 400);
            }

            // Verifica se as senhas correspondem
            if ($form['password'] !== $form['confirm_password']) {
                return $response->withJson(['status' => false, 'message' => 'As senhas não correspondem.'], 400);
            }

            // Criptografa a senha
            $passwordHash = password_hash($senha, PASSWORD_DEFAULT);
            $dataCadastro = date('Y-m-d H:i:s');

            // Prepara a inserção no banco de dados
            $IsSave = InsertQuery::table('usuario')->save([
                'nome' => $nome,
                'login' => $login,
                'email' => $email,
                'senha' => $passwordHash,
                'data_cadastro' => $dataCadastro,
                'data_altecao' => $dataCadastro
            ]);

            if (!$IsSave) {
                return $response->withJson(['status' => false, 'message' => 'Erro ao cadastrar. Verifique os dados.'], 400);
            }

            return $response->withJson(['status' => true, 'message' => 'Cadastro realizado com sucesso!'], 200);
        } catch (Exception $e) {
            error_log($e->getMessage());
            return $response->withJson(['status' => false, 'message' => 'Erro ao processar a solicitação.'], 500);
        }
    }
}
