<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
		<a style="margin: 10px;"  href="<?php echo base_url(''); ?>" class="btn hrsbotao verde"><i class="fa fa-plus"></i></a>
			<div class="panel-heading"><?php echo $navegacao; ?></div>
			<div class="panel-body"></div>
			<div class="panel-footer"></div>
		</div>
	</div>
</div>


<form action="<?php echo site_url('');?>" method="post">
	<div class="form-group">
		<label for=""> </label>
		<input type="text" name="" class="form-control" value="<?php echo set_value(''); ?>">
		<?php echo form_error(''); ?>
	</div>
</form>


<div class="table-responsive">

	<table class="table table-condensed table-bordered">
		<thead>
			<tr>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>

			<?php endforeach(); ?>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<?php endforeach(); ?>
			
		</tbody>
	</table>
	
</div>