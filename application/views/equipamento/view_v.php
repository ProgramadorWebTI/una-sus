<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<a style="margin: 10px;" href="<?php echo base_url('equipamento/novo');?>" class="btn hrsbotao verde"><i class="fa fa-plus"></i></a>
			<div class="panel-heading"><?php echo $navegacao; ?></div>
			<div class="panel-body">
				<div class="table-responsive">

					<table class="table table-condensed table-bordered">
						<tbody>

							<?php foreach($equipamentos as $equipamento): ?>
								<tr><td><b>Produto:</b> <?php echo $equipamento->descricao; ?></td></tr>
								<tr><td><b>Modelo:</b> <?php echo $equipamento->modelo; ?></td></tr>
								<tr><td><b>Serial:</b> <?php echo $equipamento->serial; ?></td></tr>
								<tr><td><b>Notal fiscal:</b> <?php echo $equipamento->nota_fiscal; ?></td></tr>
								<tr><td><b>Data da compra:</b> <?php echo $equipamento->data_compra; ?></td></tr>
								<tr><td><b>Patrimonio:</b> <?php echo $equipamento->patrimonio; ?></td></tr>
								<tr><td class="text-justify"><b>Observações:</b> <?php echo $equipamento->observacao; ?></td></tr>
								<tr><td><b>Data do cadastro:</b> <?php echo $equipamento->data_cadastro; ?></td></tr>
							<?php endforeach; ?>

						</tbody>
					</table>

				</div>
			</div>
			<div class="panel-footer"></div>
		</div>
	</div>
</div>
