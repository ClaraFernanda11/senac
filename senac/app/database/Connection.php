<?php

namespace app\database;

use PDO;

class Connection
{
    #Variável de conexão com banco de dados.
    private static $pdo = null;
    public static function open(): PDO
    {
        #Verifica se a conexão já existe e retorna se sim
        if (static::$pdo) {
            return static::$pdo;
        }
        #Define as opções de conexão
        $options = [
            #Configurar modo de tratamento de erros
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            #Modo de buscar de dados (associativo)
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            #Desativar emulação de prepared statements 
            PDO::ATTR_EMULATE_PREPARES => false,
            #Desativar conexão persistente (otimização de memória)
            PDO::ATTR_PERSISTENT => true,
            #Retornar strings como strings 
            PDO::ATTR_STRINGIFY_FETCHES => false,

        ];
        try {
            $dsn = 'pgsql:host=localhost;port=5432;dbname=senac2';
            //Caso a conexão com o banco de dados não exista criamos, uma nova conexão.
            static::$pdo = new PDO($dsn, 'clarita', 'qdicytlj', $options);
            #Permite a captura e o salvamento de acentuação no banco
            static::$pdo->exec("SET NAMES 'utf8'");
            //Caso seja bem-sucedida a conexão retornamos a varíavel $pdo;
            return static::$pdo;
        } catch (\PDOException $e) {
            var_dump($e->getMessage());
            #Lança uma exceção ou uma mensagem de erro.
            throw new \PDOException("Erro: " . $e->getMessage(), 1);
        }
    }
}
