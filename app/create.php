<?php require_once '../includes/functions.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body style="text-align:center;">
    <br>
    <h1>Cadastro de Alunos</h1>
    <?php include '../includes/header.php'; ?>
    <br>
    <hr>
    <br>
    <form action="" method='POST'>
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"><br>

        <label for="turma">Turma</label>
        <input type="text" name="turma" id="turma"><br> 

        <label for="nasc">Nascimento: </label>
        <input type="date" name="nasc" id="nasc"><br>
        <br>
        <label for="ativo">Ativo?</label>
        <input type="radio" name="ativo" id="ativo" value="true">
        <label for="sim">Está Ativo</label>

        <input type="radio" name="ativo" id="ativo" value="false">
        <label for="nao">Não Está Ativo</label><br>
        <br>
        <input type="reset" value="Limpar">
        <input type="submit" value="Cadastrar">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            cadastrar($conexao, $_POST['nome'], $_POST['nasc'], $_POST['turma'], $_POST['ativo']);
        }
        
        include '../includes/footer.php'; 
        ?>


    
</body>
</html>