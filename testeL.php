<?php

session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    include_once('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

   // echo 'Email: ' . $email . '<br>';
   // echo 'Senha: ' . $senha;
   $sql = "SELECT * FROM usuarios WHERE email = ?";

   $stmt = $mysqli->prepare($sql);

$stmt->bind_param("s", $email);

$stmt->execute();

$result = $stmt->get_result();


   if($result){
    $usuario = $result->fetch_assoc();

 

  // print_r($result);

if(password_verify($senha, $usuario['senha']) ){

    $_SESSION['email']= $email;
    $_SESSION['senha']= $senha;

    header('Location: home2.php');


}else{

    unset( $_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');

    
}

} else {
    // Tratamento de erro na consulta SQL
    echo "Erro na consulta: " . $mysqli->error;
}
} else {
header('Location: index.php');
}
?>

