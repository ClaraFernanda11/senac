<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Disciplina</title>
    <link rel="stylesheet" href="cadastrodisciplina.css"/>
</head>
<body>
    <h1 id="aqui_temos_o_id_do_titulo">Cadastro de Disciplina</h1>
    <br>
    <form name="form" id="form">
        <label for="nome">Nome</label><br>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome da sua disciplina"/>
        <br>
        <label for="ativo">Ativo</label><br>
        <input type="checkbox" id="ativo" name="ativo" value="true"/>
        <br>
        <button type="button" id="btnsalvar">Salvar</button>
     </form>
    <script src="/js/disciplinas.js"></script>
</body>
</html>