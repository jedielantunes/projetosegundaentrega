<?php

session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha'])==true)){
    unset( $_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
}

$logado=$_SESSION['email'];

if(isset($_POST['planos'])){
   include_once('conexao.php');
   $planos = $_POST['planos'];

   $resultado = mysqli_query($mysqli, "SELECT id FROM usuarios WHERE email = '$logado'");

   if($resultado){
    $row = mysqli_fetch_assoc($resultado);
    $userId = $row['id'];

    $inserirresultado = mysqli_query($mysqli, "UPDATE usuarios SET planos = '$planos' WHERE id = $userId"); 
   }
   if($inserirresultado){
    echo "Plano '$planos' adicionado com sucesso!";
   }else{
    echo "Erro ao adicionar o plano";
   }
}
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
            background: linear-gradient(to right, rgb(5, 231, 156), rgb(25, 90, 85));
            color: white;
        }
      
    </style>
</head>
<body>
<a  id="voltar" href="home2.php" class="btn btn-primary">Voltar</a>

<div class="ContainerPlanos">
<div class="planos">
  <div class="planos-content">
          <img src="img/basic.jpg" alt="menu">
          <h3>Basico</h3>
          <p></p> <span></span>
          <form method="post" action="home.php">
            <input type="hidden" name="planos" value="Basico">
          <button type="submit">Adicionar no carrinho</button>
        </div>
        </div>
      </form>

      <div class="planos">
      <div class="planos-content">
    <img src="img/basic.jpg" alt="menu">
    <h3>Plus</h3>
    <p></p> <span></span>
    <form method="post" action="home.php">
      <input type="hidden" name="planos" value="Plus">
    <button type="submit">Adicionar no carrinho</button>
  </div>
  </div>
</form>

<div class="planos">
<div class="planos-content">
    <img src="img/basic.jpg" alt="menu">
    <h3>Mega Plus</h3>
    <p></p> <span></span>
    <form method="post" action="home.php">
      <input type="hidden" name="planos" value="Mega Plus">
    <button type="submit">Adicionar no carrinho</button>
  </div>
  </div>
</div>
</form>
</body>
</html>