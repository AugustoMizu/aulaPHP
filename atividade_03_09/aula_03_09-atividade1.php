<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Augusto Mizu">
    <title>Exercício 1:</title>
</head>

<body>
    <form action="aula_03_09-atividade1.php" method="post">
        <h1>atividade 1 <br>Cadastro</h1>
        <div class="mb-3">

            <p>E-mail</p>
            <input type="text" class="form-control" name="input_email" placeholder="E-mail" required="true" />

            <p>Idade</p>
            <input type="text" class="input-box" name="input_idade" placeholder="Idade"/>
            <a id="helpId" class="form-text text-muted">Mãe tem café?</a>
            
            <br>
            <button type="submit">Cadastrar</button>
        </div>
    </form>
    <?php
    $nome = $_POST["input_email"] ?? null;
    $idade = $_POST["input_idade"] ?? null;

    if($idade < 18 && !is_null($idade)){
        echo "Idade $idade insuficiente ESPERE ", (18 - $idade), " ANOS!";
    }elseif(!is_null($idade) && !is_null($nome)){
        echo "Cadastrado com sucesso!";
    }

    ?>

</body>

</html>