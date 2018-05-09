<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading"><?php echo $navegacao; ?></div>
			<div class="panel-body">
				<button class="btn btn-xs btn-info" id="btnAdd"><i class="fa fa-plus"></i></button>
				<form action="<?php echo site_url('');?>" method="post">
					<div id="addCampos">
						<label for="equipamentos_id">Equipamento:</label>
						<select name="equipamentos_id">
							<?php foreach($equipamentos as $equipamento): ?>		
							<option value="<?php echo $equipamento->id ?>"><?php echo $equipamento->descricao ?></option>
							<?php endforeach; ?>
						</select>
						<label for="emprestimo_id">Pessoa:</label>
						<select name="emprestimo_id">
							<?php foreach($emprestimos as $emprestimo): ?>		
							<option value="<?php echo $emprestimo->idEmprestimo ?>"><?php echo $emprestimo->nome ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</form>
			</div>
			<div class="panel-footer"></div>
		</div>
	</div>
</div>

<script>
	jQuery(document).ready(function() {
		var __addCampos = $("#addCampos");
		var __btnAdd = $("#btnAdd");
			setInterval( function() {
		    __addCampos.append("<?php echo base_url();?>"+"<br>");
			}, 60000);

		__btnAdd.click(function(event) {
			event.preventDefault();
		});
	});
</script>


git config --global user.name “ProgramadorWebTI”
git config --global user.email “programadorwebti@gmail.com”