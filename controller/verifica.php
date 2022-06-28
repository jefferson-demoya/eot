<?php
include 'dbc.php';
session_start();
if (isset($_SESSION['id'])){header("Location:../index.php");}
try {
	$cedula=htmlentities(addslashes($_POST['cedula']));
	$contrasena=htmlentities(addslashes($_POST['contrasena']));
	$contador = 0;//variable auxiliar para comprobar que el usuario existe o no
	$sql = "SELECT * FROM tb_users WHERE cedula = :cedula";
	$resultado=$DB->prepare($sql);
	$resultado->execute(array(":cedula"=>$cedula));	
	while($login=$resultado->fetch(PDO::FETCH_ASSOC)) {
		//traemos los valores de la bd
		$id=$login['id'];
		$cedula=$login['cedula'];
		$pri_nombre=$login['pri_nombre'];
		$seg_nombre=$login['seg_nombre'];
		$apellidos=$login['apellidos'];
		$direccion=$login['direccion'];
		$telefono=$login['telefono'];
		$ciudad=$login['ciudad'];
		$rol=$login['rol'];


		//crea la session y datos para la session
		//rellenamos los valores vacios
		$_SESSION['id']=$id;
		$_SESSION['cedula']=$cedula;
		$_SESSION['pri_nombre']=$pri_nombre;
		$_SESSION['seg_nombre']=$seg_nombre;
		$_SESSION['apellidos']=$apellidos;
		$_SESSION['direccion']=$direccion;
		$_SESSION['telefono']=$telefono;
		$_SESSION['ciudad']=$ciudad;
		$_SESSION['rol']=$rol;

		if(password_verify($contrasena, $login['contrasena'])) {
			$contador++; //+1
		}
	}

	//si es mayor a cero = +1  entonces el usuario existe
	if ($contador>0) {
	// si existe: valor del rol = sesion
		switch ($_SESSION['rol']) {
			case '1':
			?>
			<script type="text/javascript">
			window.location.href = '../r/a/index.php';
			</script>
			<?php
			break;
			case '2':
			?>
			<script type="text/javascript">
			window.location.href = '../r/a/index.php';
			</script>
			<?php
			break;
			default:
			session_start();
			session_destroy();
			?>
			<script type="text/javascript">
			window.location.href = '../index.php?mensaje=Error: Cedula y/o Contraseña incorrecta';
			</script>
			<?php
			break;
		}
	} 
	else
	{	
		?>
		<script type="text/javascript">
		window.location.href = '../index.php?mensaje=Error: Es probable que la cédula no exista o los datos estén mal escritos.';
		</script>
		<?php
	}

	//cierre de la conexion
	$conexion = null;
}
catch(Exception $e) 
{
	die($e->getMessage());
}
?>	