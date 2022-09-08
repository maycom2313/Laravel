<?php 
require_once('db.class.php');
 $usuario = $_POST['usuario'];
 $email = $_POST['email'];
 $senha = md5($_POST['senha']);

$objBD = new Db();
$link = $objBD->conecta_mysql();

$sql = "insert into usuarios(usuario, email, senha) value('$usuario', '$email', '$senha')"; 

if(mysqli_query($link, $sql)){
    echo "usuário registrado com sucesso!";
}else{
    echo "erro ao registrar o usuário :(";
}

?>