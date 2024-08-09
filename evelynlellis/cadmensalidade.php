<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Mensalidade</title>
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
    <h1>Cadastro de Mensalidade</h1>
    <form action="" method="post">
        <label for="CodMen">Código da Mensalidade:</label>
        <input type="text" id="CodMen" name="CodMen" required><br><br>
        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required><br><br>
        <label for="valor">Valor:</label>
        <input type="number" id="valor" name="valor" step="0.01" required><br><br>
        <label for="aumento">Aumento (%):</label>
        <input type="number" id="aumento" name="aumento" step="0.01" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST['valor'];
        $aumento = $_POST['aumento'];

        $totalAumento = ($valor * ($aumento / 100));
        echo "<p>Total do aumento: R$ " . number_format($totalAumento, 2, ',', '.') . "</p>";
    }
    ?>

    <?php include 'desenvolvedor.php'; ?>

</body>