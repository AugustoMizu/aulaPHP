<?php
require "config.php";

$id = $_GET['id'];
$sql = $pdo->prepare("DELETE FROM usuario WHERE ID_cadastro = :id");
$sql->bindValue(':id', $id);

try {
    $sql->execute();
    header("Location:tabela.php");
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}
?>
