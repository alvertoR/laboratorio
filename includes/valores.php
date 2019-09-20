<?php

include_once 'db.php';

class Valores extends DB{
    private $tipoVehiculo;
    private $color;
    private $raza;
    private $genero;
    private $estado;

    public function setTipoVehiculo($tipoVehiculo){
        $this->tipoVehiculo = $tipoVehiculo;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setRaza($raza){
        $this->raza = $raza;
    }

    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getTipoVehiculo(){
        return $this->tipoVehiculo;
    }

    public function getColor(){
        return $this->color;
    }

    public function getRaza(){
        return $this->raza;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function getEstado(){
        return $this->estado;
    }

    //Se haya la cantidad de infracciones totales dependiendo del tipo de infracción.
    public function cantidadInfraccion($infraccion){
        $query = $this->connect()->query("select count(*) as valor from muestra where tipoviolacion = '$infraccion' ");
        return $query->fetch(PDO::FETCH_OBJ)->valor;
    }

    //Se haya la cantidad total de infracciones dependiendo del tipo de vehiculo y el tipo de infracción.
    public function multaTipoCarro($warning){
        $query = $this->connect()->prepare("select count(*) as valor from muestra where tipocarro =:tipocarro and tipoviolacion = '$warning' ");
        $query->execute([':tipocarro'=>$this->tipoVehiculo]);
        return $query->fetch(PDO::FETCH_OBJ)->valor;
    }

    //Se haya la cantidad total de infracciones dependiendo del color del vehiculo y el tipo de infracción.
    public function multaColorCarro($warning){
        $query = $this->connect()->prepare("select count(*) as valor from muestra where colorcarro =:colorcarro and tipoviolacion = '$warning' ");
        $query->execute([':colorcarro'=>$this->color]);
        return $query->fetch(PDO::FETCH_OBJ)->valor;
    }

    //Se haya la cantidad total de infracciones dependiendo de la raza del conductor y el tipo de infracción. 
    public function multaRaza($warning){
        $query = $this->connect()->prepare("select count(*) as valor from muestra where raza =:raza and tipoviolacion = '$warning' ");
        $query->execute([':raza'=>$this->raza]);
        return $query->fetch(PDO::FETCH_OBJ)->valor;
    }

    //Se haya la cantidad total de infracciones dependiendo del genero del conductor y el tipo de infracción. 
    public function multaGenero($warning){
        $query = $this->connect()->prepare("select count(*) as valor from muestra where genero =:genero and tipoviolacion = '$warning' ");
        $query->execute([':genero'=>$this->genero]);
        return $query->fetch(PDO::FETCH_OBJ)->valor;
    }

    //Se haya la cantidad total de infracciones dependiendo del estado del vehiculo del conductor y el tipo de infracción. 
    public function multaEstado($warning){
        $query = $this->connect()->prepare("select count(*) as valor from muestra where estadocarro =:estadocarro and tipoviolacion = '$warning' ");
        $query->execute([':estadocarro'=>$this->estado]);
        return $query->fetch(PDO::FETCH_OBJ)->valor;
    }      
}
?>