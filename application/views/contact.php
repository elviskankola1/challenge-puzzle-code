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
	<header id="head" class="secondary"></header>
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Accueil</a></li>
			<li class="active">Contact</li>
		</ol>

		<div class="row">
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contactez nous</h1>
				</header>
				<br>
					<form>
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Entrez votre nom">
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="email" placeholder="Entrez votre adresse email">
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="number" placeholder="entrez votre numero de telephone">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Ecrivez le  message ici..." class="form-control" rows="9"></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6 text-right">
								<input class="btn btn-action" type="submit" value="Envoyer">
							</div>
						</div>
					</form>

			</article>
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					
				</div>

			</aside>
		</div>
	</div>
	<section class="container-full top-space">
		<div id="map"></div>
	</section>
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
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="assets/js/google-map.js"></script>
	

</body>
</html>