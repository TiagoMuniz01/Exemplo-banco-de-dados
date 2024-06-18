<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/site-banco-de-dados/controller/pessoaController.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Sistema de Cadastro</title>
</head>
<body>

<header>
        <div class="row fixed-top">
            <div class="col">
                <div class="container m-auto">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="index.php">Sistema de Cadastro</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <br>

    <div class="container m-auto mb-2">
        <h2 class="mb-3">Editar</h2>
        <?php
            //buscando id do usuário
            $pessoaController = new pessoaController();
            $pessoa = $pessoaController->buscarPorId($_GET['id']);
        ?>
        <form method="POST" action="controller/pessoaController.php?acao=atualizar&id=<?php echo $pessoa['id'] ?>"> <!-- a ação do formulário atualiza o registro -->
            <!-- em cada um dos campos, o respectivo dado é atribuido atraves do buscarPorId -->
            <div class="form-group mb-2">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $pessoa['nome'] ?>">
            </div>
            <div class="form-group mb-2">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $pessoa['endereco'] ?>">
            </div>
            <div class="form-group mb-2">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $pessoa['bairro'] ?>">
            </div>
            <div class="form-group mb-2">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $pessoa['cep'] ?>">
            </div>
            <div class="form-group mb-2">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $pessoa['cidade'] ?>">
            </div>
            <div class="form-group mb-2">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $pessoa['estado'] ?>">
            </div>
            <div class="form-group mb-2">
                <label for="telefoneFixo">Telefone Fixo:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $pessoa['telefone'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="celular">Celular:</label>
                <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $pessoa['celular'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>
</html>