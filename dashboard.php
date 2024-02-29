<?php
$nombrePagina = "Dashboard";
include 'plantilla.php';
include 'header.php';
?>


<div class="cuadricula">
    <div class="boton">
        <a href="nuevoingreso.php">
            <div class="boton-menu">
                <i class="fa-solid fa-circle-plus"></i>
            </div>
        </a>
        <h3>Nuevo Ingreso</h3>
    </div>

    <div class="boton">
        <a href="salidaVehiculo.php">
            <div class="boton-menu">
                <i class="fa-solid fa-angles-right"></i>
            </div>
        </a>
        <h3>Salida Vehiculos</h3>
    </div>
    <div class="boton">
        <a href="parqueados.php">
            <div class="boton-menu">
                <i class="fa-solid fa-car-side"></i>
            </div>

        </a>
        <H3>Parqueados</H3>
    </div>
    <div class="boton">
        <a href="reportediario.php">
            <div class="boton-menu">
                <i class="fa-solid fa-chart-line"></i>
            </div>

        </a>
        <H3>Reporte Diario</H3>
    </div>
</div>

<?php include 'footer.php'; ?>