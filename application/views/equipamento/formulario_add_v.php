<!-- FORMULARIO DE CADASTRO DE EQUIPAMENTO -->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading"><?php echo $navegacao; ?></div>
			<div class="panel-body">
				<?php if ($this->session->flashdata('msg')) {
					echo $this->session->flashdata('msg');
				} ?>
				<form action="<?php echo site_url('equipamento/form_novo');?>" method="post">
					<div class="form-group">
						<label for="descricao">Equipamento:</label>
						<input type="text" name="descricao" class="form-control" value="<?php echo set_value('descricao'); ?>">
						<?php echo form_error('descricao'); ?>
					</div>
					<div class="form-group">
						<label for="modelo">Modelo:</label>
						<input type="text" name="modelo" class="form-control" value="<?php echo set_value('modelo'); ?>">
						<?php echo form_error('modelo'); ?>
					</div>
					<div class="form-group">
						<label for="serial">Serial</label>
						<input type="text" name="serial" class="form-control" value="<?php echo set_value('serial'); ?>">
						<?php echo form_error('serial'); ?>
					</div>
					<div class="form-group">
						<label for="nota_fiscal">Notal fiscal:</label>
						<input type="text" name="nota_fiscal" class="form-control" value="<?php echo set_value('nota_fiscal'); ?>">
						<?php echo form_error('nota_fiscal'); ?>
					</div>
					<div class="form-group">
						<label for="data_compra">Data da compra:</label>
						<input type="date" name="data_compra" class="form-control" value="<?php echo set_value('data_compra'); ?>">
						<?php echo form_error('data_compra'); ?>
					</div>
					<div class="form-group">
						<label for="patrimonio">Patrimonio</label>
						<input type="text" name="patrimonio" class="form-control" value="<?php echo set_value('patrimonio'); ?>">
						<?php echo form_error('patrimonio'); ?>
					</div>
					<div class="form-group">
						<label for="observacao">Observacao:</label>
						<textarea type="text" name="observacao" class="form-control" value="<?php echo set_value('observacao'); ?>" cols="30" rows="4"></textarea>
						<?php echo form_error('observacao'); ?>
					</div>
					<div class="form-group">
						<label for="data_cadastro">Data atual:</label>
						<input type="date" name="data_cadastro" class="form-control" value="<?php echo set_value('data_cadastro'); ?>">
						<?php echo form_error('data_cadastro'); ?>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-default hrsbotao">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>