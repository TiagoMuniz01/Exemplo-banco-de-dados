<!DOCTYPE html>
<html>
<head>
    <title>Tela de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <form method="POST" action="controller/pessoaController.php">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite o nome">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" placeholder="Digite o endereço">
            </div>
            <div class="form-group">
                <label for="">Bairro:</label>
                <input type="text" class="form-control" id="bairro" placeholder="Digite o bairro">
            </div>
            <div class="form-group">
                <label for="nome">CEP:</label>
                <input type="text" class="form-control" id="cep" placeholder="Digite o CEP">
            </div>
            <div class="form-group">
                <label for="nome">Cidade:</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite o nome">
            </div>
            <div class="form-group">
                <label for="nome">Estado:</label>
                <input type="text" class="form-control" id="estado" placeholder="Digite o estado">
            </div>
            <div class="form-group">
                <label for="nome">Telefone:</label>
                <input type="text" class="form-control" id="telefone" placeholder="Digite o telefone">
            </div>
            <div class="form-group">
                <label for="nome">Celular:</label>
                <input type="text" class="form-control" id="celular" placeholder="Digite o celular">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

</body>
</html>