<?php require "config.php";

$lista = [];
$sql = $pdo->query("SELECT * FROM usuario");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
 <h1>Lista de usuários cadastrados</h1>
<a href="cadastrar.php">cadastrar novos usuarios</a>
<br><br>
<table border="2">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>        
    </tr>
        <?php foreach($lista as $usuarios):?>
        <tr>
            <td><?= $usuarios["ID_cadastro"]?></td>
            <td><?= $usuarios["nome"]?></td>
            <td><?= $usuarios["email"]?></td>
            <td><a href="editar.php?id=<?= $usuarios["ID_cadastro"];?>">Editar</a></td>
            <td><a href="excluir.php?id=<?= $usuarios["ID_cadastro"];?>">Excluir</a></td>
        </tr>
        <?php endforeach;?>
</table>   

