<?php require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../login/verifica_user.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta de Aluno</title>
        <link rel="stylesheet" href="/mini_sistema/css/style.css">

</head>
<hr>

<body style="text-align:center;">  
  
    <h1>Consulta de Aluno</h1>
    <?php include __DIR__ . '/../includes/header.php'; ?>


    <form action="" method="post">
        <label for="id">Digite o ID do aluno que você deseja visualizar: </label>
        <input type="number" name="id" id="id"><br>
        <br>
        <br>
        <input type="submit" value="Consultar">
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        consultar($conexao, $_POST['id']);
    }
    include __DIR__ . '/../includes/footer.php';
?>
</body>
</html>





