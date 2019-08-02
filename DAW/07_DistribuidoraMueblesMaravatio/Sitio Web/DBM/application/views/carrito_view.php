<div id='content'>
    
    <br>
    <br>
    <br>
    <br>

    <div id="cart" >
        <div id = "heading">
        <h2 align="center">Productos en tu carrito</h2>
    </div>
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

    <table id="table" border="0" cellpadding="5px" cellspacing="1px" >
        <?php
        // All values of cart store in "$cart".
        if ($cart = $this->cart->contents()): ?>
            <tr id= "main_heading">
            <td>Serial</td>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Cantidad</td>
            <td>Existencia</td>
            <td>Quitar Producto</td>
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

    <?php
    //AQUI MERO MERO MERO 
    // cancle image.
    $path = "<img src='".base_url()."assets/assetsTemplate/images/   ' width='20px' height='20px'>";
    echo anchor('carrito/remove/' . $item['rowid'], $path); ?>
    </td>
    <?php endforeach; ?>
    </tr>
    <tr>
    <td><br><b>Total: $<?php

    //Grand Total.
    echo number_format($grand_total, 2); ?></b></td>

    <?php // "clear cart" button call javascript confirmation message ?>
    <td colspan="5" align="right"><br><input  class ='fg-button teal' type="button" value="Limpiar carrito" onclick="clear_cart()">

    <?php //submit button. ?>
    <input class ='fg-button teal'  type="submit" value="Actualizar Carrito">
    <?php echo form_close(); ?>

    <!-- "Place order button" on click send "billing" controller -->
    <input class ='fg-button teal ' type="button" value="Hacer Compra" onclick="window.location = 'carrito/billing_view'"></td>
    </tr>
    <?php endif; ?>
    </table>
    </div>

</div>

<br>
<br>
<br>
<br>



