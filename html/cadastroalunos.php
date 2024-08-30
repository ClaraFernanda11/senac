<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
  </head>
</head>
<body>
    <div class="containe-fluid">
        <div class="cow">
            <div class="col-12">
            <h1 id="aqui_temos_o_id_do_titulo">Cadastro de Alunos</h1>
            </div>
        </div>
        <div class="col-12">
            <div class="alert alert-warning" role="alert">
                Campos sinalizados com * são obrigados para o cadastro
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <div class="form-floating mb-3">
  <input 
  type="text"
  class="form-control" 
  id="nome" 
  name="nome"
  placeholder="name@example.com">
  <label for="floatingInput">Digite seu nome</label>
</div>
            </div>
        </div>
    </div>
    </div>
    <div class="containe-fluid">
        <div class="cow">
            <div class="col-12">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <div class="form-floating mb-3">
  <input 
  type="text" 
  class="form-control" 
  id="CPF" 
  name="CPF"
  placeholder="name@example.com">
  <label for="floatingInput">Digite seu CPF</label>
</div>
            </div>
        </div>
    </div>
    </div>
    </div>
            </div>
        </div>
    </div>
    </div>
    <div class="containe-fluid">
        <div class="cow">
            <div class="col-12">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <div class="form-floating mb-3">
  <input 
  type="text" 
  class="form-control" 
  id="RG" 
  name="RG"
  placeholder="name@example.com">
  <label for="floatingInput">Digite seu RG</label>
</div>
            </div>
        </div>
    </div>
    </div>
    <div class="containe-fluid">
        <div class="cow">
            <div class="col-12">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <div class="form-floating mb-3">
  <input 
  type="date" 
  class="form-control" 
  id="data_nascimento" 
  name="data_nascimento"
  placeholder="name@example.com">
  <label for="floatingInput">Digite sua data de nascimento</label>
</div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-12">
        <label for="ativo">
            <input type="checkbox" name="ativo" id="ativo" value="true"> Ativo?
        </label>
    </div>
    <div class="col-12">
        <button class="btn btn-lg btn-success" id="btnsalvar">Salvar</button>
    </div>
 
     <script src="/js/bootstrap.js"></script>
     <script src="/js/alunos.js"></script>
</body>
</html>