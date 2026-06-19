<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Filmes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h1 class="h4 mb-0">Cadastro de Filmes</h1>
                    </div>

                    <div class="card-body">
                        <form action="index.php?acao=cadastrar" method="POST">

                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome do filme</label>
                                <input type="text" name="nome" id="nome" class="form-control"
                                    placeholder="Digite o nome do filme" required>
                            </div>

                            <div class="mb-3">
                                <label for="tema" class="form-label">Tema do filme</label>
                                <input type="text" name="tema" id="tema" class="form-control"
                                    placeholder="Ação, aventura, comédia..." required>
                            </div>

                            <div class="mb-3">
                                <label for="duracao" class="form-label">Duração do filme</label>
                                <input type="number" name="duracao" id="duracao" class="form-control"
                                    placeholder="Digite a duração do filme em minutos" required>
                            </div>

                            <div class="mb-3">
                                <label for="classificacao" class="form-label">Classificação indicativa</label>
                                <select name="classificacao" id="classificacao" class="form-select" required>
                                    <option value="">Selecione...</option>
                                    <option value="Livre">Livre</option>
                                    <option value="Maior de 10 anos">Maior de 10 anos</option>
                                    <option value="Maior de 12 anos">Maior de 12 anos</option>
                                    <option value="Maior de 14 anos">Maior de 14 anos</option>
                                    <option value="Maior de 16 anos">Maior de 16 anos</option>
                                    <option value="Maior de 18 anos">Maior de 18 anos</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success">
                                Cadastrar Filme
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