<?php
require "config.php"; ?>

<h1>Cadastrar usuário </h1>
<form action="" method="post" name="form1">

    <label for="">
        Nome: <input type="text" name="nome" >required
    </label>
    <label for="">
        E-mail: <input type="email" name="email" >required
    </label>
    <br><br>
    <button type="submit" name="salvar"  >SALVAR</button>
    <br><br>
    <input type="text" name="aviso" readonly>

</form>
<script>
   /* var input1 = document.getElementsByName("nome");
    var input2 = document.getElementsByName("email");
    var input_aviso = document.getElementsByName("aviso");
    var button = document.getElementsByName('salvar');

    input1.addEventListener("change", stateHandle);
    input2.addEventListener("change", stateHandle);

    function stateHandle() {

        if (input1.value != "" && input2.value != "") {
            document.getElementsByName("form1").action = "cadastrar_action.php";
        } else {
           
            input_aviso.value("NÃO DEIXE CAMPOS EM BRANCO");
        
        }
    }*/
</script>