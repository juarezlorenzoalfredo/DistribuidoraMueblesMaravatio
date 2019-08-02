
<!DOCTYPE html>
<html lang="en">
<head>
<title> <?=$titulo?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="<?=base_url();?>assets/assetsTemplate/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?=base_url();?>assets/assetsTemplate/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?=base_url();?>assets/assetsTemplate/css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="<?=base_url();?>assets/assetsTemplate/js/jquery-1.11.1.min.js"></script>
<script src="<?=base_url();?>assets/assetsTemplate/js/bootstrap.js"></script>


<script type="text/javascript">
function clear_cart() {
    var result = confirm('¿Deseas quitar todos los productos de tu carrito?');

    if (result) {
        window.location = "<?php echo base_url(); ?>index.php/carrito/remove/all";
    } else {
        return false; // cancel button
    }
}
</script>

</head>

<body>
	


<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a <?php if($titulo == 'D. Muebles Maravatío') { echo "class='active'";} ?> href="<?=base_url();?>index.php/welcome/index" ><img src="<?=base_url();?>assets/assetsTemplate/images/qqq.png" alt=" " /><h1>DISTRIBUIDORA MARAVATÍO<span></span></h1></a>
		</div>
		<div class="col-md-6 phone-w3l">
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
				<li>01 (447) 478-11-85</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>


<div class="row">
		<div class="col-xs-12 col-xs-12">
			<?php if(isset($_GET['info'])){?>
				
				<?php if ($_GET['info']==2){  ?>
					<div class="alert alert-success alert-dismissible" role="alert">
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>		  
						  <strong>Alerta!</strong> La sesion se cerro exitosamente.
					</div>		
					<?php } ?>
					<?php }?>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-xs-12">
			<?php if(isset($_GET['info'])){?>
				
				<?php if ($_GET['info']==3){  ?>
					<div class="alert alert-warning alert-dismissible" role="alert">
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>		  
						  <strong>Alerta!</strong> Contraseña o usuario incorrectos!.
					</div>		
					<?php } ?>
					<?php }?>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-xs-12">
			<?php if(isset($_GET['info'])){?>
				
				<?php if ($_GET['info']==4){  ?>
					<div class="alert alert-success alert-dismissible" role="alert">
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>		  
						  <strong>Alerta!</strong> Registro exitozo!.
					</div>		
					<?php } ?>
					<?php }?>
		</div>
	</div>


	<div class="row">
		<div class="col-xs-12 col-xs-12">
			<?php if(isset($_GET['info'])){?>
				
				<?php if ($_GET['info']==5){  ?>
					<div class="alert alert-warning alert-dismissible" role="alert">
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>		  
						  <strong>Alerta!</strong> Tienes que tener una sesion para proseguir con la compra, por favor registrate...
					</div>		
					<?php } ?>
					<?php }?>
		</div>
	</div>


	<div class="row">
		<div class="col-xs-12 col-xs-12">
			<?php if(isset($_GET['info'])){?>
				
				<?php if ($_GET['info']==6){  ?>
					<div class="alert alert-success alert-dismissible" role="alert">
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>		  
						  <strong>Alerta!</strong> Compra realizada con exito!
					</div>		
					<?php } ?>
					<?php }?>
		</div>
	</div>

