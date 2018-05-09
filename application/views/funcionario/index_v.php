<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<a style="margin: 10px;" href="funcionario/novo" class="btn hrsbotao verde"><i class="fa fa-plus"></i></a>

			<div class="panel-heading"> <?php echo $navegacao; ?></div> <!-- / .panel-heading -->

			<div class="panel-body">
				<div class="table-responsive">
				<table class="table table-bordered table-condensed table-xs">
					
					<tbody>
						<tr>
							<th>Nome:</th>
							<th>CPF:</th>
							<th>Email:</th>
							<th>Telefone:</th>
							<th>Cargo:</th>
							<th>Ações</th>
						</tr>
					</tbody>
					<tbody>
					<?php foreach($funcionarios as $funcionario): ?>	
						<tr>							
							<td><?php echo $funcionario->nome ?></td>
							<td class="cpf"><?php echo $funcionario->cpf ?></td>
							<td><?php echo $funcionario->email ?></td>
							<td class="phone_with_ddd_br"><?php echo $funcionario->telefone ?></td>
							<td><?php echo $funcionario->cargo ?></td>
							<td>
								<a href="<?php echo site_url('funcionario/edit/'.$funcionario->idpessoa);?>" class="label label-warning">editar</a>
								<a href="<?php echo site_url('funcionario/delete/'.$funcionario->idpessoa);?>" class="label label-danger">apagar</a>
							</td>
						</tr>
					<?php endforeach; ?>	

					</tbody>
				</table>
			</div>
			</div> <!-- / .panel-body -->
			<div class="panel-footer">			
			</form> <!-- ./ form -->
			<?php if ($this->session->flashdata('msg')) {
				echo $this->session->flashdata('msg');
			} ?>
		</div> <!-- / .panel-footer -->		

	</div> <!-- / .panel panel-default -->
</div> <!-- / .col-md-10 col-md-offset-1 -->
</div> <!-- /. row -->