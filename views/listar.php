<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de Filmes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card shadow-sm">
                    <div class="card-header">
                        <h1 class="h4 mb-0">Lista de Filmes</h1>
                    </div>

                    <div class="card-body">

                        <?php if (($_GET["msg"] ?? "") === "excluido"): ?>
                        <div class="alert alert-success">
                            Filme excluído com sucesso!
                        </div>
                        <?php endif; ?>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Tema</th>
                                    <th>Duração</th>
                                    <th>Classificação</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($filmes as $filme): ?>
                                <tr>
                                    <td><?php echo $filme["nome"];?></td>
                                    <td><?php echo $filme["tema"];?></td>
                                    <td><?php echo $filme["duracao"];?></td>
                                    <td><?php echo $filme["classificacao"];?></td>
                                    <td>
                                        <a href="index.php?acao=editar&id=<?php echo $filme['id']; ?>"
                                            class="btn btn-sm btn-warning">
                                            Editar
                                        </a>
                                        <a href="index.php?acao=excluir&id=<?php echo $filme['id']; ?>"
                                            class="btn btn-sm btn-danger"
                                            onclick="return confirm('Tem certeza que deseja excluir?');">
                                            Excluir
                                        </a>

                                    </td>

                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <a href="index.php" class="btn btn-primary">Cadastrar novo filme</a>


                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>