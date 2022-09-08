<?php
session_start();
use phpDocumentor\Reflection\Location;
require_once('db.class.php');
$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

$objDb = new Db();
$link = $objDb->conecta_mysql();
$sql = "select * from usuarios WHERE usuario = '$usuario' && senha = '$senha'";

$resultado_id = mysqli_query($link, $sql);

if($resultado_id){

    $dados_usuario = mysqli_fetch_array($resultado_id);

    if(isset($dados_usuario['usuario'])){
        $_SESSION['usuario'] = $dados_usuario['usuario'];
        $_SESSION['email'] = $dados_usuario['email'];
        header('Location: home.php');
    }else{
        header('location: index.php?erro=1');
    }

}else{
    echo "erro na execução da consulta";
}

?>