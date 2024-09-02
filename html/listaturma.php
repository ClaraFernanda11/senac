<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Professor</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Início</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/professor.php" class="btn btn-outline-success">
                            <i class="fas fa-plus"></i>
                            Cadastro
                        </a>
                    </div>
                    <div class="card body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Quantidade de alunos</th>
                                    <th>Data de Inicio</th>
                                    <th>Data de Fim</th>
                                </tr>
                    </div>
                    </td>
                    </tr>
                    <td>2</td>
                    <td>35</td>
                    <td>25/01/2024</td>
                    <td>23/11/2024</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="/turma.php?id=2" class="btn btn-outline-warning">
                                <i class="fas fa-edit"> </i>
                                Editar
                            </a>
                            <button type="button" class="btn btn-outline-danger">
                                <i class="fas fa-trash"> </i>
                                Excluir
                            </button>
                        </div>
                    </td>
                    </tr>
                    <td>2</td>
                    <td>40</td>
                    <td>21/01/2024</td>
                    <td>20/10/2024</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="/turma.php?id=2" class="btn btn-outline-warning">
                                <i class="fas fa-edit"> </i>
                                Editar
                            </a>
                            <button type="button" class="btn btn-outline-danger">
                                <i class="fas fa-trash"> </i>
                                Excluir
                            </button>
                        </div>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>

</html>