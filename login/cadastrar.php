<?php require_once '../includes/functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body style="text-align:center;">
        <h1>Cadastre-se</h1>
        <?php include '../includes/header.php'; ?>
        <br>
        <form action="" method="post">
            <label for="email">Digite seu E-mail: </label>
            <input type="text" name="email" id="email"><br>

            <label for="senha">Digite sua Senha: </label>
            <input type="password" name="senha" id="senha"><br>

            <input type="submit" value="Fazer Cadastro">
        </form>
   

    <?php
        if($_SERVER['REQUEST_METHOD']=="POST") {
            cadastrar_user($conexao,$_POST['email'],$_POST['senha']);

        }
    ?>
</body>
</html>