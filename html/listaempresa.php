<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empresa</title>
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
                        <a href="/empresa.php" class="btn btn-outline-success">
                            <i class="fas fa-plus"></i>
                            Cadastro
                        </a>
                    </div>
                    <div class="card body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Nome fantasia</th>
                                    <th>CNPJ</th>
                                    <th>Data nascimento</th>
                                    <th>Incrição Estadual</th>
                                </tr>
                                <td>1</td>
                                    <td>WILTON WILL DE PAULO</td>
                                    <td>0</td>
                                    <td>10/10/2008</td>
                                    <td>0</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="/empresa.php?id=1" class="btn btn-outline-warning">
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
                                <tr>
                                    <td>2</td>
                                    <td>Lucas Pereira Reinaldo</td>
                                    <td>1</td>
                                    <td>6/2/1999</td>
                                    <td>1</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="/empresa.php?id=2" class="btn btn-outline-warning">
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
                                <tr>
                                    <td>3</td>
                                    <td>Clara Fernanda Nuni Rodrigues</td>
                                    <td>2</td>
                                    <td>29/01/2008</td>
                                    <td>2</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic exemple">
                                        <a href="/empresa.php?id=2" class="btn btn-outline-warning">
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
                         

    
</body>
</html>