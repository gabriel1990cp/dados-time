<!-- Page Content -->
<div class="container">

	<div class="row">
		<div class="col-md-12 center">
			<h1>Acesse o seu painel administrativo</h1>

			<form class="form-horizontal" method="post" action="<?php echo base_url() . 'login/verificar_login'?>">
				<div class="control-group">
					<label class="control-label" for="inputEmail">E-mail</label>
					<div class="controls">
						<input id="email" name="email" type="email"  placeholder="Digite o seu e-mail..." required="required"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">Senha</label>
					<div class="controls">
						<input id="senha" name="senha" type="password" placeholder="Digite a sua senha..."/>
					</div>
				</div>
				<hr>
				<div class="control-group">
					<div class="controls">
						<button class="btn" type="submit">Acessar</button>
					</div>
				</div>
			</form>
		</div>
	</div>

