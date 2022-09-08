<?php
require_once('db.class.php');

$sql = "select * from usuarios";
$objDb = new Db();
$link = $objDb->conecta_mysql();


$resultado_id = mysqli_query($link, $sql);

if($resultado_id){
    $dados_usuario = array();

    while($linha = mysqli_fetch_array($resultado_id)){

        $dados_usuario[] = $linha;
    }

    foreach($dados_usuario as $usuario){
        echo $usuario['email'];
        echo '<br><br/>';
    }

}else{
    echo 'erro na conexão';
}

?>