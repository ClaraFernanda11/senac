<DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro e edição de aluno</title>
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
                            <li class="breadcrumb-item"><a href="/listaaluno.php">Lista de aluno</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cadastro e edição de alunos</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Cadastro e edição de aluno</h3>
                        </div>
                        <div class="card-body">
                            <div class="col-12">
                                <div class="alert alert-warning" role="alert">
                                    Todos os campos sinalizado com
                                    <span class="text-danger">*</span> são de preenchimento obrigatórios
                                </div>
                            </div>
                            <form id="form">
                                <div class="form-floating mb-3">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nome"
                                        name="nome"
                                        placeholder="">
                                    <label for="floatingInput">Digite por favor seu nome *</label>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="/listaaluno.php" class="btn btn-outline-warning">
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