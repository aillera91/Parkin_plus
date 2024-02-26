<?php
$nombrePagina = "Nuevo Ingreso";
include 'plantilla.php';
include 'header.php';

//verficar si se a enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipoVehiculo = $_POST["tipoVehiculo"];
    $marca = $_POST["marca"];
    $color = $_POST["color"];
    $placa = $_POST["placa"];
    $observaciones = $_POST["observaciones"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $basedatos = "parking_plus_db";

    $conexion = new mysqli($servername, $username, $password, $basedatos);

    if ($conexion->connect_error) {
        die("La conexion a la base de datos tuvo un error: " . $conexion->connect_error);
    }

    $insertar = "INSERT INTO vehiculos (tipoVehiculo, marca, color, placa, observaciones)
    values  ('$tipoVehiculo','$marca', '$color', '$placa', '$observaciones' )";

    if ($conexion->query($insertar) === TRUE) {
        echo "Registro insertado Correctamente";
    } else {
        echo "Error: " . $insertar . "<br>" . $conexion->error;
    }

    $conexion->close();
}

?>

<div class="contenedor-nuevo-ingreso">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="nuevoIngreso" method="post">
        <h3>Informacion del Vehiculo</h3>

        <div class="control-form">
            <label>Tipo Vehiculo</label>
            <select name="tipoVehiculo">
                <option value="carro">Carro</option>
                <option value="moto">Moto</option>
                <option value="otro">Otro</option>
            </select>
        </div>
        <div class="control-form">
            <label>Marca:</label>
            <input type="text" id="marca" name="marca">
        </div>
        <div class="control-form">
            <label>Color:</label>
            <input type="text" id="color" name="color">
        </div>
        <div class="control-form">
            <label>Placa</label>
            <input type="text" id="placa" name="placa">
        </div>
        <div class="control-form">
            <label>Observaciones:</label>
            <input type="text" id="observaciones" name="observaciones">
        </div>
        <button class="botonNuevoVehiculo" type="submit">Ingresar Vehiculo</button>
    </form>
</div>

<?php include 'footer.php'; ?>