<?php

class DB{

    private $DBname;
    private $user;
    private $password;
    private $host;
    private $port;

    function __construct(){

        $this->DBname = "multas";
        $this->user = "postgres";
        $this->password = "mineria";
        $this->host = "localhost";
        $this->port = "5432";
    }

    function connect(){
        try{

            $conexion = "pgsql:host=".$this->host.';port='.$this->port.';dbname='.$this->DBname;

            $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                       PDO::ATTR_EMULATE_PREPARES => false];
        
            $pdo = new PDO($conexion,$this->user,$this->password,$option);

            return $pdo;

        }catch(PDOException $e){

            print_r("Error conexion...".$e->getMessage());

        }
    }

}

?>