<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
</head>

<body>
    <form action="aula_03_09-atividade2.php" method="post">
        <h1>Exercício 2</h1>

        <p>Insira a nota:</p>
        <input type="number" name="nota" require="true" min="0" max="10">
        <br>
        <button type="submit">Enviar</button>
    </form>

    <?php

    $nota = $_POST["nota"];

    if (!is_null($nota)) {
        switch ($nota) {
            case 10:
                echo "A nota $nota equivale a A";
                break;
            case 9:
                echo "A nota $nota equivale a B";
                break;
            case 8:
            case 7:
                echo "A nota $nota equivale a C";
                break;
            case 6:
            case 5:
                echo "A nota $nota equivale a D";
                break;
            default:
                echo "A nota $nota equivale a E";
                break;
        }
    }


    ?>
</body>

</html>