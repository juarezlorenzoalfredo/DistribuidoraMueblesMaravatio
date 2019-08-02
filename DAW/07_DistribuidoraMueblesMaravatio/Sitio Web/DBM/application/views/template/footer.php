</div>
</div>
</div>

<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: false,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="<?=base_url();?>assets/assetsTemplate/js/jquery.flexisel.js"></script>
		</div>
	</div>
<!-- //top-brands -->



<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
		<a href="index.html"><h4>Contacto </h4></a>
		<ul>
			<li>Libramiento Sur #2364. Carretera Cd. Hidalgo.</li>
			<li>Maravatío Michoacán.</li>
			<li>distribuidoramaravatio@gmail.com</li>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>

			<a href="https://www.facebook.com/Distribuidora-de-Muebles-Maravat%C3%ADo-644393719359544/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	
		</ul>
		</div>
		<div class="col-md-3 footer-grids fgd2">
			<h4>Informatición</h4> 
			<ul>
				<li><a href="<?=base_url();?>index.php/welcome/filosofiaI/">Filosofía</a></li>
				
				<!--<li><a href="typography.html">Typography</a></li> -->
				<li><a href="<?=base_url();?>index.php/welcome/faqsI/">FAQ's</a></li>
				<li><a href="<?=base_url();?>index.php/welcome/avisoprivacidadI">Aviso de privacidad</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			
			<h4>Tienda</h4> 
			<ul>
				<li <?php if($titulo == 'Comedores') { echo "class='active'";} ?>><a href="<?=base_url();?>index.php/welcome/comedoresD">Comedores</a></li>
				<li <?php if($titulo == 'Cocina') { echo "class='active'";} ?>><a href="<?=base_url();?>index.php/welcome/cocinaD">Cocina</a></li>
				<li <?php if($titulo == 'Oficina') { echo "class='active'";} ?>><a  href="<?=base_url();?>index.php/welcome/Oficina">Oficina</a></li>
				<li <?php if($titulo == 'Recamaras') { echo "class='active'";} ?>><a href="<?=base_url();?>index.php/welcome/recamarasD/" >Recamaras</a></li>
				<li <?php if($titulo == 'Salas') { echo "class='active'";} ?>><a href="<?=base_url();?>index.php/welcome/salasD/" >Salas</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>Mi cuenta</h4> 
			<ul>
				
				

			<?php if($this->session->userdata('privilegios') == 1){ ?>
						

				<li>
                    <a href="<?=base_url();?>index.php/categorias/" >
                       <p>CPanel</p>
                    </a>
				</li>

                <li>
                    <a href="<?= base_url()?>index.php/login/logout" >
                       <p>Cerrar session</p>
                    </a>
				</li>
				
				<?php }else if($this->session->userdata('privilegios') == 2){ ?>

					<li>
                    <a href="<?=base_url();?>index.php/categorias/" >
                       <p>CPanel</p>
                    </a>
				</li>

                <li>
                    <a href="<?= base_url()?>index.php/login/logout" >
                       <p>Cerrar session</p>
                    </a>
				</li>

				<li>
                    <a href="<?= base_url()?>index.php/login/logout" >
                       <p>GATOOOOO</p>
                    </a>
				</li>

				<?php }else if($this->session->userdata('privilegios') == 3){ ?>

					<li>
                    <a href="<?=base_url();?>index.php/welcome/perfil" >
                       <p>Mi Perfil</p>
                    </a>
					</li>

                <li>
                    <a href="<?= base_url()?>index.php/login/logout" >
                       <p>Cerrar session</p>
                    </a>
				</li>

				<?php }else{ ?>
					<li><a href="<?=base_url();?>index.php/welcome/login/">Ingresar</a></li>
					<li><a href="<?=base_url();?>index.php/welcome/registrar">Registrar</a></li>
				  <?php }?>
				
				  


				<!-- <li><a href="recommended.html">Recommended </a></li>
				<li><a href="payment.html">Payments</a></li> -->
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">Copyright &copy; 2019 Crafted by Puzzle Technologies</p>
	</div>
</div>
	<!-- cart-js -->
	<script src="<?=base_url();?>assets/assetsTemplate/js/minicart.js"></script>
	<script>
        w3ls1.render();

        w3ls1.cart.on('w3sb1_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->  
</body>
</html>