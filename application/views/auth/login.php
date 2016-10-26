<header>
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo site_url(); ?>">SisGC</a>
			</div>
		</div>
	</nav>
</header>
<section>
	<div class="container" id="login">
		<h1>Sistema de Gestão de Cargas</h1>
		<form action="" method="post" accept-charset="utf-8">
			<label for="identity" class="control-label sr-only">Email</label>
			<input type="text" id="identity" name="identity" class="form-control" value="<?php echo set_value('identity'); ?>" placeholder="Email" autofocus />
			<label for="password" class="control-label sr-only">Senha</label>
			<input type="password" id="password" name="password" class="form-control" placeholder="Senha" />

			<div class="custom-error"><?php echo $message; ?></div>
			
			<div class="checkbox">
				<label>
					<input type="checkbox" id="remember" name="remember" value="1" />
					Continuar conectado
				</label>
			</div>

			<button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Entrar</button>
		</form>
		<p><a href="<?php echo site_url('auth/forgot_password'); ?>">Esqueceu sua senha?</a></p>
	</div>
</section>