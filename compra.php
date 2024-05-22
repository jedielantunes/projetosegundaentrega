<?php

session_start();
if((!isset($_SESSION['emmail']) == true) and (!isset($_SESSION['senha'])==true)){
    unset( $_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
}

$logado=$_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="styleUsuario.css" />
</head>
<body>
<a  id="voltar" href="home2.php" class="btn btn-primary">Voltar</a>

    <div class="carrinhovaz">
        <br>
    <h3>Carrinho vazio !!!!</h3>
<br>
    <img src="img/carrinhoVazio.png" alt="">
    </div>
    <script src="script.js"></script>

</body>
</html>