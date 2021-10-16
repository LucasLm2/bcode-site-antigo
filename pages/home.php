<section id="home">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="slider" style="background-image: url('<?php echo INCLUDE_PATH_SITE ?>imgs/slide01.jpg')"></div>
				<div class="carousel-caption d-block content-slider text-left">
					<h5>Desenvolvemos Sistemas para você sob medida</h5>
	  				<h1>Sistemas personalizados</h1>
				</div>
			</div>
			<div class="carousel-item">
				<div class="slider" style="background-image: url('<?php echo INCLUDE_PATH_SITE ?>imgs/slide03.jpg')"></div>
				<div class="carousel-caption d-block content-slider text-left">
	  				<h5>Criamos seu Site com Painel de Gerenciamento</h5>
	  				<h1>Sites 100% Dinâmicos</h1>
				</div>
			</div>
			<div class="carousel-item">
				<div class="slider" style="background-image: url('<?php echo INCLUDE_PATH_SITE ?>imgs/slide02.jpg')"></div>
				<div class="carousel-caption d-block content-slider text-left">
	  				<h5>Você pode prender de qualquer lugar</h5>
	  				<h1>Treinamentos Online</h1>
				</div>
			</div>
			<div class="overlay"></div><!--overlay-->
		</div>
	</div>
</section>

<section id="empresa" class="sections-padding titulo">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<img src="<?php echo INCLUDE_PATH_SITE ?>imgs/sobre-nos.png" alt="">
			</div>
			<div class="col-lg-6 text-justify">
				<h1 class="">Somos uma empresa voltada ao ensino e desevolvimento de soluções em T.I.</h1>
				<p>Nascemos para oferecer as melhores soluções tecnológicas a empresas que procuram modernidade e produtividade. Trabalhamos em diversos segmentos dentro da área tecnológica, possuímos experiências e competências únicas para oferecer o que há de melhor aos nossos clientes.</p>
				<a href="<?php echo INCLUDE_PATH_SITE ?>/construction" class="btn btn-primary">Saiba mais!</a>
			</div>

		</div>
	</div>
</section>

<section id="servicos" class="sections-padding titulo text-center">
	<div class="container">
		<h1 class="">Serviços</h1>
		<div class="row">
			<div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<div class="icon-service">
							<i class="fas fa-code"></i>
						</div>
						<h5 class="card-title">Desenvolvimento de Sistemas</h5>
						<p class="card-text text-justify">Desenvolvemos sistemas completos sob medida para o seu negócio. Se você esta procurando o crescimento da sua empresa, nós fornecemos soluções visando o alto desempenho, praticidade, economia e segurança.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<div class="icon-service">
							<i class="fas fa-globe web-site"></i>
				    	</div>
				    	<h5 class="card-title">Criação de Sites</h5>
				    	<p class="card-text text-justify">Trazemos a sua empresa para a internet com o desenvolvimento de sites personalizados, layouts modernos e bonitos, SEO para posicionamento do seu site nos motores de buscas e totalmente responsivos e muito mais.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<div class="icon-service">
							<i class="fas fa-graduation-cap"></i>
				    	</div>
				    	<h5 class="card-title">Treinamentos em TI</h5>
				    	<p class="card-text text-justify">Capacitamos profissionais de TI totalmente online. Nossos treinamentos vão te levar do básico ao avançado sem precisar sair de casa, com suporte individual, acesso vitalício e aulas sempre atualizadas.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="contato" class="sections-padding titulo">
	<div class="container">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8 box-shadow padding">
				<h1 class="text-center">Entre em contato conosco!</h1>
				<form method="post">
					<div class="form-group">
						<label for="e-mail">Seu e-mail:</label>
						<input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu e-mail...">
					</div>
					<div class="form-group">
			    		<label for="nome">Nome:</label>
			    		<input name="nome" type="text" class="form-control" id="nome" placeholder="Digite seu nome...">
			  		</div>
					<div class="form-group">
						<label for="mensagem">Sua Mensagem:</label>
						<textarea name="mensagem" class="form-control" id="mensagem" rows="3" placeholder="Digite aqui sua mensagem..."></textarea>
					</div>
					<input type="submit" name="contato" class="btn btn-primary" value="Enviar">
				</form>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>
</section>
