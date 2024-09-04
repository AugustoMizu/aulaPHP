<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Augusto Mizu">
    <title>Questão 3 Par ou impar</title>
</head>

<body>
    <form action="aula_03_09-atividade3-2.php" method="post">
        <h1>Questão 3 Par ou Impar</h1>
        <label for="numero">Insira um número:</label>
        <input type="number" name="numero" id="numero" placeholder="0" >

        <button type="submit">Testar</button>
        <br><br>

        <label for="resultado">Resultado: </label>
        <input type="text" id="resultado" readonly>
    </form>

    <?php
    $num1 = $_POST["numero"] ?? 0;

    if ($num1 >= 0) {
        if ($num1 % 2 == 1) {
            echo "<script>document.getElementById('resultado').value = '$num1 é impar';</script>";
            echo "<script>document.getElementById('numero').value = '$num1';</script>";
        } else {
            echo "<script>document.getElementById('resultado').value = '$num1 é par';</script>";
            echo "<script>document.getElementById('numero').value = '$num1';</script>";
        }
    }
    if ($num1 < 0) {
        if ($num1 % 2 == 1) {
            echo "<script>document.getElementById('resultado').value = '$num1 é impar';</script>";
            echo "<script>document.getElementById('numero').value = '$num1';</script>";
        } else{
            echo "<script>document.getElementById('resultado').value = '$num1 é par';</script>";
            echo "<script>document.getElementById('numero').value = '$num1';</script>";
        }
    }


    ?>
</body>

</html>