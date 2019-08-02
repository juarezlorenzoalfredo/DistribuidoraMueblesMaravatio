<div class="login">
	
		<div class="main-agileits">
				<div class="form-w3agile">
                    <h3>Registrar</h3>
                    
					<form action="<?=base_url();?>index.php/welcome/registrar" method="post" enctype="multipart/form-data">

						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text"  name="nombreUsuarios" id="nombreUsuarios"   placeholder="Nombre:" placeholder='Nombre *' pattern="[A-Za-z]{5,30}" title="Ingresa solo letras. Ejemplo: Paola" required>
							<div class="clearfix"></div>
						</div>
						
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text"  name="apellidos" id="apellidos"   placeholder="Apellidos:" pattern="[A-Za-z]{5,30}" title="Ingresa solo letras. Ejemplo: Tirado" required>
							<div class="clearfix"></div>
                        </div>
 
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text"  name="direccion" id="direccion"  placeholder="Direccion:" required>
							<div class="clearfix"></div>
						</div>
						
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text"  name="provincia_idProvincias" id="provincia_idProvincias"  placeholder="Provincia:" required>
							<div class="clearfix"></div>
						</div>
						
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text"  name="telefono" id="telefono" required=""  placeholder="Teléfono:" required>
							<div class="clearfix"></div>
                        </div>
                        
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="email" name="email"  id="email" placeholder="Email:" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" title="Ejemplo: micorreo@gmail.com" required>
							<div class="clearfix"></div>
                        </div>
                        
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password"   name="password" id="password"  placeholder="Contraseña:" pattern="[A-Za-z0-9!?-]{8,12}" required>
							<div class="clearfix"></div>
						</div>
					
                        <input type="submit" value="Registrar" >
                        
					</form>
				</div>
			</div>
		</div>