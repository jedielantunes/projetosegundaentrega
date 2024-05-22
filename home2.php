<?php

session_start();
if(!isset($_SESSION['email']) || !isset($_SESSION['senha'])){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
    exit;
}

$logado=$_SESSION['email'];

if(isset($_GET['logout'])){
    session_destroy();
    header('Location: index.php');
    exit;
}

include 'conexao.php';

$sql = "SELECT admin FROM usuarios WHERE email = '$logado'";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $isAdmin = $row['admin'];
} else {
    $isAdmin = 0; // Defina como 0 se não encontrar o usuário
}

$mysqli->close();
?>



<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="styleUsuario.css" />

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right,  rgb(5, 231, 156), rgb(25, 90, 85));
            color: white;
        }
      
    </style>
</head>
<body>
<a id="logout" href="home2.php?logout=1" class="btn btn-primary">Logout</a>

<div class="ContainerPlanos">
<div class="planos">
    
          <img src="img/meusDados.png" alt="menu">
          <h3>Meus dados</h3>
          <p></p> <span></span>
         <a href="usuario.php"> <button>Dados</button></a>
        </div><!--card-img-->

        <div class="planos">
          <img src="img/entre.png" alt="menu">
          <h3>Escolher planos</h3>
          <p></p> <span></span>
         <a href="home.php"><button>Planos</button></a> 
        </div><!--card-img-->

        <div class="planos">
          <img src="img/carrinhos.png" alt="menu">
          <h3>Minhas compras </h3>
          <p></p> <span></span>
       <a href="compra.php"> <button>Compras</button></a> 
        </div><!--card-img-->

       
        <?php
        if($isAdmin == 1): ?>
        <div class="planos">
          <img src="img/admin.png" alt="menu">
          <h3>Área administrativa </h3>
          <p></p> <span></span>
       <a href="admin.php"> <button>Admin</button></a> 
        </div><!--card-img-->
      
        <?php endif; ?>
       

       </div><!--Container-card-1-->
</body>
</html>