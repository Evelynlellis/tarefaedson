<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Escola</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        footer {
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Escola</h1>
    <form action="" method="post">
        <label for="CodEscola">Código da Escola:</label>
        <input type="text" id="CodEscola" name="CodEscola" required><br><br>
        <label for="NomeEscola">Nome da Escola:</label>
        <input type="text" id="NomeEscola" name="NomeEscola" required><br><br>
        <label for="cnpj">CNPJ:</label>
        <input type="text" id="cnpj" name="cnpj" required><br><br>
        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" required><br><br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>

    <?php include 'desenvolvedor.php'; ?>

</body>
</html>