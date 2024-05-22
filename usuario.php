<?php
session_start();
if(!isset($_SESSION['email']) || !isset($_SESSION['senha'])){
    header('Location: index.php');
    exit;
}


include_once('conexao.php');

$email = $_SESSION['email'];


$sql = "SELECT nome, telefone, endereco, sexo, estado, data_nasc, planos FROM usuarios WHERE email = '$email'";
$resultado = mysqli_query($mysqli, $sql);

if ($resultado) {
    $dadosUsuario = mysqli_fetch_assoc($resultado);

    
    $nome = $dadosUsuario['nome'];
    $telefone = $dadosUsuario['telefone'];
    $endereco = $dadosUsuario['endereco'];
    $sexo = $dadosUsuario['sexo'];
    $estado = $dadosUsuario['estado'];
    $data_nasc = $dadosUsuario['data_nasc'];
    $planos = $dadosUsuario['planos'];


  $data_br = date('d/m/Y', strtotime($data_nasc));
}
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="styleUsuario.css">
</head>
    
<body>
    <a  id="voltar" href="home2.php" class="btn btn-primary">Voltar</a>
    <h1>Perfil do Usuário</h1>
    <p>NOME: <?php echo $nome; ?></p>
    <p>EMAIL: <?php echo $email; ?></p>
    <p>TELEFONE: <?php echo $telefone; ?></p>
    <p>SEXO: <?php echo $sexo; ?></p>
    <p>ESTADO: <?php echo $estado; ?></p>
    <p>ENDERECO: <?php echo $endereco; ?></p>
    <p>PLANOS: <?php echo $planos; ?></p>

    <p>DATA DE NASCIMENTO: <?php echo $data_br; ?></p>
</body>
</html>