<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

    <?php 
    if($this->session->userdata('login')==false){
        redirect('welcome/index');
    }else {
    ?>

  <?php } ?>


  <?php 
    if($this->session->userdata('privilegios') == 3){
	          redirect('welcome/index');
        }else {
  ?>

  <?php } ?>
  

  

  <div>
  <img src="<?=base_url();?>assets/assetsTemplate/images/DMM.jpg" href="<?=base_url();?>index.php/welcome/index" />
  </div>

 

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CPanel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

    <?php if($this->session->userdata('privilegios') == 2){ ?>
    
      <li <?php if($titulo == 'Categorias') { echo "class=' nav-item active'";} ?> >
        <a class="nav-link" href="<?=base_url();?>index.php/categorias/">Categorias <span class="sr-only">(current)</span></a>
      </li>

      <li <?php if($titulo == 'Establecimientos') { echo "class=' nav-item active'";} ?> >
        <a class="nav-link" href="<?=base_url();?>index.php/establecimientos/">Establecimientos</a>
      </li>

      

      <li <?php if($titulo == 'Pedidos') { echo "class=' nav-item active'";} ?> >
        <a class="nav-link" href="<?=base_url();?>index.php/pedidos/">Pedidos</a>
      </li>

     

      <li <?php if($titulo == 'Productos') { echo "class=' nav-item active'";} ?> >
        <a class="nav-link" href="<?=base_url();?>index.php/productos/">Productos</a>
      </li>

      <li <?php if($titulo == 'Promociones') { echo "class=' nav-item active'";} ?> >
        <a class="nav-link" href="<?=base_url();?>index.php/promociones/">Promociones</a>
      </li>

      <li <?php if($titulo == 'Proveedores') { echo "class=' nav-item active'";} ?> >
        <a class="nav-link" href="<?=base_url();?>index.php/proveedores/">Proveedores</a>
      </li>


      <?php }else if($this->session->userdata('privilegios') == 1){ ?>
        <li <?php if($titulo == 'Categorias') { echo "class=' nav-item active'";} ?> >
        <a class="nav-link" href="<?=base_url();?>index.php/categorias/">Categorias <span class="sr-only">(current)</span></a>
      </li>

      <li <?php if($titulo == 'Establecimientos') { echo "class=' nav-item active'";} ?> >
        <a class="nav-link" href="<?=base_url();?>index.php/establecimientos/">Establecimientos</a>
      </li>

      <li <?php if($titulo == 'Estatus Promociones') { echo "class=' nav-item active'";} ?> >
        <a class="nav-link" href="<?=base_url();?>index.php/estatuspromociones/">Estatus Promociones</a>
      </li>

      <li <?php if($titulo == 'Pedidos') { echo "class=' nav-item active'";} ?> >
        <a class="nav-link" href="<?=base_url();?>index.php/pedidos/">Pedidos</a>
      </li>

      <li <?php if($titulo == 'Privilegios') { echo "class=' nav-item active'";} ?> >
        <a class="nav-link" href="<?=base_url();?>index.php/privilegios/">Privilegios</a>
      </li>

      <li <?php if($titulo == 'Productos') { echo "class=' nav-item active'";} ?> >
        <a class="nav-link" href="<?=base_url();?>index.php/productos/">Productos</a>
      </li>

      <li <?php if($titulo == 'Promociones') { echo "class=' nav-item active'";} ?> >
        <a class="nav-link" href="<?=base_url();?>index.php/promociones/">Promociones</a>
      </li>

      <li <?php if($titulo == 'Proveedores') { echo "class=' nav-item active'";} ?> >
        <a class="nav-link" href="<?=base_url();?>index.php/proveedores/">Proveedores</a>
      </li>

      <li <?php if($titulo == 'Provincias') { echo "class=' nav-item active'";} ?> >
        <a class="nav-link" href="<?=base_url();?>index.php/provincias/">Provincias</a>
      </li>

      <li <?php if($titulo == 'Usuarios') { echo "class=' nav-item active'";} ?> >
        <a class="nav-link" href="<?=base_url();?>index.php/usuarios/">Usuarios</a>
      </li>
					
				  <?php }?>

      <li class="nav-item">
        <a class="nav-link" href="<?=base_url();?>index.php/">Ver sitio</a>
      </li>

      <?php if($this->session->userdata('login')){ ?>
                <li  class="nav-item">
                    <a class="nav-link" href="<?= base_url()?>index.php/login/logout" >Cerrar sessión </a>
  
                </li>
                
							<?php }else{ ?>
                  
							<?php }?>




   <!--   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->

    </ul>
  </div>
</nav>


</body>
</html>




