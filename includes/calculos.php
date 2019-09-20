<?php

class Calculos{
    private $totalInfracciones;
    private $totalInfraccionWar;
    private $totalInfraccionCita;
    private $totalInfraccionSero;
    private $totalInfraccionEsero;
    private $infraccionTipoVehiculo;
    private $infraccionColorVehiculo;
    private $infraccionRazaConductor;
    private $infraccionGeneroConductor;
    private $infraccionEstadoVehiculo;

    public function setTotalInfracciones($totalInfracciones){
        $this->totalInfracciones = $totalInfracciones;
    }

    public function setTotalInfraccionWar($totalInfraccionWar){
        $this->totalInfraccionWar = $totalInfraccionWar;
    }

    public function setTotalInfraccionCita($totalInfraccionCita){
        $this->totalInfraccionCita = $totalInfraccionCita;
    }

    public function setTotalInfraccionSero($totalInfraccionSero){
        $this->totalInfraccionSero = $totalInfraccionSero;
    }

    public function setTotalInfraccionEsero($totalInfraccionEsero){
        $this->totalInfraccionEsero = $totalInfraccionEsero;
    }

    public function setInfraccionTipoVeh($infraccionTipoVehiculo){
        $this->infraccionTipoVehiculo = $infraccionTipoVehiculo;
    }

    public function setInfraccionColorVeh($infraccionColorVehiculo){
        $this->infraccionColorVehiculo = $infraccionColorVehiculo;
    }

    public function setInfraccionRazaCon($infraccionRazaConductor){
        $this->infraccionRazaConductor = $infraccionRazaConductor;
    }

    public function setInfraccionGeneroCon($infraccionGeneroConductor){
        $this->infraccionGeneroConductor = $infraccionGeneroConductor;
    }

    public function setInfraccionEstadoVeh($infraccionEstadoVehiculo){
        $this->infraccionEstadoVehiculo = $infraccionEstadoVehiculo;
    }



    public function calcularPorcentajeWar(){
        $tipoVehi   = ($this->infraccionTipoVehiculo / $this->totalInfraccionWar);
        $colorVehi  = ($this->infraccionColorVehiculo / $this->totalInfraccionWar);
        $razaCon    = ($this->infraccionRazaConductor / $this->totalInfraccionWar);
        $generoCon  = ($this->infraccionGeneroConductor / $this->totalInfraccionWar);
        $estadoVehi = ($this->infraccionEstadoVehiculo / $this->totalInfraccionWar);
        $promedioMulta = ($this->totalInfraccionWar / $this->totalInfracciones);
        
        $porcentaje = (($tipoVehi * $colorVehi * $razaCon * $generoCon * $estadoVehi) * $promedioMulta);

        return $porcentaje;
    }

    public function calcularPorcentajeCita(){
        $tipoVehi   = ($this->infraccionTipoVehiculo / $this->totalInfraccionCita);
        $colorVehi  = ($this->infraccionColorVehiculo / $this->totalInfraccionCita);
        $razaCon    = ($this->infraccionRazaConductor / $this->totalInfraccionCita);
        $generoCon  = ($this->infraccionGeneroConductor / $this->totalInfraccionCita);
        $estadoVehi = ($this->infraccionEstadoVehiculo / $this->totalInfraccionCita);
        $promedioMulta = ($this->totalInfraccionCita / $this->totalInfracciones);
        
        $porcentaje = (($tipoVehi * $colorVehi * $razaCon * $generoCon * $estadoVehi) * $promedioMulta);

        return $porcentaje;
    }

    public function calcularPorcentajeSero(){
        $tipoVehi   = ($this->infraccionTipoVehiculo / $this->totalInfraccionSero);
        $colorVehi  = ($this->infraccionColorVehiculo / $this->totalInfraccionSero);
        $razaCon    = ($this->infraccionRazaConductor / $this->totalInfraccionSero);
        $generoCon  = ($this->infraccionGeneroConductor / $this->totalInfraccionSero);
        $estadoVehi = ($this->infraccionEstadoVehiculo / $this->totalInfraccionSero);
        $promedioMulta = ($this->totalInfraccionSero / $this->totalInfracciones);
        
        $porcentaje = (($tipoVehi * $colorVehi * $razaCon * $generoCon * $estadoVehi) * $promedioMulta);

        return $porcentaje;
    }

    public function calcularPorcentajeEsero(){
        $tipoVehi   = ($this->infraccionTipoVehiculo / $this->totalInfraccionEsero);
        $colorVehi  = ($this->infraccionColorVehiculo / $this->totalInfraccionEsero);
        $razaCon    = ($this->infraccionRazaConductor / $this->totalInfraccionEsero);
        $generoCon  = ($this->infraccionGeneroConductor / $this->totalInfraccionEsero);
        $estadoVehi = ($this->infraccionEstadoVehiculo / $this->totalInfraccionEsero);
        $promedioMulta = ($this->totalInfraccionEsero / $this->totalInfracciones);
        
        $porcentaje = (($tipoVehi * $colorVehi * $razaCon * $generoCon * $estadoVehi) * $promedioMulta);

        return $porcentaje;
    }
}
?>