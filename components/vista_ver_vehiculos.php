
<div align="left">	
	<div class="notice notice-info">
		<i class="datos1">Vehiculos particulares<?php echo ": " .$Particulares; ?></i> <i class="fa-solid fa-grip-lines-vertical"></i>
		<i class="datos2"> Vehiculos publicos<?php echo ": " .$Publicos; ?></i> <i class="fa-solid fa-grip-lines-vertical"></i>
		<i class="datos3"> Chevrolets registrados<?php echo ": " .$Chevrolets; ?></i> <i class="fa-solid fa-grip-lines-vertical"></i>
		<i class="datos4"> Renaults registrados<?php echo ": " .$Renaults; ?> </i><i class="fa-solid fa-grip-lines-vertical"></i>
		<i class="datos5"> Otros<?php echo ": " .$otros; ?> </i><i class="fa-solid fa-grip-lines-vertical"></i>
	</div> 
</div>
  <table class="table table-responsive table-striped">
    <thead>
      <tr>		<th>Propietario</th>
				<th>Placa</th>
				<th>Color</th>
				<th>Marca</th>
				<th>Tipo de vehiculo</th>
				<th>Conductor</th>
				<th>Fecha de registro</th>
				<th> </th>
			</tr>
    </thead>
    <tbody id="myTable">
     	<?php foreach ($DB->query('SELECT * ,(SELECT pri_nombre
           FROM tb_users WHERE propietario_id = tb_users.ID)Propietario1,
		   (SELECT seg_nombre
           FROM tb_users WHERE propietario_id = tb_users.ID)Propietario2,
           (SELECT apellidos
           FROM tb_users WHERE propietario_id = tb_users.ID)Propietario3,
           (SELECT pri_nombre
           FROM tb_users WHERE conductor_id = tb_users.ID)Conductor1,
		   (SELECT seg_nombre
           FROM tb_users WHERE conductor_id = tb_users.ID)Conductor2,
           (SELECT apellidos
           FROM tb_users WHERE conductor_id = tb_users.ID)Conductor3
  			FROM tb_vehiculos') as $row){  
     		$Propietario = $row['Propietario1'] .' '. $row['Propietario2'] .' '. $row['Propietario3'];
     		$Conductor = $row['Conductor1'] .' '. $row['Conductor2'] .' '. $row['Conductor3'];
  				?> 
			<tr>
				<td><?php echo $Propietario ?></td>
				<td><?php echo $row['placa'] ?></td>
				<td><?php echo $row['color'] ?></td>
				<td><?php echo $row['marca'] ?></td>
				<td><?php echo $row['tipo_vehiculo'] ?></td>
				<td><?php echo $Conductor ?></td>
				<td><?php echo $row['fecha_creado'] ?></td>
			</tr>
			<?php
		}
		?>
    </tbody>
  </table>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
