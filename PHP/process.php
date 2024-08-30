<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Soma</title>
</head>

<body>
    <h1>Resultado da Soma</h1>

    <?php

    function somar($a, $b)
    {
        return $a + $b;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
        $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 0;


        $resultado = somar($num1, $num2);


        echo "<p>A soma de " . htmlspecialchars($num1) . " com " . htmlspecialchars($num2) . " é: " . htmlspecialchars($resultado) . "</p>";
    } else {
        echo "<p>Nenhum dado enviado.</p>";
    }
    ?>

    <a href="form.html">Voltar</a>
</body>

</html>