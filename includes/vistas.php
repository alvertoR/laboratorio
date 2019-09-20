<?php

include_once 'db.php';

class Vistas extends DB{

    public function showTypeCar(){
        return $this->connect()->query('select distinct tipocarro from muestra order by tipocarro asc');
    }

    public function showTypeCarColor(){
        return $this->connect()->query('select distinct colorcarro from muestra order by colorcarro asc');
    }

    public function showTypeRace(){
        return $this->connect()->query('select distinct raza from muestra order by raza asc');
    }

    public function showTypeGender(){
        return $this->connect()->query('select distinct genero from muestra order by genero asc');
    }

    public function showTypeState(){
        return $this->connect()->query('select distinct estadocarro from muestra order by estadocarro asc');
    }
    

}

?>