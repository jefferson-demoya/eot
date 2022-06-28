<?php
$nombre = $_SESSION['pri_nombre'] ." ". $_SESSION['seg_nombre'] ." ". $_SESSION['apellidos'];

 $Particulares = current($DB->query("SELECT COUNT(id) FROM `tb_vehiculos` WHERE tipo_vehiculo='particular'")->fetch());
 $Publicos = current($DB->query("SELECT COUNT(id) FROM `tb_vehiculos` WHERE tipo_vehiculo='publico'")->fetch());
 $Chevrolets = current($DB->query("SELECT COUNT(id) FROM `tb_vehiculos` WHERE marca='chevrolet'")->fetch());
 $Renaults = current($DB->query("SELECT COUNT(id) FROM `tb_vehiculos` WHERE marca='renault'")->fetch());
 $otros = current($DB->query("SELECT COUNT(id) FROM `tb_vehiculos` WHERE marca='otros'")->fetch());
?>