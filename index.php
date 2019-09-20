<?php include_once 'vistas/header.php'; ?>
<?php include_once 'includes/vistas.php'; 
$view = new Vistas();

$tipocarro = $view->showTypeCar();
$colorcarro = $view->showTypeCarColor();
$raza = $view->showTypeRace();
$genero = $view->showTypeGender();
$estado = $view->showTypeState();
?>
    <form method="POST" action="result.php">
        <h1>Información del Sujeto</h1>
        <select name="tipovehiculo">
            <option value="">Tipo Vehiculo</option>
            <?php 
            foreach($tipocarro as $tipo){
                include 'vistas/show_list_car.php';
            }
            ?>
        </select>

        <select name="color">
            <option value="">Color Vehiculo</option>
            <?php         
            foreach($colorcarro as $color){
                include 'vistas/show_list_color.php';
            }
            ?>
        </select>

        <select name="raza">
            <option value="">Raza Conductor</option>
            <?php         
            foreach($raza as $razas){
                include 'vistas/show_list_raza.php';
            }
            ?>
        </select>

        <select name="genero">
            <option value="">Genero Conductor</option>
            <?php         
            foreach($genero as $generos){
                include 'vistas/show_list_genero.php';
            }
            ?>
        </select>

        <select name="estado">
            <option value="">Estado Vehiculo</option>
            <?php         
            foreach($estado as $estados){
                include 'vistas/show_list_estado.php';
            }
            ?>
        </select>
        <input type="submit" value="Send" class="btn">
    </form>
    
<?php include_once 'vistas/footer.php'; ?>
