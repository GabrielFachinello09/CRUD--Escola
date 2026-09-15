<?php 
$host = "IP do servidor";
$dbname = "nomeDoBanco";
$user = "nomeDoUsuario";
$pass = "suaSenha";
try {
    $conexao = new PDO(
        "pgsql:host=$host;dbname=$dbname",
        $user,
        $pass
    );
    echo "Conexão com Postgres realizada! <br>";
} catch (PDOException $e) {
    echo "Erro: ". $e->getMessage();
}
?>