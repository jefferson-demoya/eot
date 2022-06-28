<?php  
require 'dbc.php';

if ($DB == true) {
  
$insert = $DB->prepare("INSERT INTO tb_vehiculos
                (placa, color, marca, tipo_vehiculo, conductor_id, propietario_id, fecha_creado) 
        VALUES (:placa, :color, :marca, :tipo_vehiculo, :conductor_id, :propietario_id, :fecha_creado)");

//insertar campos
$insert->bindParam(':placa', $_POST['placa']);
$insert->bindParam(':color', $_POST['color']);
$insert->bindParam(':marca', $_POST['marca']);
$insert->bindParam(':tipo_vehiculo', $_POST['tipo_vehiculo']);
$insert->bindParam(':conductor_id', $_POST['conductor_id']);
$insert->bindParam(':propietario_id', $_POST['propietario_id']);
$insert->bindParam(':fecha_creado', $_POST['fecha_creado']);

$insert->execute();
//cierre conex
$DB = null;

//redirex


?>
<script>
alert('Vehiculo registrado correctamente.');
window.location.href = 'redirec.php';
</script>
<?php
} else {
echo "Error al procesar recurso";
}
?>