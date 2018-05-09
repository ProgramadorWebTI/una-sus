<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
		<a style="margin: 10px;" href="<?php echo base_url('equipamento/novo');?>" class="btn hrsbotao verde"><i class="fa fa-plus"></i></a>
			<div class="panel-heading"><?php echo $navegacao; ?></div>
			<div class="panel-body">
				<div class="table-responsive">

	<table class="table table-condensed table-bordered">
		<thead>
			<tr>
				<th>Equipamento:</th>
				<th>Ações:</th>
			</tr>
		</thead>
		<tbody>

			<?php foreach($equipamentos as $equipamento): ?>
			<tr>
				<td><?php echo $equipamento->descricao; ?></td>
				<td>
					<a href="<?php echo site_url('equipamento/view/').$equipamento->id?>" class="label label-primary">visualizar</a>
					<a href="<?php echo site_url('equipamento/edit/').$equipamento->id?>" class="label label-warning">editar</a>
					<a href="<?php echo site_url('equipamento/delete/').$equipamento->id?>" class="label label-danger">apagar</a>
				</td>
			</tr>
			<?php endforeach; ?>
			
		</tbody>
	</table>
	
</div>
			</div>
			<div class="panel-footer"></div>
		</div>
	</div>
</div>