<?php
require_once 'conexao.php';
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("location: login.php");
    exit();
} 
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Página Protegida</h1>
    <p>Sejá bem vindo</p>
    <form action="logout.php" method="post">
        <input type="submit" value="Sair">
    </form>
</body>

</html>