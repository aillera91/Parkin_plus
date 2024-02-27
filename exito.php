<?php
$nombrePagina = "Ingreso Correcto";
include "plantilla.php";
include "header.php";
?>

<div class="mensaje-exito">
    <h3>Ingreso Ok del vehiculo</h3>
    <p>El nuevo vehiculo ha sido ingresado correctamente</p>
</div>

<?php include 'footer.php'; ?>

<script>
    setTimeout (function (){
        window.location.href = "nuevoIngreso.php";
    },2000);
</script>