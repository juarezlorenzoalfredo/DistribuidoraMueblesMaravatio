
                 <br>
                <center>
              <h2>Pedidos</h2>
                </center>
                <br>


                

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Productos</th>
      <th scope="col">Usuarios</th>
      <!-- <th scope="col">Handle</th> -->
    </tr>
  </thead>
  <tbody>
  <?php foreach ($usua as $u) { ?>
                    <?php if($this->session->userdata('email')==$u['email']){ ?>

    <?php foreach ($pedi as $pe) { 
   

$id= $pe['idPedidos'];
$productos = $pe['productos_idProductos'];
$usuario = $pe['usuario_idUsuarios'];


        ?>
    <tr>
      <th scope="row"><?php echo $id; ?></th>
      <td><?php echo $productos; ?></td>
      <td><?php echo $usuario; ?></td>
    </tr>
    <?php } ?>
<?php } ?>
<?php } ?>
  </tbody>
</table>

