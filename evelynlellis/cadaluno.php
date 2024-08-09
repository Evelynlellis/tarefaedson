<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Aluno</title>
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
    <h1>Cadastro de Aluno</h1>
    <form action="" method="post">
        <label for="CodAluno">Código do Aluno:</label>
        <input type="text" id="CodAluno" name="CodAluno" required><br><br>
        <label for="aluno">Nome do Aluno:</label>
        <input type="text" id="aluno" name="aluno" required><br><br>
        <label for="rg">RG:</label>
        <input type="text" id="rg" name="rg" required><br><br>
        <label for="DtNascimento">Data de Nascimento:</label>
        <input type="date" id="DtNascimento" name="DtNascimento" required><br><br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>

    <?php include 'desenvolvedor.php'; ?>

</body>
</html>