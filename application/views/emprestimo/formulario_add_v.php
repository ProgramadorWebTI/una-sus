<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
		<a style="margin: 10px;" href="<?php echo base_url('emprestimo/executa_emprestimo'); ?>" class="btn hrsbotao verde"><i class="fa fa-plus"></i> Fazer o emprestimo</a>			
			<div class="panel-heading"><?php echo $navegacao; ?></div>
			<div class="panel-body">
				<form action="<?php echo site_url('emprestimo/form_novo');?>" method="post">
					<div class="form-group">
						<label for=""> </label>
						<input type="date" name="data_emprestimo" class="form-control" value="<?php echo set_value('data_emprestimo'); ?>">
						<?php echo form_error('data_emprestimo'); ?>
					</div>
					<div class="row">
						<div class="col-md-6">	
							<div class="form-group">
								<label for="pessoas_id">Funcionario:</label>
								<select name="pessoas_id" class="form-control">
									<?php foreach($funcionarios as $funcionario): ?>
										<option value="<?php echo $funcionario->idpessoa?>"><?php echo $funcionario->nome; ?></option>
									<?php endforeach; ?>
								</select>
								<?php echo form_error('data_emprestimo'); ?>
							</div>
						</div>
						<div class="col-md-6">	
							<div class="form-group">
								<label for="usuario_id">Usuário:</label>
								<select name="usuario_id" class="form-control">
									<?php foreach($usuarios as $usuario): ?>
										<option value="<?php echo $usuario->id; ?>"><?php echo $usuario->usuario; ?></option>
									<?php endforeach; ?>
								</select>
								<?php echo form_error('usuario_id'); ?>
							</div>
						</div>

					</div>
				</div>
				<div class="panel-footer">
					<div class="form-group">
						<input type="submit" value="salvar" class="btn verde">
					</div>
				</form>
				<?php if ($this->session->flashdata('msg')) {
					echo $this->session->flashdata('msg');
				} ?>
			</div>
		</div>
	</div>
</div>



