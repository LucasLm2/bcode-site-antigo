<?php 
	include('config.php');

	$url = isset($_GET['url']) ? $_GET['url'] : 'home';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="icon" href="" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_SITE ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_SITE ?>css/mycss.css">
</head>
<body>	
	<base base="<?php echo INCLUDE_PATH_SITE; ?>" />
	<?php 

		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'empresa':
				echo '<target target="empresa" />';
				break;

			case 'servicos':
				echo '<target target="servicos" />';
				break;
			case 'contato':
				echo '<target target="contato" />';
				break;
		}

	?>
	<header>
		<nav class="navbar fixed-top navbar-expand-lg navbar-white-bcode navbar-bottom-home">
			<div class="container">
					<a class="logo color-white-9-bcode logo-border-white-9" href="<?php echo INCLUDE_PATH_SITE ?>">
						<span class="logo-princ font-alfaslabone">BCODE</span>
						<span class="logo-sub bg-white-9-bcode color-black-bcode">Soluções</span>
					</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a realtime="home" class="nav-link <?php if($url == 'home' || $url == 'empresa' || $url == 'servicos' || $url == 'contato'){ echo 'active';} else { echo ''; } ?>" href="<?php  if($url == 'home' || $url == 'empresa' || $url == 'servicos' || $url == 'contato') {echo '#home'; } else {echo INCLUDE_PATH_SITE.'home'; } ?>">Início</a>
						</li>
						<li class="nav-item">
							<a realtime="empresa" class="nav-link" href="<?php  if($url == 'home' || $url == 'empresa' || $url == 'servicos' || $url == 'contato') {echo '#empresa'; } else {echo INCLUDE_PATH_SITE.'empresa'; } ?>">Empresa</a>
						</li>
						<li class="nav-item">
							<a realtime="servicos" class="nav-link" href="<?php  if($url == 'home' || $url == 'empresa' || $url == 'servicos' || $url == 'contato') {echo '#servicos'; } else {echo INCLUDE_PATH_SITE.'servicos'; } ?>">Serviços</a>
						</li>
						<li class="nav-item">
							<a realtime="contato" class="nav-link" href="<?php  if($url == 'home' || $url == 'empresa' || $url == 'servicos' || $url == 'contato') {echo '#contato'; } else {echo INCLUDE_PATH_SITE.'contato'; } ?>">Contato</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<?php
		if (file_exists('pages/'.$url.'.php')) {
			include('pages/'.$url.'.php');
			$pagina404 = false;	
		} else {
			//Podemos fazer o que quiser, pois a página não existe
			if ($url != 'empresa' &&
				 $url != 'servicos' &&
				 $url != 'contato' &&
				 $url != 'cursos' &&
				 $url != 'blog') 
			{
				include('pages/404.php');
				$pagina404 = true;		
			} else {
				if($url != 'blog'){
					include('pages/home.php');
					$pagina404 = false;
				} else {
					include('pages/construction.php');
					$pagina404 = true;
				}
			}		
		}
	?>

	<footer class="text-center ">
		<div class="ant-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 bottom-30">
						<h3>O que fazemos?</h3>
						<div class="text-justify servicos-footer">
							<p>Nós da BlackCode solutions trabalhamos oferecendo soluções em TI para você ou sua empresa. Mas quais são estas soluções?</p>
							<p><i class="fas fa-code"></i> Desenvolvimento de Sistemas</p>
							<p><i class="fas fa-globe web-site"></i> Criação de Sites</p>
							<p><i class="fas fa-graduation-cap"></i> Treinamentos em TI</p>
						</div>
					</div>
					<div class="col-lg-6 contact-footer">
						<h3>Contato e redes sociais</h3>
						<div class="margin-left">
							<p><i class="fas fa-envelope"></i> : contato@bcode.com.br</p>
							<p><i class="fas fa-phone-alt"></i> : (41) 9 8469-9917</p>
							<div class="icons-social">
								<i class="fab fa-facebook-square"></i>
								<i class="fab fa-instagram"></i>
								<i class="fab fa-youtube"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright-footer box-shadow">
			<p><i class="far fa-copyright"></i> <?php echo date('Y') ?> - Todos os direitos reservados. </p>
		</div>
	</footer>
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/ec8d70e5c7.js" crossorigin="anonymous"></script>
	<script src="js/constants.js"></script>
	<?php 
		if ($url == 'empresa' ||
				$url == 'servicos' ||
				$url == 'contato' ||
				$url == 'home') {
	?>
			<script src="js/myjs-home.js"></script>
	<?php 
		} else {
	?>
			<script src="js/myjs.js"></script>
	<?php 
		}
	?>
</body>
</html>