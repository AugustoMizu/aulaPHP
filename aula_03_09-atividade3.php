<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Augusto Mizu">
    <title>Questão 3 Calculadora</title>
</head>

<body>
    <form action="aula_03_09-atividade3.php" method="post">
        <h1>Questão 3 Calculadora</h1>
        <label for="">Insira um número: </label>
        <input type="number" name="num1">
        <br><br>
        <label for="">Insira outro número: </label>
        <input type="number" name="num2">
        <br> <br>
        <label for="operacao">Operação:</label>
        <select name="operacao" id="operacao">
            <option value="" ></option>
            <option value="+">Soma</option>
            <option value="-">Subtração</option>
            <option value="/">Divisão</option>
            <option value="*">Multiplicação</option>
        </select>
        <button type="submit">Calcular</button>
        <br><br>
        <label for="resultado" style="float: left;">Resultado: </label>
        <input type="text" name="resultado" id="resultado" readonly>
    </form>
    <?php
    $num1 = $_POST["num1"] ?? null;
    $num2 = $_POST["num2"] ?? null;
    $operacao = $_POST["operacao"] ?? null;
    $resultado = null;

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operacao){
            case "+":
                $resultado = $num1 + $num2;
                $resultado = "$num1 + $num2 = $resultado";
                break;

            case "-":
                $resultado = $num1 - $num2;
                $resultado = "$num1 - $num2 = $resultado";
                break;

            case "/":
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                    $resultado = "$num1 / $num2 = $resultado";
                } else {
                    $resultado = "Boa tentativa ಠ_ಠ";
                }
                break;

            case "*":
                $resultado = $num1 * $num2;
                $resultado = "$num1 * $num2 = $resultado";
                break;

            default:
                break;
        }
    }

    echo "<script>document.getElementById('resultado').value = '$resultado';</script>";
    ?>
</body>

</html>