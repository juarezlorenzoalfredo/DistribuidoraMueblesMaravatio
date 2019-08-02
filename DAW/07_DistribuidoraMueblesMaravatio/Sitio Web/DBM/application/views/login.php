<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Iniciar sesión</h3>
					<form action="<?=base_url();?>index.php/login/indexLog" method="post">
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" name="email" id="email" required="" placeholder="Email">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" name="password" id="password" required="" placeholder="Password">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Entrar">
					</form>
				</div>
				<div class="forg">
					<!--<a href="#" class="forg-left">Forgot Password</a> -->
					<a href="<?=base_url();?>index.php/welcome/registrar" class="forg-right">Registrar</a>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>