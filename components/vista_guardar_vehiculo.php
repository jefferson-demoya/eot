<form id="contact-form" action="../../controller/registro_carro.php" method="POST">
  <div class="row" >
    <div class="col-md-8 col-xl-9 carta-top"><br>
      <h3 align="center">Registrar un vehiculo</h3>
      <div class="row">
        <div class="col-md-12">
         <div class="md-form">
          <label>Escriba la placa del vehiculo:</label>
          <input type="text" class="form-control" placeholder="placa..." name="placa" required>
          <br>
          <label>Escriba el color del vehiculo:</label>
          <input type="text" class="form-control" placeholder="color..." name="color" required>
          <br>
          <label>Escriba la marca del vehiculo:</label>
          <input type="text" class="form-control" placeholder="marca..." name="marca" required>
          <br>
          <label>Seleccione el tipo del vehiculo:</label>
          <select class="form-control" name="tipo_vehiculo">
              <option value="particular">Particular</option>
              <option value="publico">Público</option>
          </select>
          <br>
          <label>Seleccione un propietario del vehiculo:</label>
          <select class="form-control" name="propietario_id">
            <?php
            $query = $DB->prepare("SELECT * FROM tb_users");
            $query->execute();
            $data = $query->fetchAll();
            foreach ($data as $valores):
            echo '<option value="'.$valores["id"].'">' .$valores["pri_nombre"]. ' ' .$valores["seg_nombre"]. ' ' .$valores["apellidos"].'</option>';
            endforeach;
            ?>
          </select><br>
          <label>Seleccione un conductor para el vehiculo:</label>
          <select class="form-control" name="conductor_id">
            <?php
            $query = $DB->prepare("SELECT * FROM tb_users");
            $query->execute();
            $data = $query->fetchAll();
            foreach ($data as $valores):
            echo '<option value="'.$valores["id"].'">' .$valores["pri_nombre"]. ' ' .$valores["seg_nombre"]. ' ' .$valores["apellidos"].'</option>';
            endforeach;
            ?>
          </select><br>
          <input  name="fecha_creado"  hidden value="<?php echo date("Y/m/d");?>"> 
          <button class="btn btn-success float-right">¡Guardar vehiculo!</button>
        </div>
      </div>
    </div>
    <br>
  </div>
</div>  
</form>
