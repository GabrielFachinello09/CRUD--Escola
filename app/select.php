<?php require_once '../includes/functions.php';
require_once '../login/verifica_user.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body style="text-align:center">
    <br>
    <h1>Relatório de Alunos</h1>
    <?php include '../includes/header.php'; ?>
    <main>
        <div style="width: 50%; margin:auto; text-align:center; border:1px solid black; border-radius:5px;">
        <h3>Lista Completa de Alunos</h3>
        <?php
        listar($conexao);
        ?>
        </div>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
