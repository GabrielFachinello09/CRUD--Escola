<?php require_once __DIR__ . '/../includes/functions.php'; 
session_start();?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/mini-sistema/css/style.css">
</head>
    <body style="text-align:center;">

        <h1>Faça Login</h1>
    <?php include __DIR__ .'/../includes/header.php'; ?>
        <br>
        <form action="" method="post">
            <label for="email">Digite seu E-mail: </label>
            <input type="text" name="email" id="email" required><br>

            <label for="senha">Digite sua Senha: </label>
            <input type="password" name="senha" id="senha" required><br>

            <input type="submit" value="Fazer Login">
        </form>

       
   

    <?php
        if($_SERVER['REQUEST_METHOD']=="POST") {
            $usuario = consulta_user($conexao,$_POST['email']);
            if($_POST['email'] == $usuario['email'] && $_POST['senha'] == $usuario['senha']){
                $_SESSION['id'] = $usuario['id'];
                echo "Login realizado com sucesso, você será redirecionado!";
                sleep(3);
                header("Location: ../index.php");
                exit();
                
            } else {
                echo "Usuário ou senha inválidos.";
            }
        }
    ?>

    <?php include __DIR__ .'/../includes/footer.php'; ?>
</body>
</html>
