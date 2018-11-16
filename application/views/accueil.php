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
<body class="home">
	<style>
		img:hover{

			border: solid yellow;
		}
	
	</style>
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="<?php echo base_url();?>"><img src="assets/images/logo.png" alt="image" width="10%"></a>
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
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">Vivez la solution en temps reel</h1>
				<p class="tagline">Notre cabinet est votre solution</p>
				<p><a class="btn btn-default btn-lg" role="button" href="<?php echo base_url('index.php/welcome/formation');?>">formation</a> 
					<a class="btn btn-action btn-lg" role="button" href="<?php echo base_url('index.php/welcome/application');?>">Logiciel</a></p>
			</div>
		</div>
	</header>
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Votre vision</h2>
		<p class="text-muted">

			*Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les 
			intervenants et usagers des comptes selon les normes édictées par l'OHADA révisé et les IFRS
			* Mettre en place un cadre de concertation et d'échange de connaissances par la Formation continue de
			de l'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs)
			* Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique)
			* Développer les réflexes d'auto-évaluations et pour les recyclages professionnels
			* Sécuriser la traçabilité des comptes par l'usage du Bouclier numérique constitués des applications 

		</p>
	</div>
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Nos Services</h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Formation</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid adipisci aspernatur. Soluta quisquam dignissimos earum quasi voluptate. Amet, dignissimos, tenetur vitae dolor quam iusto assumenda hic reprehenderit?</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Vente Logiciel</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, commodi, sequi quis ad fugit omnis cumque a libero error nesciunt molestiae repellat quos perferendis numquam quibusdam rerum repellendus laboriosam reprehenderit! </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Creation des plans expert comptable</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>autres</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
					</div>
				</div>
			</div>
		
		</div>
	</div>
	<div class="container">

		<h2 class="text-center top-space">Equipe du cabinet</h2>
		<br>
		<div class="row">
			<div class="col-sm-3">
					<img src="assets/images/3.jpg" width="100%">
					<p>Responasable de</p>
			</div>
			<div class="col-sm-3">
				<img src ="assets/images/3.jpg" width="100%">
				<p>Responsable de</p>
			</div>
			<div class="col-sm-3">
					<img src="assets/images/3.jpg" width="100%">
					<p>Responsable de</p>	
			</div>
			<div class="col-sm-3">
					<img src="assets/images/3.jpg" width="100%">
					<p>Responasable de</p>	
			</div>
		</div>
	</div>
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
			</div>
		</div>
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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>