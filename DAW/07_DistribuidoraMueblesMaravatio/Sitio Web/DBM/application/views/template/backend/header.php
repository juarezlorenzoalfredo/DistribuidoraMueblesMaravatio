
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url();?>assets2/img/logo.png">
  <link rel="icon" type="image/png" href="<?=base_url();?>assets2/img/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  <?=$titulo?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?=base_url();?>assets2/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets2/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?=base_url();?>assets2/demo/demo.css" rel="stylesheet" />
</head>

<body class=""  onload="mueveReloj()">
<?php 
if($this->session->userdata('login')==false){
	redirect('welcome/index');
}else {
?>

	<?php } ?>
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->


      <div class="logo">
        <a  class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="<?=base_url();?>assets2/img/logo-small.png">
          </div>
        </a>
        <a  href="<?=base_url();?>index.php/welcome/index/" class="simple-text logo-normal">
          innovasoff
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>

      <div class="sidebar-wrapper">
        <ul class="nav">
          
        <li <?php if($titulo == 'Inicio') { echo "class='active'";} ?>>
            <a href="<?=base_url();?>index.php/welcome/indexBack">
              <i class="nc-icon nc-bank"></i>
              <p>Inicio</p>
            </a>
        </li>

          

          <li <?php if($titulo == 'Acerca de') { echo "class='active'";} ?>>
            <a href="<?=base_url();?>index.php/acercaDe/">
              <i class="nc-icon nc-alert-circle-i"></i>
              <p>Acerca de </p>
            </a>
          </li>


          <li <?php if($titulo == 'Galeria') { echo "class='active'";} ?>>
            <a href="<?=base_url();?>index.php/galeria/">
              <i class="nc-icon nc-image"></i>
              <p>Galería</p>
            </a>
          </li>


          <li <?php if($titulo == 'FAQ') { echo "class='active'";} ?>>
            <a href="<?=base_url();?>index.php/faq/">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>FAQ</p>
            </a>
          </li>


          <li <?php if($titulo == 'Dudas') { echo "class='active'";} ?>>
            <a href="<?=base_url();?>index.php/dudas/">
              <i class="nc-icon nc-chat-33"></i>
              <p>Dudas</p>
            </a>
          </li>


          <style> .nodisplay { display: none; } </style>
          
         
          <li>
                    <a href="<?= base_url()?>index.php/usuarios/" >
                       <i class="nc-icon nc-lock-circle-open"></i>
                       <p>Usuarios</p>
                    </a>
                </li>
               

          <li >
            <a href="<?=base_url();?>index.php/welcome/index/">
              <i class="nc-icon nc-spaceship"></i>
              <p>Ver Sitio</p>
            </a>
          </li>
  
          
          <?php if($this->session->userdata('login')){ ?>
                <li class="active-pro">
                    <a href="<?= base_url()?>index.php/login/logout" >
                       <i class="nc-icon nc-lock-circle-open"></i>
                       <p>Cerrar session</p>
                    </a>
                </li>
                
							<?php }else{ ?>
                  
							<?php }?>
          
        </ul>
      </div>
    </div>
    
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" ><?=$titulo?></a>
            
            <div class="row">
		
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
          
            
          </div>
        </div>
      </nav>
      
      
    

        
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm"> -->
        