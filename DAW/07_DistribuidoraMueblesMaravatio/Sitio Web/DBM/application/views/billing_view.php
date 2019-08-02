<div id='content'>
    
    <br>
    <br>
    <br>
    <br>

    <!--AQUI CARRO -->
    <div id="cart" >
    <h1 align="center">Datos de la compra</h1>
    <br>
    <br>
    <br>
    

    <div id="text">
        <?php $cart_check = $this->cart->contents();

        // If cart is empty, this will show below message.
        if(empty($cart_check)) {
        echo 'Para agregar productos en tu carrito haz clic en el botón "Agregar al carrito"';
        } ?>
    </div>

    <table id="table" border="0" cellpadding="5px" cellspacing="1px">
        <?php
        // All values of cart store in "$cart".
        if ($cart = $this->cart->contents()): ?>
            <tr id= "main_heading">
            <td>Serial</td>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Cantidad</td>
            <td>Existencia</td>
          
            </tr>
        <?php
            // Create form and send all values in "carrito/update_cart" function.
            echo form_open('carrito/update_cart');
            $grand_total = 0;
            $i = 1;

            foreach ($cart as $item):
            // echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
            // Will produce the following output.
            // <input type="hidden" name="cart[1][id]" value="1" />

            echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
            echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
            echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
            echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
            echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
        ?>
        <tr>
        <td>
            <?php echo $i++; ?>
        </td>
        <td>
            <?php echo $item['name']; ?>
        </td>
        <td>
            $ <?php echo number_format($item['price'], 2); ?>
        </td>
        <td>
    <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
    </td>
    <?php $grand_total = $grand_total + $item['subtotal']; ?>
    <td>
    $ <?php echo number_format($item['subtotal'], 2) ?>
    </td>
    <td>
<br>
    
    </td>
    <?php endforeach; ?>
    </tr>
    <tr>
    <td><b>Total: $<?php

    //Grand Total.
    echo number_format($grand_total, 2); ?></b></td>

    <?php // "clear cart" button call javascript confirmation message ?>
    <td colspan="5" align="right">

    <?php //submit button. ?>
   
    <?php echo form_close(); ?>

    <!-- "Place order button" on click send "billing" controller -->
    </td>
    </tr>
    <?php endif; ?>
    </table>
    </div>



<!-- FIN CARRITO, FIN CARRITO-->


<?php
$grand_total = 0;
// Calculate grand total.
if ($cart = $this->cart->contents()):
foreach ($cart as $item):
$grand_total = $grand_total + $item['subtotal'];
endforeach;
endif;
?>




<?php 
    if($this->session->userdata('login')==false){
        redirect('carrito?info=5');
    }else {
    ?>

  <?php } ?>

<div id="bill_info">



<?php // Create form for enter user imformation and send values 'shopping/save_order' function?>
<form name="billing" method="post" action="<?php echo base_url() . 'index.php/carrito/save_order' ?>" >
<input type="hidden" name="command" />
<div align="center">

<br>


<table  border="0" cellpadding="2px">



<?php 

foreach ($usua as $u) {
   if($this->session->userdata('email')==$u['email']){

    foreach ($cart as $item):

$pro = $item['id'];

$id= $u['idUsuarios'];
$nombre = $u['nombreUsuarios'];
$apellidos = $u['apellidos'];
$direccion = $u['direccion'];
$provincia = $u['provincia_idProvincias'];
$telefono = $u['telefono'];


	
        ?>
<!-- <tr><td>Nombre:</td><td><input type="text" name="name" required=""/></td></tr>
<tr><td>Apellidos:</td><td><input type="text" name="surnames" required="" /></td></tr>
<tr><td>Direccion:</td><td><input type="text" name="address" required="" /></td></tr>
<tr><td>Provincia:</td><td><input type="text" name="provincie" required="" /></td></tr>
<tr><td>Telefono:</td><td><input type="text" name="phone" required="" /></td></tr>
<tr><td>Email:</td><td><input type="text" name="phone" required="" /></td></tr>
<tr><td>Password:</td><td><input type="text" name="phone" required="" /></td></tr>-->
<input type="hidden" name="pro" value=" <?php echo $pro; ?>">  <br>
 <input type="hidden" name="id" value=" <?php echo $id; ?>">   
<tr><td >Nombre: </td><td>  <?php echo $nombre; ?> <br></td></tr>
<tr><td>Apellidos: </td><td>  <?php echo $apellidos;?></td></tr>
<tr><td>Dirección: </td><td>  <?php echo $direccion;?></td></tr>
<tr><td>Provincia: </td><td>  <?php echo $provincia;?></td></tr>
<tr><td>Teléfono: </td><td>  <?php echo $telefono; ?></td></tr>

<tr><td>Total de la orden:</td><td><strong>$<?php echo number_format($grand_total, 2); ?></strong></td></tr>

<?php

endforeach; ?>

<?php }?>


<?php }?>

<tr><td>
    <?php
// This button for redirect main page.
echo "<a class ='fg-button teal'  id='back' href=" . base_url() . "index.php/carrito>Regresar</a>"; ?>
</td><td><input class ='fg-button teal' type="submit" value="Realizar compra" onclick="return confirm('¿Esta seguro de realizar su compra? Click en Aceptar')"/></td></tr>

</table>
</div>
</form>
</div>



