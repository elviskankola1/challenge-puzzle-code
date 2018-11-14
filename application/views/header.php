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
	<style>
		aside{
			border: solid 0.1px;
		}
		aside:hover{
			
			border:2%; 
			box-shadow:0px 4px 20px;
		}
	
	</style>
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="<?php echo base_url('assets/images/logo.png');?>" alt="Progressus HTML5 template"></a>
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
            <li class="active">Formation</li>
		</ol><br><br>