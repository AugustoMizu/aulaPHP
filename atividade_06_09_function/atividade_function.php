<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercio função</title>
</head>

<body>
    <form action="" method="post">
        <h1>Exércicio função <br>Farenheits para celsius</h1>
        <label for=""><b>Insira um número: </b></label>
        <input type="number" name="temp" id="temp">
        <br><br>
        <button type="submit">Calcular</button>
        <br>
        <label for="">Resultado: </label>
        <input type="number" name="resultado" id="resultado" readonly>
    </form>


    <?php
    $temp = $_POST["temp"] ?? null;
    $resultado = null;

    function converter($temp)
    {
        $resultado = (($temp - 32) * 5) / 9;
        return $resultado;
    }
    if ($temp != null) {

        $resultado = round( converter($temp),2);
        echo "<script>document.getElementById('resultado').value = '$resultado';</script>";
        echo "<script>document.getElementById('temp').value = '$temp';</script>";
    }

    ?>
</body>

</html>