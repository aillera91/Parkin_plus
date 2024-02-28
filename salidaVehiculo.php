<?php
$nombrePagina = "Parqueados";
include "plantilla.php";
include "header.php";
?>
<div class="contenedor-salida-vehiculo">
    <h3>Salida del Vehiculo</h3>
    <div class="buscador">
        <label style="margin-top: 15px;">Placa:</label>
        <input type="text" placeholder="Ingresa la placa del vehiculo">
        <button>Buscar</button>
    </div>
    <div class="informacion">
        <div class = "izquierda">Vehiculo</div>
        <div class = "derecha disenoPlaca">ABC123</div>
        <div class = "izquierda">Fecha y Hora de Infreso</div>
        <div class = "derecha">12/02/2024 - 16:30</div>
        <div class = "izquierda">Tiempo Consumido</div>
        <div class = "derecha">0 Hora, 23 min; 09 seg</div>
        <div class = "izquierda">Total a pagar</div>
        <div class = "derecha">$1500 COP</div>
    </div>
    <div class="botones-acciones">
        <button class="btnAccion btnCobrar">Cobrar</button>
        <button class="btnAccion btnCancelar">Cancelar</button>
    </div>
</div>

<?php include "footer.php";