<?php
require "config.php"; ?>

<h1>Cadastrar usuário </h1>
<form action="cadastrar_action.php" method="post" name="form1">

    <label for="">
        Nome: <input type="text" name="nome" required>
    </label>
    <label for="">
        E-mail: <input type="email" name="email" required>
    </label>
    <br><br>
    <button type="submit" name="salvar" >SALVAR</button>
    <br><br>
    <input type="text" name="aviso" readonly>

</form>
