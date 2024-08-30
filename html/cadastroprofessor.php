<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professor</title>
    <link rel="stylesheet" href="cadastroprofessor.css"/>
</head>
<body>
    <h1 id="aqui_temos_o_id_do_titulo" class="classe_do_h1">Cadastro de Professor</h1>
    <br>
    <form name="form" id="form">
    <label for="nome">Nome</label><br>
    <input type="text" id="nome" name="nome" placeholder="Digite seu nome"/>
    <br>
    <label for="CPF">CPF</label><br>
    <input type="text" id="CPF" name="CPF" placeholder="Digite seu CPF"/>
    <br>
    <label for="RG">RG</label><br>
    <input type="RG" id="RG" name="RG" placeholder="Digite seu RG"/>
    <br>
    <label for="data_nascimento" id="data_nascimento">Data de Nascimento</label><br>
    <input type="date" id="data_nascimento" name="data_nascimento" placeholder="data nascimento"/>
    <button type="button" id="btnsalvar">Salvar</button>
</form>
<script src="/js/professor.js"></script>
</body>
</html>