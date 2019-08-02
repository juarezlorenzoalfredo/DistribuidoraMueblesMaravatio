<div class="products">	 
		<div class="container">  

        <?php $idProductos = (isset($_REQUEST['idProductos'])) ? $_REQUEST['idProductos'] : null;  ?>

        <?php 
        
if($idProductos){

        foreach ($products as $product )
         {

        $id = $product['idProductos'];
		$name = $product['nombreProducto'];
		$img = $product['url'];
        $price = $product['precio'];
        $description = $product['descripcion'];
  
         } 
    
		?>
		
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/s1.jpg">
									<div class="thumb-image detail_images"> <img src="<?php echo base_url() . 'assets/uploads/files/'.$img ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>  <br>
								</li>
								
							</ul>
						</div>
					</div>
					<div class="col-md-6 single-top-right">
						<h3 class="item_name"> <?php echo $name; ?></h3>
						<p>Processing Time: Item will be shipped out within 2-3 working days. </p>
						<div class="single-rating">
							
						</div>
						<div class="single-price">
							<ul>
								<li>$<?php echo $price; ?></li>  
								
							</ul>	
						</div> 
						<p class="single-price-text"> <?php echo $description; ?> </p>
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="add" value="1" /> 
							<input type="hidden" name="w3ls1_item" value="<?php echo $name; ?>" /> 
								<input type="hidden" name="amount" value="<?php echo $price; ?>" /> 
							<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                        </form>
                        
						
                    </div>
                    
                   <div class="clearfix"> </div>  
                   
				</div>
			</div> 
				
			 
        </div>
        <?php } ?>
        
	</div>