<div class="content">
<div class="row">
          <div class="col-md-12">
            <div class="card card-user">
             
              <div class="card-body">
              <div class="row">
		<div class="col-xs-12 col-xs-12">
			<?php if(isset($_GET['info'])){?>
				
				<?php if ($_GET['info']==1){  ?>
					<div class="alert alert-success alert-dismissible" role="alert">
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>		  
						  <strong>Alerta!</strong> Datos actualizados con exito!
					</div>		
					<?php } ?>
					<?php }?>
		</div>
    </div>
                     <br>
                    <center>
              <h2>Mis Datos</h2>
                </center>
                <br>

                <form action="<?= base_url()?>index.php/welcome/actualizar" method="post"  enctype="multipart/form-data">
                <?php foreach ($usua as $u) {
   if($this->session->userdata('email')==$u['email']){

   

$id= $u['idUsuarios'];
$nombre = $u['nombreUsuarios'];
$apellidos = $u['apellidos'];
$direccion = $u['direccion'];
$provincia = $u['provincia_idProvincias'];
$telefono = $u['telefono'];
$email = $u['email'];
$password = $u['password'];

        ?>
                    
                   

                  <div class="row">

                
                        <input type="hidden" class="form-control" name="id" id="id"  value="<?php echo $id; ?>">
                      

                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label  for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre"  value="<?php echo $nombre; ?>">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label  for="telefono">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $apellidos; ?>">
                      </div>
                    </div>

                      <div class="col-md-4">
                      <div class="form-group">
                        <label  for="email">Dirección:</label>
                        <input type="text" class="form-control" id="direccion" name= "direccion" value="<?php echo $direccion; ?>" >
                      </div>
                    </div>

                    <div class="col-md-6 pr-2">
                      <div class="form-group">
                        <label  for="password">Provincia:</label>
                        <input type="text" class="form-control" id="provincia" name= "provincia" value="<?php echo $provincia; ?>" >
                      </div>
                    </div>

                    <div class="col-md-6 ">
                      <div class="form-group">
                        <label  for="password">Teléfono:</label>
                        <input type="text" class="form-control"  id="telefono" name= "telefono" value="<?php echo $telefono; ?>" >
                      </div>
                    </div>

                    <div class="col-md-6 pr-3">
                      <div class="form-group">
                        <label  for="password">Email:</label>
                        <input type="text" class="form-control"  id="email" name= "email" value="<?php echo $email; ?>"  >
                      </div>
                    </div>

                    <div class="col-md-6 ">
                      <div class="form-group">
                        <label  for="password">Teléfono:</label>
                        <input type="text" class="form-control" id="password" name= "password" value="<?php echo $password; ?>" >
                      </div>
                    </div>
        
                  </div>
                      
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round" onclick="return confirm('¿Los datos modificados son correctos? Click en Aceptar')">Modificar</button>
                    </div>
                  </div>
                </form>
                <?php } ?>
   <?php } ?>
 
                </div>
            </div>
          </div>
        </div>
      </div>








      



