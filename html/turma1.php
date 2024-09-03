<?php
$id = '';
$acao = '';
if (isset($_GET['id']) and !empty($_GET['id'])) {

    $id = $_GET['id'];
    $acao = 'e';
} else {
    $id = '';
    $acao = 'c';
}
?>
<DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro e edição de turma</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Início</a></li>
                            <li class="breadcrumb-item"><a href="/listaturma.php">Lista de Turma</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cadastro e edição de turma</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Cadastro e edição de turma</h3>
                        </div>
                        <div class="card-body">
                            <div class="col-12">
                                <div class="alert alert-warning" role="alert">
                                    Todos os campos sinalizado com
                                    <span class="text-danger">*</span> são de preenchimento obrigatórios
                                </div>
                            </div>
                            <form id="form">
                                <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                                <input type="hidden" name="acao" id="acao" value="<?php echo $acao; ?>">
                                <div class="form-floating mb-3">
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="quantidade_de_alunos"
                                        name="quantidade_de_alunos"
                                        placeholder="">
                                    <label for="floatingInput">Digite por favor a quantidade de alunos *</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="data_de_inicio"
                                        name="data_de_inicio"
                                        placeholder="">
                                    <label for="floatingInput">Digite por favor a data de inicio *</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="data_de_fim"
                                        name="data_de_fim"
                                        placeholder="">
                                    <label for="floatingInput">Digite por favor a data de fim *</label>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="/listaempresa.php" class="btn btn-outline-warning">
                                    <i class="fas fa-chevron-left"></i>
                                    Voltar
                                </a>
                                <button type="button" class="btn btn-outline-success">
                                    <i class="fas fa-save"></i>
                                    Salvar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    </body>

    </html>