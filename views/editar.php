<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Filme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h1 class="h4 mb-0">Edição de Filmes</h1>
                    </div>

                    <div class="card-body">
                        <form action="index.php?acao=atualizar" method="POST">

                            <input type="hidden" name="id" value="<?php echo $filmes['id']; ?>">


                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome do filme</label>
                                <input type="text" name="nome" id="nome" class="form-control"
                                    value="<?php echo $filme["nome"];?>" required>
                            </div>

                            <div class=" mb-3">
                                <label for="tema" class="form-label">Tema do filme</label>
                                <input type="text" name="tema" id="tema" class="form-control"
                                    value="<?php echo $filme["tema"];?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="duracao" class="form-label">Duração do filme</label>
                                <input type="number" name="duracao" id="duracao" class="form-control"
                                    value="<?php echo $filme["duracao"];?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="classificacao" class="form-label">Classificação indicativa</label>
                                <select name="classificacao" id="classificacao" class="form-select" required>
                                    <option value="">Selecione...</option>
                                    <option value="Livre"
                                        <?php if ($filme['classificacao'] === 'Livre') echo 'selected'; ?>>Livre
                                    </option>
                                    <option value="Maior de 10 anos"
                                        <?php if ($filme['classificacao'] === 'Maior de 10 anos') echo 'selected'; ?>>
                                        Maior de 10 anos
                                    </option>
                                    <option value="Maior de 12 anos"
                                        <?php if ($filme['classificacao'] === 'Maior de 12 anos') echo 'selected'; ?>>
                                        Maior de 12 anos
                                    </option>
                                    <option value="Maior de 14 anos"
                                        <?php if ($filme['classificacao'] === 'Maior de 14 anos') echo 'selected'; ?>>
                                        Maior de 14 anos
                                    </option>
                                    <option value="Maior de 16 anos"
                                        <?php if ($filme['classificacao'] === 'Maior de 16 anos') echo 'selected'; ?>>
                                        Maior de 16 anos
                                    </option>
                                    <option value="Maior de 18 anos"
                                        <?php if ($filme['classificacao'] === 'Maior de 18 anos') echo 'selected'; ?>>
                                        Maior de 18 anos
                                    </option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success">
                                Atualizar Filme
                            </button>

                            <a href="index.php" class="btn btn-secondary">
                                Limpar
                            </a>
                            <a href="index.php?acao=listar" class="btn btn-secondary">
                                Ver lista de filmes
                            </a>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>