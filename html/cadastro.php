<?php
header('Content-Type: application/json');

$host = 'localhost';
$dbname = 'senac';
$user = 'clarita';
$pass = 'qdicytlj';

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Captura os dados do POST
    $data = json_decode(file_get_contents('php://input'), true);

    // Verifica se todos os campos obrigatórios foram preenchidos
    if (empty($data['nome']) || empty($data['username']) || empty($data['email']) || empty($data['password']) || empty($data['confirm_password'])) {
        echo json_encode(['status' => 'error', 'message' => 'Todos os campos são obrigatórios.']);
        exit;
    }

    $nome = filter_var($data['nome'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $login = filter_var($data['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
    $senha = password_hash($data['password'], PASSWORD_DEFAULT); // Criptografa a senha

    // Verifica se as senhas correspondem
    if ($data['password'] !== $data['confirm_password']) {
        echo json_encode(['status' => 'error', 'message' => 'As senhas não correspondem.']);
        exit;
    }

    // Prepara e executa a consulta
    $stmt = $pdo->prepare("INSERT INTO usuario (nome, login, email, senha, ativo, data_cadastro, data_altecao) VALUES (:nome, :login, :email, :senha, true, CURRENT_DATE, CURRENT_DATE)");

    // Bind dos parâmetros
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    // Executa a consulta
    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Cadastro realizado com sucesso!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Erro ao cadastrar.']);
    }
} catch (Exception $e) {
    // Log do erro
    error_log($e->getMessage());
    echo json_encode(['status' => 'error', 'message' => 'Erro ao processar a solicitação.']);
}
