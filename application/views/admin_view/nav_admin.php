<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand">TABLE DE GESTION</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger"><?php echo $nb_msg;?></span>
					</a>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						
					</li>
				</ul>
			</div>
		</div>
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="<?php echo base_url('assets/images/3.jpg');?>" class="img-responsive" alt="image">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">elvis kankola</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="<?php echo base_url('index.php/mfo_admin');?>"><em class="fa fa-dashboard">&nbsp;</em> Tableau de bord</a></li>
			<li><a href="<?php echo base_url('index.php/mfo_admin/Page_Add_App');?>"><em class="fa fa-calendar">&nbsp;</em> Publier une application</a></li>
			<li><a href="<?php echo base_url('index.php/mfo_admin/Page_Add_Form');?>"><em class="fa fa-calendar">&nbsp;</em> Publier une formation</a></li>
			<li><a href="<?php echo base_url('index.php/mfo_admin/Page_Add_Item_Blog');?>"><em class="fa fa-calendar">&nbsp;</em> Publier une article</a></li>
			<li><a href="<?php echo base_url('index.php/mfo_admin/Page_Messages_contact');?>"><em class="fa fa-calendar">&nbsp;</em> Tous les messages</a></li>
			
			<li><a href="<?php echo base_url('mfo/login');?>"><em class="fa fa-power-off">&nbsp;</em> Deconnexion</a></li>
		</ul>
	</div>