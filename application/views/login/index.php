	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@Resultato - Login</title>
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/tema/css/datepicker3.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/tema/css/styles.css'); ?>">
	<!--[if lt IE 9]>
	<script src="assets/tema/js/html5shiv.js"></script>
	<script src="assets/tema/js/respond.min.js"></script>
<![endif]-->
<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
</head>
<div class="container">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Logar</div>
				<div class="panel-body">
					<form action="<?php echo site_url('login/auth'); ?>" method="post">
						<?php echo $this->session->flashdata('msg'); ?>
						<fieldset>
							<div class="form-group">
								<input value="<?php echo set_value('usuario'); ?>" class="form-control" placeholder="usuario" name="usuario" type="text" autofocus="">
								<?php echo form_error('usuario'); ?>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="senha" name="senha" type="password">
								<?php echo form_error('senha'); ?>
							</div>
							<button type="submit" class="btn btn-primary">Login</button>
						</fieldset>
						<div class="row text-center">
							<hr>
							usuario: admin <br>
							senha: admin	
						</div>					
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
</div>  <!-- / .container -->
</body>
</html>
