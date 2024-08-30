<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro da Turma</title>
    <link rel="stylesheet" href="cadastroturma.css"/>
</head>
<body>
    <h1 id="aqui_temos_o_id_do_titulo">Cadastro da Turma</h1>
    <br>
    <form name="form" id="form">
        <label for="quantidade de alunos">Quantidade de Alunos</label><br>
        <input type="number" name="quantidade de alunos" id="quantidade de alunos" placeholder="Digite a Quantidade de Alunos"/>
        <br>
        <label for="data de inicio">Data de Inicio</label><br>
        <input type="date" name="data de inicio" id="data de inicio"/>
        <br>
        <label for="data de fim">Data de Fim</label><br>
        <input type="date" name="data de fim" id="data de fim"/>
        <Br>
        <button type="button" id="btnsalvar">Salvar</button>
    </form>
    <script src="/js/turma.js"></script>
</body>
</html>