<?php require "config.php";

// converte os caracteres especias em html, prevenindo códigos maliciosos
$nome = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);

if ($nome && $email) {
    // prepara os comandos
    $sql = $pdo->prepare("INSERT INTO usuario (nome, email) VALUES (:nome, :email)");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);

    // executar parametros 
    $sql->execute();
    header("Location:tabela.php");
} else {

    header("Location:cadastrar.php");
}
