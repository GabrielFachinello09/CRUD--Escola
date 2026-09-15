<?php require_once '../includes/functions.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta de Aluno</title>
        <link rel="stylesheet" href="../css/style.css">

</head>
<hr>

<body style="text-align:center;">  
    <?php include '../includes/header.php'; ?>
  
    <h1>Consulta de Aluno</h1>


    <form action="" method="post">
        <label for="id">Digite o ID do aluno que você deseja visualizar: </label>
        <input type="number" name="id" id="id"><br>
        <br>
        <input type="submit" value="Consultar">
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        consultar($conexao, $_POST['id']);
    }
    include '../includes/footer.php';
?>
</body>
</html>





