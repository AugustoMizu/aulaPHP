<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peso ideal</title>
</head>

<body>
    <form action="atividade_function_3.php" method="post">
        <h1>Calculador de peso ideal</h1>
        <label for="">Informe seu sexo: </label>
        <select name="genere" id="genere">
            <option value="m">Masculino</option>
            <option value="f">Feminino</option>
            <option value="o">Outro</option>
        </select>
        <br><br>
        <label for="">Informe sua altura: </label>
        <input type="number" name="altura" id="" min="0" step="0.01">
        <br><br>
        <input type="submit" value="calcular">
        <br><br>
        <label for="">Resultado: </label>
        <input type="number" name="resultado" id="resultado" readonly>
    </form>

    <?php
    $genere = $_POST["genere"] ?? null;
    $altura = $_POST["altura"] ?? null;
    $resultado = null;

    function calcula_peso($genere, $altura)
    {
        if ($altura != null) {
            if ($genere == "m") {
                $resultado = (72.2 * $altura) - 58;
                return $resultado;
            } elseif ($genere == "f") {
                $resultado = (62.1 * $altura) - 44.7;
                return $resultado;
            } else {
                $resultado = ((72.2 - 62.1) * $altura) - (58 - 44.7);
                return $resultado;
            }
        }
    }
    $resultado =  round(calcula_peso($genere, $altura), 3);
    echo "<script>document.getElementById('resultado').value = '$resultado'</script>";
    /*echo "<script>document.getElementById('genere').valeu = '$genere.value'</script>";*/
    ?>
</body>

</html>