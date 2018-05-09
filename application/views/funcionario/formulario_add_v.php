	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">

				<div class="panel-heading"> <?php echo $navegacao; ?></div> <!-- / .panel-heading -->

				<div class="panel-body">
					<form action="<?php echo site_url('funcionario/form_novo');?>" method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nome">Nome:</label>
									<input type="text" name="nome" class="form-control" value="<?php echo set_value('nome'); ?>">
									<?php echo form_error('nome'); ?>
								</div>						
							</div> <!-- ./col-md-6 -->
							<div class="col-md-6">
								<div class="form-group">
									<label for="cpf">CPF:</label>
									<input type="text" name="cpf" class="cpf form-control" value="<?php echo set_value('cpf'); ?>">
									<?php echo form_error('cpf'); ?>
								</div>						
							</div> <!-- ./ col-md-6 -->
						</div>  <!-- / .row	 -->

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="email">E-mail:</label>
									<input type="text" name="email" class="form-control" value="<?php echo set_value('email'); ?>">
									<?php echo form_error('email'); ?>
								</div>
							</div> <!-- ./ col-md-6 -->
							<div class="col-md-3">
								<div class="form-group">
									<label for="telefone">Telefone celular:</label>
									<input type="text" name="telefone" class="phone_with_ddd_br form-control" value="<?php echo set_value('telefone'); ?>">
									<?php echo form_error('telefone'); ?>
								</div>
							</div> <!-- ./ col-md-3 -->
							<div class="col-md-3">
								<div class="form-group">
									<label for="cargo_id">Cargo</label>
									<select name="cargo_id" class="form-control" style="height: 46px;">
										<option value="">selecione um cargo</option>
										<?php foreach($cargos as $cargo): ?>
											<option value="<?php echo $cargo->id; ?>"><?php echo $cargo->cargo?></option>
										<?php endforeach; ?>
									</select>
									<?php echo form_error('cargo_id'); ?>
								</div>
							</div> <!-- ./ col-md-3 -->
						</div>  <!-- / .row	 -->


					</div> <!-- / .panel-body -->

					<div class="panel-footer">
						<div class="row" style="padding-left: 5px">
							<div class="form-group">
								<input type="submit" class="btn btn-default btn-lg hrsbotao" value="enviar">
							</div>
						</div>  <!-- / .row	 -->			
					</form> <!-- ./ form -->
					<?php if ($this->session->flashdata('msg')) {
						echo $this->session->flashdata('msg');
					} ?>
				</div> <!-- / .panel-footer -->		

			</div> <!-- / .panel panel-default -->
		</div> <!-- / .col-md-10 col-md-offset-1 -->
	</div> <!-- /. row -->
