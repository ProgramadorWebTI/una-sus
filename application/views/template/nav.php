	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
					<a class="navbar-brand" href="<?php echo base_url('/'); ?>"><span>@emprestimo</span></a>
					</div>
				</div><!-- /.container-fluid -->
			</nav>

			<!-- MENU LATERAL -->
			<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
				<div class="profile-sidebar">
					<div class="profile-userpic">
						<img src="<?php echo base_url('assets/imagem/avatar/images.png'); ?>" class="img-responsive" alt="">
					</div>
					<div class="profile-usertitle">
						<div class="profile-usertitle-name">
							<?php if(isset($_SESSION['user'])){echo $_SESSION['user'][0]->usuario;} ?>
						</div>
						<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="divider"></div>
				<!-- <form role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
				</form> -->
				<ul class="nav menu">
					<li class="active"><a href="<?php echo base_url('/');?>"><em class="fa fa-dashboard">&nbsp;</em>Panel administrativo </a></li>
					<li><a href="<?php echo base_url('cargo');?>"><em class="fa fa-building">&nbsp;</em>Cargo</a></li>
					<li><a href="<?php echo base_url('funcionario');?>"><em class="fa fa-users">&nbsp;</em>Funcionario</a></li>
					<li><a href="<?php echo base_url('equipamento');?>"><em class="fa fa-desktop">&nbsp;</em>Equipamento</a></li>
					<li><a href="<?php echo base_url('emprestimo');?>"><em class="fa fa-user">&nbsp;</em>Emprestimo</a></li>

					<!-- <li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
					<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
					<li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
					<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li> -->

					<!-- <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
						<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
					</a>
					<ul class="children collapse" id="sub-item-1">
						<li><a class="" href="#">
							<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
						</a></li>
						<li><a class="" href="#">
							<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
						</a></li>
						<li><a class="" href="#">
							<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
						</a></li>
					</ul>
				</li> -->
				<li><a id="logount" href="<?php echo site_url('logount'); ?>"><em class="fa fa-power-off">&nbsp;</em> Sair</a></li>
			</ul>
		</div><!--/.sidebar-->			