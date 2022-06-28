<form id="contact-form" action="../../controller/guardar_usuarios.php" method="POST">
  <div class="row" >
    <div class="col-md-8 col-xl-9 carta-top"><br>
      <h3 align="center">Registrar un Usuario</h3>
      <div class="row">
        <div class="col-md-12">
         <div class="md-form">
          <label>Ingrese la Cedula:</label>
          <input type="text" class="form-control" placeholder="Cedula..." name="cedula" onkeyup="this.value=Numeros(this.value)" required>
          	<br>
          <label>Ingrese el primer nombre:</label>
          <input type="text" class="form-control" placeholder="Primer nombre..." name="pri_nombre" onkeyup="this.value=Nom(this.value)" required>
          	<br>
          <label>Ingrese el segundo nombre:</label>
          <input type="text" class="form-control" placeholder="Segundo nombre..." name="seg_nombre" onkeyup="this.value=Nom(this.value)" required>
         	 <br>
          <label>Ingrese los apellidos:</label>
          <input type="text" class="form-control" placeholder="Apellidos..." name="apellidos" onkeyup="this.value=Nom(this.value)" required>
         	 <br>
          <label>Ingrese la dirección:</label>
          <input type="text" class="form-control" placeholder="Direccion..." name="direccion" onkeyup="this.value=Calle(this.value)" required>
         	 <br>
          <label>Ingrese el telefono:</label>
         	 <input type="text" class="form-control" placeholder="Telefono..." name="telefono" onkeyup="this.value=Numeros(this.value)" required>
          <br>
          <label>Ingrese una ciudad:</label>
          <input type="text" class="form-control" placeholder="Ciudad..." name="ciudad" onkeyup="this.value=Calle(this.value)" required>
         	 <br>
		  <label>Ingrese la contraseña:</label>
          <input type="password" class="form-control" placeholder="Contraseña..." name="contrasena" onkeyup="this.value=Calle(this.value)" required>
         	 <br>
     
          <input  name="fecha_registro"  hidden value="<?php echo date("Y/m/d");?>"> 
          <button class="btn btn-success float-right">¡Guardar vehiculo!</button>
        </div>
      </div>
    </div>
    <br>
  </div>
</div>  
</form>


<script type="text/javascript">
  function Numeros(string){
    var out = '';
    var filtro = '1234567890';//Caracteres validos

    for (var i=0; i<string.length; i++)
     if (filtro.indexOf(string.charAt(i)) != -1) 
       out += string.charAt(i);
     return out;
   } 

   function Nom(string){
    var out = '';
    var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ ';

    for (var i=0; i<string.length; i++)
     if (filtro.indexOf(string.charAt(i)) != -1) 
       out += string.charAt(i);
     return out;
   }
     function Calle(string){
    var out = '';
    var filtro = '1234567890abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ ';

    for (var i=0; i<string.length; i++)
     if (filtro.indexOf(string.charAt(i)) != -1) 
       out += string.charAt(i);
     return out;
   }
 </script>

