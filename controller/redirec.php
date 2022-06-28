<?php
session_start();
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
		?>
		<script type="text/javascript">
			window.location.href = '../index.php?mensaje=Error: Cedula y/o Contraseña incorrecta';
		</script>
		<?php
		break;
	}
?>
