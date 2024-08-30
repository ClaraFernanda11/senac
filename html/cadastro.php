<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="index.css"/>
</head>

<body>
    <h1 id="aqui_temos_o_id_do_titulo" class="classe_do_h1">Cadastro de Clientes</h1>
    <br>
    <form name="form" id="form">
        <label for="nome">Nome</label><br>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" />
        <br>
        <label for="sobrenome">Sobrenome</label><br>
        <input type="text" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome"/>
        <br>
        <label for="cpf">CPF</label><br>
        <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF"/>
        <br>
        <label for="RG">RG</label><br>
        <input type="text" id="rg" name="rg" placeholder="Digite seu RG"/>
        <br>
        <label for="data de nascimento">Data de Nascimento</label><br>
        <input type="date" id="data de nascimento" name="data de nascimento" placeholder=""/>
        <br>
        <label for="nome do pai">Nome do Pai</label><br>
        <input type="text" id="nome do pai" name="nome do pai" placeholder="Digite o nome do pai"/>
        <br>
        <label for="nome da mãe">Nome da Mãe</label><br>
        <input type="text" id="nome da Mãe" name="nome da mãe" placeholder="Digite o nome da mãe"/>
        <br>
        <label for="renda mensal">Renda Mensal</label><br>
        <input type="number" id="renda mensal" name="renda mensal" placeholder="Digite sua renda mensal"/>
        <br>
        <label for="estado civil">Estado Civil</label><br>
        <select id="estado civil" name="estado civil" required>
            <option value="">Selecione o estado civil</option>
            <option value="solteiro">Solteiro(a)</option>
            <option value="casado">Casado(a)</option>
        </select>
        <br>
        <label for="CEP">CEP</label><br>
        <input type="text" id="cep" name="cep" placeholder="Digite seu CEP"/>
        <br>
        <label for=logradouro>Logradouro</label><br>
        <input type="text" id="logradouro" name="logradouro" placeholder="Digite seu Logradouro"/>
        <br>
        <label for="numero de residencia">Número de Residência</label><br>
        <input type="number" id="numero de residencia" name="numero de residencia" placeholder="Digite o número de residência"/>
        <br>
        <label for="bairro">Bairro</label><br>
        <input type="text" id="bairro" name="bairro" placeholder="Digite o nome do seu bairro"/>
        <br>
        <label for="cidade">Cidade</label><br>
        <input type="text" id="cidade" name="cidade" placeholder="Digite o nome da cidade"/>
        <br>
        <label for="uf"> Estado de Federação</label><br>
        <select id="uf" name="uf" required>
            <option value="">Selecione um estado brasileiro</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>]
        </select>
        <br>
        <label for="pais">País</label><br>
        <select id="pais" name="pais" required>
            <option value="">Selecione um país</option>
            <option value="BOL">Bolívia</option>
            <option value="BRA">Brasil</option>
        </select>
        <br>
        <label for="IBGE">IBGE</label><br>
        <input type="number" id="IBGE" name="IBGE" placeholder="Digite o IBGE"/>
        <br><br>
        <button type="submit">Salvar</button>
    </form>
    <script src= "/js/index.js"></script>
</body>

</html>