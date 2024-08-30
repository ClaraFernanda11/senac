<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Curso</title>
    <link rel="stylesheet" href="/css/curso.css" />
</head>

<body>
    <h1>Cadastro do Curso</h1>
    <br>
    <form name="form" id="form">
        <label for="nome_curso">Nome do Curso</label><br>
        <input type="text" id="nome" name="nome">
        <br>
        <label for="valor_curso">Valor do Curso</label><br>
        <input type="text" id="valor" name="valor">
        <br>
        <label for="turno_curso">Turno do Curso</label><br>
        <select id="turno" name="turno" required>
            <option value="amanha">Manhã</option>
            <option value="tarde">Tarde</option>
            <option value="noite">Noite</option>
        </select>
        <br><br>
        <button type="submit">Salvar</button>
    </form>
</body>

</html>