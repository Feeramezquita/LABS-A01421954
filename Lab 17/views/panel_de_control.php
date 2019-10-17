<?php 
    include("../sections/_header_cliente.php")
?>

<!-- Incluir estilos css -->
<style>
    <?php include '../css/style.css'; ?>
</style>

<div style="margin: 10vh;">
    <?php
    date_default_timezone_set('America/Mexico_City');
    $bMeses = array("void","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    $bDias = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
    $fecha = getdate();
    $dias = $bDias[$fecha["wday"]];
    $meses = $bMeses[$fecha["mon"]];
    $rol = "Usuario";
    echo "<div class='fecha center-align'>".$dias." ".$fecha["mday"]." ".$meses." ".$fecha["year"].
    "<br>".$fecha["hours"]." : ".$fecha["minutes"]." : ".$fecha["seconds"].
    "<br>Bienvenido".
    "<br>".$rol."</div>";
    ?>
</div>