<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading"><?php echo $navegacao; ?></div>
			<div class="panel-body">


				<form action="<?php echo site_url('funcionario/form_edit');?>" method="post">
					<?php foreach($funcionarios as $funcionario): ?>
						<div class="form-group">
							<input value="<?php echo $funcionario->idpessoa;?>" type="hidden" class="form-control" name="id">
						</div>

						<div class="form-group">
							<label for="nome" class="control-label">Nome:</label>
							<input value="<?php echo $funcionario->nome;?>" type="text" class="form-control" name="nome">
						</div>
						<div class="form-group">
							<label for="cpf" class="control-label">CPF:</label>
							<input value="<?php echo $funcionario->cpf;?> type="text" class="form-control cpf" id="cpf" name="cpf">
						</div>

						<div class="form-group">
							<label for="email" class="control-label">E-mail:</label>
							<input value="<?php echo $funcionario->email;?>"  type="text" class="form-control" id="email" name="email">
						</div>

						<div class="form-group">
							<label for="telefone" class="control-label">Telefone:</label>
							<input value="<?php echo $funcionario->telefone;?>"  type="text" class="form-control" id="telefone" name="telefone">
						</div>

						<div class="form-group">
							<label for="cargo" class="control-label">Cargo:</label>
							<select name="cargo" id="cargo" class="form-control">

								<?php 
									foreach($cargos as $cargo) :
										$selected = ($funcionario->idcargo === $cargo->id) ? 'selected' : '';
								?>
									<option value="<?php echo $cargo->id;?>" <?=$selected ?>><?php echo $cargo->cargo; ?></option>
								<?php endforeach; ?>

							</select>
						</div>
					<?php endforeach; ?>
					<div class="form-group">
						<input type="submit" class="btn verde" value="atualizar">
					</div>
				</form>
			</div>
			<div class="panel-footer"></div>
		</div>
	</div>
</div>