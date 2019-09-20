<?php

include_once 'includes/valores.php';
include_once 'includes/calculos.php';

if(isset($_POST['tipovehiculo'])){

  
    $warning = "Warning";
    $citation = "Citation";
    $esero = "ESERO";
    $sero = "SERO";

    $tipoVehiculo = $_POST['tipovehiculo'];
    $colorVehiculo = $_POST['color'];
    $razaConductor = $_POST['raza'];
    $generoConductor = $_POST['genero'];
    $estadoVehiculo = $_POST['estado'];

    $calcular = new Valores();
    $valores = new Calculos();

    //envio de los datos
    $calcular->setTipoVehiculo($tipoVehiculo);
    $calcular->setColor($colorVehiculo);
    $calcular->setRaza($razaConductor);
    $calcular->setGenero($generoConductor);
    $calcular->setEstado($estadoVehiculo);

    //Se obtienen los datos de las infracciones dependiendo de su tipo
    $TotalWarning = $calcular->cantidadInfraccion($warning);
    $TotalCitation = $calcular->cantidadInfraccion($citation);
    $TotalEsero = $calcular->cantidadInfraccion($esero);
    $TotalSero = $calcular->cantidadInfraccion($sero);
    $TotalInfracciones = $TotalWarning + $TotalCitation + $TotalEsero + $TotalSero;

    $valores->setTotalInfraccionWar($TotalWarning);
    $valores->setTotalInfraccionCita($TotalCitation);
    $valores->setTotalInfraccionSero($TotalSero);
    $valores->setTotalInfraccionEsero($TotalEsero);
    $valores->settotalInfracciones($TotalInfracciones);

    //Se obtienen los datos de las infracciones Warning dependiendo del tipo de vehiculo,color del vehiculo,raza,genero,estado
    $tipoVehiculoWar = $calcular->multaTipoCarro($warning);
    $colorVehiculoWar = $calcular->multaColorCarro($warning);
    $razaConductorWar = $calcular->multaRaza($warning);
    $generoConductorWar = $calcular->multaGenero($warning);
    $estadoVehiculoWar = $calcular->multaEstado($warning);

    $valores->setInfraccionTipoVeh($tipoVehiculoWar);
    $valores->setInfraccionColorVeh($colorVehiculoWar);
    $valores->setInfraccionRazaCon($razaConductorWar);
    $valores->setInfraccionGeneroCon($generoConductorWar);
    $valores->setInfraccionEstadoVeh($estadoVehiculoWar);

    $porcentajeWar = $valores->calcularPorcentajeWar();
 
    //Se obtienen los datos de las infracciones Citation dependiendo del tipo de vehiculo,color del vehiculo,raza,genero,estado
    $tipoVehiculoCit = $calcular->multaTipoCarro($citation);
    $colorVehiculoCit = $calcular->multaColorCarro($citation);
    $razaConductorCit = $calcular->multaRaza($citation);
    $generoConductorCit = $calcular->multaGenero($citation);
    $estadoVehiculoCit = $calcular->multaEstado($citation);

    $valores->setInfraccionTipoVeh($tipoVehiculoCit);
    $valores->setInfraccionColorVeh($colorVehiculoCit);
    $valores->setInfraccionRazaCon($razaConductorCit);
    $valores->setInfraccionGeneroCon($generoConductorCit);
    $valores->setInfraccionEstadoVeh($estadoVehiculoCit);

    $porcentajeCit = $valores->calcularPorcentajeCita();

    //Se obtienen los datos de las infracciones SERO dependiendo del tipo de vehiculo,color del vehiculo,raza,genero,estado
    $tipoVehiculoSero = $calcular->multaTipoCarro($sero);
    $colorVehiculoSero = $calcular->multaColorCarro($sero);
    $razaConductorSero = $calcular->multaRaza($sero);
    $generoConductorSero = $calcular->multaGenero($sero);
    $estadoVehiculoSero = $calcular->multaEstado($sero);
    

    $valores->setInfraccionTipoVeh($tipoVehiculoSero);
    $valores->setInfraccionColorVeh($colorVehiculoSero);
    $valores->setInfraccionRazaCon($razaConductorSero);
    $valores->setInfraccionGeneroCon($generoConductorSero);
    $valores->setInfraccionEstadoVeh($estadoVehiculoSero);

    $porcentajeSero = $valores->calcularPorcentajeSero();

    //Se obtienen los datos de las infracciones ESERO dependiendo del tipo de vehiculo,color del vehiculo,raza,genero,estado
    $tipoVehiculoEsero = $calcular->multaTipoCarro($esero);
    $colorVehiculoEsero = $calcular->multaColorCarro($esero);
    $razaConductorEsero = $calcular->multaRaza($esero);
    $generoConductorEsero = $calcular->multaGenero($esero);
    $estadoVehiculoEsero = $calcular->multaEstado($esero);

    $valores->setInfraccionTipoVeh($tipoVehiculoEsero);
    $valores->setInfraccionColorVeh($colorVehiculoEsero);
    $valores->setInfraccionRazaCon($razaConductorEsero);
    $valores->setInfraccionGeneroCon($generoConductorEsero);
    $valores->setInfraccionEstadoVeh($estadoVehiculoEsero);

    $porcentajeEsero = $valores->calcularPorcentajeEsero();


    $finalPorcentajeWar = (($porcentajeWar/($porcentajeWar+$porcentajeCit+$porcentajeEsero+$porcentajeSero))*100);
    
    $finalPorcentajeCiti = (($porcentajeCit/($porcentajeWar+$porcentajeCit+$porcentajeEsero+$porcentajeSero))*100);

    $finalPorcentajeSero = (($porcentajeSero/($porcentajeWar+$porcentajeCit+$porcentajeEsero+$porcentajeSero))*100);

    $finalPorcentajeEsero = (($porcentajeEsero/($porcentajeWar+$porcentajeCit+$porcentajeEsero+$porcentajeSero))*100);
  
}

if(isset($_POST['yes'])){
    header('location: index.php');
}
?>

<?php include_once 'vistas/header.php'; ?>

<div class="result">
    <h2>Resultados</h2>
    <p>La probabilidad de que usted obtenga una multa de tipo Warning es : <?php echo $finalPorcentajeWar ?> </p>
    <p>La probabilidad de que usted obtenga una multa de tipo Citation es de : <?php echo $finalPorcentajeCiti ?> </p>
    <p>La probabilidad de que usted obtenga una multa de tipo Sero es de : <?php echo $finalPorcentajeSero ?> </p>
    <p>La probabilidad de que usted obtenga una multa de tipo Esero es de : <?php echo $finalPorcentajeEsero ?> </p>
    <form method="POST" class="form-result" action="#">
    <button name="yes" class="btn">Cool</button>
    <form>
</div>

<?php include_once 'vistas/footer.php'; ?>