<div class="header-bottom-w3ls">
	<div class="container">
		<div class="col-md-8 navigation-agileits">
			<nav class="navbar navbar-default">
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li <?php if($titulo == 'D. Muebles Maravatío') { echo "class='active'";} ?>><a href="<?=base_url();?>index.php/welcome/index" class="hyper "><span>Inicio</span></a></li>	
						<!--<li class="dropdown ">
							<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Clothing<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
			
												<li><a href="women.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Women's Clothing</a></li>
												<li><a href="men.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's Clothing</a></li>
												<li><a href="kids.html"> <i class="fa fa-angle-right" aria-hidden="true"></i>Kid's Wear</a></li>
												<li><a href="party.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Party Wear</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="casuals.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Casuals</a></li>
												<li><a href="night.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Night Wear</a></li>
												<li><a href="formals.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Formals</a></li>
												<li><a href="inner.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Inner Wear</a></li>
										
											</ul>						
										</div>
										<div class="col-sm-4 w3l">
											<a href="women.html"><img src="<?=base_url();?>assets/assetsTemplate/images/menu1.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li> -->
						<!-- <li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Personal Care <b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="jewellery.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Jewellery </a></li>
												<li><a href="watches.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Watches</a></li>
												<li><a href="cosmetics.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Cosmetics</a></li>
												<li><a href="deos.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Deo & Perfumes</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-4">
											
											<ul class="multi-column-dropdown">
												<li><a href="haircare.html"> <i class="fa fa-angle-right" aria-hidden="true"></i>Hair Care </a></li>
												<li><a href="shoes.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Shoes</a></li>
												<li><a href="handbags.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Handbags</a></li>
												<li><a href="skincare.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Skin care</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-4 w3l">
											<a href="jewellery.html"><img src="<?=base_url();?>assets/assetsTemplate/images/menu2.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li> -->
                        <li <?php if($titulo == 'Comedores') { echo "class='active'";} ?>><a  href="<?=base_url();?>index.php/welcome/comedoresD" class="hyper"><span>Comedores</span></a></li>
                        
                        <li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Otros Muebles <b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="<?=base_url();?>index.php/welcome/basescamaD/"><i class="fa fa-angle-right" aria-hidden="true"></i>Bases de Cama</a></li>
												<li><a href="<?=base_url();?>index.php/welcome/burosD/"><i class="fa fa-angle-right" aria-hidden="true"></i>Buros</a></li>
												<li><a href="<?=base_url();?>index.php/welcome/cabecerasD/"><i class="fa fa-angle-right" aria-hidden="true"></i>Cabeceras</a></li>
                                               
										
											</ul>
											
                                        </div>
                                        
                                        <div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="<?=base_url();?>index.php/welcome/comodasD/"><i class="fa fa-angle-right" aria-hidden="true"></i>Comodas</a></li>
                                                <li><a href="<?=base_url();?>index.php/welcome/librerosD/"><i class="fa fa-angle-right" aria-hidden="true"></i>Libreros</a></li>
										
											</ul>
											
										</div>
										
										<div class="col-sm-4 w3l">
											<a href="#"><img src="<?=base_url();?>assets/assetsTemplate/images/qe.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
                        </li> 
                        
                        <li <?php if($titulo == 'Cocina') { echo "class='active'";} ?>><a href="<?=base_url();?>index.php/welcome/cocinaD/"  class="hyper"><span>Cocina</span></a></li>
                        <li <?php if($titulo == 'Oficina') { echo "class='active'";} ?>><a href="<?=base_url();?>index.php/welcome/oficinaD/"  class="hyper"><span>Oficina</span></a></li>
                        <li <?php if($titulo == 'Recamaras') { echo "class='active'";} ?>><a href="<?=base_url();?>index.php/welcome/recamarasD/"  class="hyper"><span>Recamaras</span></a></li>
                        <li <?php if($titulo == 'Salas') { echo "class='active'";} ?>><a href="<?=base_url();?>index.php/welcome/salasD/"  class="hyper"><span>Salas</span></a></li>

                        
					</ul>
				</div>
			</nav>
		</div>
								<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
				</script>

		<div class="col-md-3 search-agileinfo">
				</div>
		
				<!-- BOTON CARRITO -->
		<div class="col-md-1 cart-wthree">
			<div class="cart"> 
				
					<a class="w3view-cart"  href="<?=base_url();?>index.php/carrito"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
				
			</div>
		</div>

		<!-- FIN BOTON CARRITO -->


		
		<div class="clearfix"></div>
	</div>
</div>

<?php if($titulo == 'D. Muebles Maravatío'): ?>
    
        <div class="banner-agile">
	        <div class="container">
		        <h2>BIENVENIDO</h2>
		        <h3>DISTRIBUIDORA <span>MARAVATÍO</span></h3>
		        <p>Estas en el lugar en donde todo lo que necesitas lo encontrarás y si no lo encuentras te lo traemos...</p>
		       <!-- <a href="about.html">Read More</a>  -->
			</div>
        </div>
    
<?php endif ?>