<?php require "config.php" ?>

<h1>Cadastrar usuário </h1>
<form action="cadastar_action.php" method="post">  

    <label for="">
        Nome:  <input type="text" name="nome" require>
    </label>
    <label for="">
        E-mail: <input type="email" name="email" require>
    </label>
    <br><br>
    <button type="submit">SALVAR</button>
    <br><br>
    <input type="text" nome="aviso" value="<?= $aviso?>" readonly>

</form>