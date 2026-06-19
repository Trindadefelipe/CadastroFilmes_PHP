<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Resultado do Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Tema</th>
                                    <th>Duração</th>
                                    <th>Classificação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($filmes as $filme): ?>
                                <tr>
                                    <td><?php echo $filme["nome"];?></td>
                                    <td><?php echo $filme["tema"];?></td>
                                    <td><?php echo $filme["duracao"];?></td>
                                    <td><?php echo $filme["classificacao"];?></td>
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