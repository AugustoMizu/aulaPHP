<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Augusto Mizu">
    <title>Questão 4 </title>
</head>

<body>
    <form action="" method="post">
        <h1>Questão 4</h1>
        <label for="usuario">Usuário: </label>
        <input type="text" placeholder=" usuário" name="usuario">
        <br><br>
        <label for="senha">Senha: </label>
        <input type="password" placeholder=" senha" name="senha">
        <br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    $usuario = $_POST["usuario"] ?? null;
    $senha = $_POST["senha"] ?? null;

    const usuario_padrao = "admin";
    const senha_padrao = "1234";

    if ($usuario != null && $senha != null) {
        if ($usuario == usuario_padrao  && $senha == senha_padrao) {
            echo "Login bem sucedido!";
        } else {
            echo "Login ou senha incorretos";
        }
        $usuario = null;
        $senha = null;
    }
    ?>
</body>

</html>