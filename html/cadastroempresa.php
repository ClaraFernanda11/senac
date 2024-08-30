<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Empresa</title>
    <link rel="stylesheet" href="cadastroempresa.css"/>
</head>
<body>
    <h1 id="aqui_temos_o_id_do_titulo" class="classe_do_h1">Cadastro de Empresa</h1>
    <br>
    <form name="form" id="form">
    <label for="nome_fantasiaa">Nome Fantasia</label><br>
    <input type="text" id="nome_fantasia" name="nome_fantasiaa" placeholder="Digite seu nome fantasia"/>
    <br>
    <label for="CNPJ">CNPJ</label><br>
    <input type="text" id="CNPJ" name="CNPJ" placeholder="Digite seu CNPJ"/>
    <br>
    <label for="data_de_nascimento" id="data_de_nascimento">Data de Nascimento</label><br>
    <input type="date" id="data_de_nascimento" name="data_de_nascimento" placeholder="data de nascimento"/>
    <br>
    <label for="inscricao_estadual">Incrição Estadual</label><br>
    <input type="text" id="inscricao_estadual" name="inscricao_estadual" placeholder="Digite sua Inscrição Estadual"/>
    <button type="button" id="btnsalvar">Salvar</button>
</form>
<script src="/js/empresa.js"></script>
</body>  
</html>