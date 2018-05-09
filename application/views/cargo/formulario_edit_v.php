<div class="row">
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2></h2>
		</div>
		<div class="panel-body">
			<form action="<?php echo site_url('cargo/form_edit');?>" method="post">
				<div class="col-md-12">
					<div class="form-group">
						<label for="cargo">Cargo</label>
						<input type="hidden" name="id" value="<?php echo $cargos[0]->id; ?>">
						<input type="text" class="form-control" name="cargo" value="<?php echo $cargos[0]->cargo; ?>">
						<?php echo form_error('cargo'); ?>
						<div class="form-group">
						<br><input type="submit" class="btn btn-default hrsbotao" value="enviar">
						</div>	
					</div>	
				</div> <!-- ./ col-md-12 -->
				<?php if ($this->session->flashdata('msg')) {
					echo $this->session->flashdata('msg');
				} ?>
			</div> <!-- ./ panel-body -->
		</form> <!-- ./ form -->
	</div>
</div>

</div><!--  / . row -->