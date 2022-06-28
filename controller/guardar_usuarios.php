<?php  
require 'dbc.php';
$contrasena = $_POST['contrasena'];
$cedula_ver = $_POST['cedula'];

$registro=$DB->prepare("select * from tb_users where cedula=:cedula");
$registro->execute(array(':cedula'=>$cedula_ver));
$reg=$registro->fetch();
if($reg != false){
	?><script>
alert('La cedula  ingresada ya se encuentra registrada, por favor ingrese otra.');
window.location.href = 'redirec.php';
</script>";
<?php
}

else {

//cifrado
	$pass_cifrada = password_hash($contrasena, PASSWORD_DEFAULT, array("cost"=>15));

	if ($DB == true) {

		$insert = $DB->prepare("INSERT INTO tb_users 
			(fecha_registro, pri_nombre, seg_nombre, cedula, direccion, contrasena, ciudad, telefono, rol) 
			VALUES 
			(:fecha_registro, :pri_nombre, :seg_nombre, :cedula, :direccion, :contrasena, :ciudad, :telefono, '1' )");

//insertar campos
        $insert->bindParam(':fecha_registro', $_POST['fecha_registro']);
		$insert->bindParam(':pri_nombre', $_POST['pri_nombre']);
		$insert->bindParam(':seg_nombre', $_POST['seg_nombre']);
		$insert->bindParam(':cedula', $_POST['cedula']);
		$insert->bindParam(':direccion', $_POST['direccion']);
		$insert->bindParam(':contrasena', $pass_cifrada);
		$insert->bindParam(':ciudad', $_POST['ciudad']);
		$insert->bindParam(':telefono', $_POST['telefono']);


		$insert->execute();
		$DB = null;
		?><script>
alert('Usted ha registrado correctamente un nuevo usuario.');
window.location.href = 'redirec.php';
</script>"
<?php
	} else {
		echo "Error al procesar recurso";
	}

}



?>