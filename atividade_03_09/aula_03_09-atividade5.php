<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Augusto Mizu">
    <title>Questão 5</title>
</head>

<body>
    <h1>Questão 5</h1>
    <h2>shimizu cashbank</h2>
    <form action="aula_03_09-atividade5.php" method="post">
        <Label>Escolha uma opção:</Label>
        <select name="operacao" id="operacao">
            <option value="1">1 - Ver Saldo</option>
            <option value="2">2 -Depositar</option>
            <option value="3">3 - Sacar</option>
            <option value="4">4 - Sair</option>
        </select>
        <button type="submit">Confirmar</button>
    </form>

    <?php
    $operacao = $_POST["operacao"] ?? null;
    $valor_operacao = null;
    $saldo = 1000.00;

    switch ($operacao) {
        case 1:
            echo "Seu saldo é R$ $saldo";
            break;
        case 2: ?>
            <form action="" method="post">
                <br>
                <label for="">Insira o valor para deposito: </label>
                <input type="number" name="deposito" id="deposito" min="0">;
                <input type="hidden" name="operacao" value="2">
                <br><br>
                <input type="submit" value="Depositar">
            </form>      
            <?php
            $valor_operacao = $_POST["deposito"] ?? null;

            if ($valor_operacao != null) {
                    $saldo += $valor_operacao;
                    echo "<br>Saldo atual $saldo";
            }
            break;
        case 3: ?>
         <form action="" method="post">
                <br>
                <label for="">Insira o valor para sacar: </label>
                <input type="number" name="saque" id="saque" min="0">
                <input type="hidden" name="operacao" value="3">
                <br><br>
                <input type="submit" value="Sacar">
            </form>      
            <?php
            $valor_operacao = $_POST["saque"] ?? null;

            if ($valor_operacao != null) {
                if ($saldo > $valor_operacao) {
                    $saldo -= $valor_operacao;
                    echo "<br>Saldo atual $saldo";
                } else {
                    echo "<br>Saldo insuficiente! Saldo atual R$ $saldo";
                }
            }
            break;
        case 4: ?>
            <?php
            echo "<br>Adeus, volte sempre  (•◡•) /";
            break; ?>
    <?php
    }
    ?>
</body>

</html>