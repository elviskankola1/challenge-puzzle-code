<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>SITE</title>

	<link rel="shortcut icon" href="<?php echo base_url('assets/images/gt_favicon.png');?>">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.css');?>" media="screen" >
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
</head>

<body>
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						<a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/images/logo.png');?>" alt="mfo-logo"></a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav pull-right">
							<li class="active"><a href="<?php echo base_url();?>">Accueil</a></li>
							<li><a href="<?php echo base_url('index.php/welcome/apropos');?>">Apropos</a></li>
							<li>
								<a href="<?php echo base_url('index.php/welcome/formation');?>">Formation</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/welcome/application');?>">Logiciel</a>
							</li>
							<li><a href="<?php echo base_url('index.php/welcome/contact');?>">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
	<?php if($form):?> 
	<header id="head" class="secondary"></header>
	<div class="container">
		
		<ol class="breadcrumb">
			<li><a href="index.html">Accueil</a></li>
			<li class="active">Detail-Formation</li>
		</ol>

		<div class="row">
			<?php foreach($form as $value):?>
			<aside class="col-md-4 sidebar sidebar-left">
				<div class="row widget">
					<div class="col-xs-12">
						<p><img src="<?php echo base_url($value->file_formation);?>" alt=""></p>
						<a class="btn btn-action" type="submit" width="100%" href="<?php echo base_url('index.php/welcome/souscription_formation');?>">souscrire a cette formation</a>
					</div>
				</div>

			</aside>
			<article class="col-md-8 maincontent">
				<header class="page-header">
					<h1 class="page-title"><?php echo $value->titre_formation;?></h1>
				</header>
				<p><?php echo $value->description_formation;?></p>
			</article>
			<?php endforeach?>
		</div>
	</div><br><br><br><br><br><br><br><br><br><br><br><br>
	<?php else:?>
		<br><br><br><br><br><h1> Detail non trouver!</h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<?php endif?>
	<footer id="footer" class="top-space">

			<div class="footer1">
				<div class="container">
					<div class="row">
						
						<div class="col-md-3 widget">
							<h3 class="widget-title">Contact</h3>
							<div class="widget-body">
								<p>+243 977 756 377<br>
									<a href="mailto:#">adresse-email.com</a><br>
									<br>
									Lubumbashi lomami 19
								</p>	
							</div>
						</div>
	
						<div class="col-md-3 widget">
							<h3 class="widget-title">retrouvez nous sur</h3>
							<div class="widget-body">
								<p class="follow-me-icons">
									<a href=""><i class="fa fa-twitter fa-2"></i></a>
									<a href=""><i class="fa fa-dribbble fa-2"></i></a>
									<a href=""><i class="fa fa-facebook fa-2"></i></a>
								</p>	
							</div>
						</div>
	
						<div class="col-md-6 widget">
							<h3 class="widget-title">Citation</h3>
							<div class="widget-body">
								<p></p>
								<p>
	
									*Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les 
									intervenants et usagers des comptes selon les normes édictées par l'OHADA révisé et les IFRS
									* Mettre en place un cadre de concertation et d'échange de connaissances par la Formation continue de
									de l'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs)
									* Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique)
	
	
								</p>
							</div>
						</div>
	
					</div>
				</div>
			</div>
	
			<div class="footer2">
				<div class="container">
					<div class="row">
						<div class="col-md-6 widget">
							<div class="widget-body">
								<p class="text-right">
									Copyright &copy; 2018 <a href="mailto:elviskankola1@gmail.com">by Elvis-kankola-<span style="color:green">ourWorld</span></a> 
								</p>
							</div>
						</div>
	
					</div>
				</div>
			</div>
	
		</footer>		
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5be02e37077f4460"></script>
</body>
</html>