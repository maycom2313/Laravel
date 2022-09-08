<?php
class Db{

    private $host = 'localhost';
    private $user = 'root';
    private $senha = 'root123';
    private $database = 'twitter_clone';

    public function conecta_mysql(){
        $con = mysqli_connect($this->host, $this->user, $this->senha, $this->database);

        mysqli_set_charset($con, 'utf8');

        if(mysqli_connect_errno()){
            echo "erro ao tentar se conectar ao BD MySQL: ".  mysqli_connect_error();   
           }
           return $con;
    }
}

?>