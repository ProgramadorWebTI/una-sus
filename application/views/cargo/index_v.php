<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<a style="margin: 10px;" href="cargo/novo" class="btn hrsbotao verde"><i class="fa fa-plus"></i></a>

			<div class="panel-heading"> <?php echo $navegacao; ?></div> <!-- / .panel-heading -->
		
			<div class="panel-body">
				<?php if ($this->session->flashdata('msg')) {
					echo $this->session->flashdata('msg');
				} ?>
				<div class="table-responsive">
				<table class="table table-bordered table-condensed table-xs">
					<tbody>
						<tr>
							<th>Cargo:</th>
							<th>Ações</th>
						</tr>
					</tbody>
					<tbody>

						<?php foreach($cargos as $cargo): ?>	
							<tr>							
								<td><?php echo $cargo->cargo ?></td>
								<td>
									<a href="<?php echo base_url('cargo/edit/').$cargo->id;?>" class="label label-warning">editar</a>
									<a href="<?php echo base_url('cargo/delete/').$cargo->id;?>" class="label label-danger">apagar</a>
								</td>
							</tr>
						<?php endforeach; ?>	

					</tbody>
				</table>
				</div>
			</div> <!-- / .panel-body -->
			<div class="panel-footer">			
			</form> <!-- ./ form -->
		</div> <!-- / .panel-footer -->		

	</div> <!-- / .panel panel-default -->
</div> <!-- / .col-md-10 col-md-offset-1 -->
</div> <!-- /. row -->



