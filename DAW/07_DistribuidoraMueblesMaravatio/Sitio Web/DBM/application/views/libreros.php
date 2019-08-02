<div class="content">
	<div class="container">
		<div class="col-md-4 w3ls_dresses_grid_left">

			<!-- <div class="w3ls_dresses_grid_left_grid">
				<h3>Categories</h3>
					<div class="w3ls_dresses_grid_left_grid_sub">
						<div class="ecommerce_dres-type">
							<ul>
								<li><a href="jewellery.html">Neck sets</a></li>
								<li><a href="jewellery.html">Rings</a></li>
								<li><a href="jewellery.html">Chains</a></li>
								<li><a href="jewellery.html">Bracelets</a></li>
							</ul>
						</div>
					</div>
			</div> -->


		
			<!-- Inicia publicidad-->
			<div class="w3ls_dresses_grid_left_grid">
				<div class="dresses_img_hover">
					<img src="<?=base_url();?>assets/assetsTemplate/images/banp.jpg" alt=" " class="img-responsive" />
					<!-- <div class="dresses_img_hover_pos">
						<h4>Upto<span>40%</span><i>Off</i></h4>
					</div> -->
				</div>
			</div>

			<!-- Fin publicidad-->
		</div>

		<!-- Inicia productos-->
		
	
		<div class="col-md-8 col-sm-8 women-dresses">
		<?php 
		foreach ($products as $product) {
        $id = $product['idProductos'];
		$name = $product['nombreProducto'];
		$img = $product['url'];
		$price = $product['precio'];

	?>
			<div class="women-set1">
				<div class="col-md-4 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s">
					<a href="single.html"><div class="product-img">
						<img src="<?php echo base_url() . 'assets/uploads/files/'.$img ?>" alt="" />
						<div class="p-mask">
							

							 <form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" /> 
								<input type="hidden" name="w3ls1_item" value="<?php echo $name; ?>" /> 
								<input type="hidden" name="amount" value="<?php echo $price; ?>" /> 
								<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</button>
							</form> 
						</div>
					</div></a>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star gray-star" aria-hidden="true"></i>
					<h4><?php echo $name; ?></h4>
					<h5>$<?php echo $price; ?></h5>

					<?php

        				echo form_open('carrito/add');
        				echo form_hidden('id', $id);
        				echo form_hidden('name', $name);
        				echo form_hidden('price', $price);
        				echo form_hidden('img', $img);
    				?>
				</div>
				<?php } ?>

				
			
				<div class="clearfix"></div>
			</div>
			
		</div>
		<!-- Fin productos-->
	
	</div>
</div>
								
	