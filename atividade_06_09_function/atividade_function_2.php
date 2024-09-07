<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Função 2</title>
</head>

<body>
    <form action="" method="post">
        <h1>Conversor de dólar para real</h1>
        <label for="">Insira um valor em dólar:</label>
        <input type="number" name="valor" id="valor" min="0" step=".01">
        <br><br>
        <button type="submit">Calcular</button>
        <br><br>
        <label for="">Resultado em real R$: </label>
        <input type="number" name="resultado" id="resultado" readonly>
    </form>

    <?php
    $valor = $_POST["valor"] ?? null;
    $resultado = null;

    function converter_dolar($valor)
    {
        $resultado = $valor * 1.81;
        return $resultado;
    }
    if ($valor != null) {

        $resultado = converter_dolar($valor);
        echo "<script>document.getElementById('resultado').value = '$resultado';</script>";
        echo "<script>document.getElementById('valor').value = '$valor';</script>";
    }
    ?>
</body>
</html>