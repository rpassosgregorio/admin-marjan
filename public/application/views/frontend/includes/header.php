<!doctype html>
<html ng-app="ngApp">

<head>
    <title>Marjan Farma</title>
    <meta charset="utf-8">
    <meta name="description" content="Desde 1961 a Marjan Farma caminha com o compromisso de atuar a favor da melhoria da qualidade de vida. Ao longo de sua trajetoria, orgulha-se de ter construido uma empresa 100% nacional, fundamentada na integridade, etica e transparencia em seus relacionamentos, seja com seus colaboradores, classe medica, comunidade ou parceiros de negocios.Em sintonia com as novas tecnologias, a empresa prepara seu lugar no futuro. Futuro que se faz presente a cada dia, tal a rapidez com que as novas descobertas cientificas transformam-se em novos produtos." />
	<meta name="keywords" content="marjan, marjan farma, farma, farmacia, medicina, medico, saude, bem-estar, bem estar, social, responsabilidade, responsabilidade social, medicamento, medicamentos, doutor, doutores, medicos, medica, medicas, bulas, bula, paciente, pacientes" />
	<meta name="author" content="Marjan Farma" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url(PATH_ASSETS.'/img/favicon.ico'); ?>" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url(PATH_ASSETS.'/img/favicon.ico'); ?>" type="image/x-icon">


	<link href="<?php echo base_url(PATH_ASSETS.'/css/styles.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(PATH_ASSETS.'/css/global-styles.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(PATH_ASSETS.'/css/menus.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(PATH_ASSETS.'/css/footer.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(PATH_ASSETS.'/css/libs/dcsns_wall.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(PATH_ASSETS.'/css/page-header.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(PATH_ASSETS.'/css/know-more-about-mj.css'); ?>" rel="stylesheet" type="text/css"> <!-- css customizado da página -->

	<?php if ($controller_module  == 'home'): ?>

		<link href="<?php echo base_url(PATH_ASSETS.'/css/home.css'); ?>" rel="stylesheet" type="text/css"> <!-- css customizado da página -->

	<?php elseif ($controller_module  == 'contato'): ?>

		<link href="<?php echo base_url(PATH_ASSETS.'/css/contact.css'); ?>" rel="stylesheet" type="text/css"> <!-- css customizado da página -->

	<?php elseif ($controller_module  == 'sobre-nos'): ?>
		
		<link href="<?php echo base_url(PATH_ASSETS.'/css/timeline.css'); ?>" rel="stylesheet" type="text/css"> <!-- css customizado da página -->		
		<link href="<?php echo base_url(PATH_ASSETS.'/css/jquery.timeline.css'); ?>" rel="stylesheet" type="text/css"> <!-- css customizado da página -->
		<link href="<?php echo base_url(PATH_ASSETS.'/css/about-us.css'); ?>" rel="stylesheet" type="text/css"> <!-- css customizado da página -->

	<?php elseif ($controller_module  == 'sobre-nos' && $action_module  == 'index'): ?>

	<?php elseif ($controller_module  == 'sobre-nos' && $action_module  == 'newbusiness'): ?>

	<?php elseif ($controller_module  == 'sobre-nos' && $action_module  == 'environment'): ?>

	<?php elseif ($controller_module  == 'sobre-nos' && $action_module  == 'quality'): ?>

	<?php elseif ($controller_module  == 'sobre-nos' && $action_module  == 'ourhistory'): ?>

	<?php elseif ($controller_module  == 'responsabilidade-social'): ?>

		<link href="<?php echo base_url(PATH_ASSETS.'/css/resp-social.css'); ?>" rel="stylesheet" type="text/css"> <!-- css customizado da página -->

	<?php endif ?>

    <script src="<?php echo base_url(PATH_ASSETS.'/js/libs/jquery/jquery-3.2.1.min.js'); ?>"></script>
	<script src="<?php echo base_url(PATH_ASSETS.'/js/jquery.social.stream.1.6.1.js'); ?>"></script>
	<script src="<?php echo base_url(PATH_ASSETS.'/js/jquery.social.stream.wall.1.8.js'); ?>"></script>
	<script src="<?php echo base_url(PATH_ASSETS.'/js/libs/greensock-js/TweenMax.js'); ?>"></script>
	<script src="<?php echo base_url(PATH_ASSETS.'/js/libs/greensock-js/plugins/ScrollToPlugin.js'); ?>"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
	<script src="<?php echo base_url(PATH_ASSETS.'/js/common.js'); ?>"></script>
	<script src="<?php echo base_url(PATH_ASSETS.'/js/controllers.js'); ?>"></script>
	<script src="<?php echo base_url(PATH_ASSETS.'/js/application.js'); ?>"></script>
	<script src="<?php echo base_url(PATH_ASSETS.'/js/menu.js'); ?>"></script>
    <script src="<?php echo base_url(PATH_ASSETS.'/js/slider.js'); ?>"></script>


    <?php if ($controller_module  == 'home'): ?>

    	<script src="<?php echo base_url(PATH_ASSETS.'/js/home.js'); ?>"></script> <!-- js customizado da página -->

	<?php elseif ($controller_module  == 'contato'): ?>

		<script src="<?php echo base_url(PATH_ASSETS.'/js/contact.js'); ?>"></script> <!-- js customizado da página -->

	<?php elseif ($controller_module  == 'sobre-nos'): ?>

		<script src="<?php echo base_url(PATH_ASSETS.'/js/novos_negocios.js'); ?>"></script> <!-- js customizado da página -->
		<script src="<?php echo base_url(PATH_ASSETS.'/js/pharmacovigilance.js'); ?>"></script> <!-- js customizado da página -->
		<script src="<?php echo base_url(PATH_ASSETS.'/js/timeline.js'); ?>"></script> <!-- js customizado da página -->
		<script src="<?php echo base_url(PATH_ASSETS.'/js/about_us.js'); ?>"></script> <!-- js customizado da página -->

	<?php elseif ($controller_module  == 'sobre-nos' && $action_module  == 'index'): ?>

	<?php elseif ($controller_module  == 'sobre-nos' && $action_module  == 'newbusiness'): ?>

	<?php elseif ($controller_module  == 'sobre-nos' && $action_module  == 'environment'): ?>

	<?php elseif ($controller_module  == 'sobre-nos' && $action_module  == 'quality'): ?>

	<?php elseif ($controller_module  == 'sobre-nos' && $action_module  == 'ourhistory'): ?>

	<?php elseif ($controller_module  == 'responsabilidade-social'): ?>

		<script src="<?php echo base_url(PATH_ASSETS.'/js/resp-social.js'); ?>"></script> <!-- js customizado da página -->

	<?php endif ?>



</head>

<body class="no-home body-mj" data-base="<?php echo base_url(); ?>">

<header ng-controller="menuController" class="fixed-menu menu">

	<div class="primary-navbar-wrapper" id="primary-navbar-wrapper">
	    <div class="primary-navbar" id="primary-navbar">
		    <div class="navbar col-one-thirdy">
			    <ul>
		        	<nav>
						<li class="active"><a title="marjan.com.br" href="<?php echo base_url(); ?>">marjan</a></li>
						<li class="redir-medical-news" id="redir-medical-news"><a title="medical news" target="_blank" href="http://www.marjanmedicalnews.com.br/">medical news</a></li>
				    </nav>
			    </ul>
		    </div>
		    <div class="navbar col-two-thirdy">
		    <nav>
				<ul>
					<li class="primary-navbar-img-2" id="navbar-search-btn"><a><img src="<?php echo base_url(PATH_ASSETS.'/img/menu/primary/search.png'); ?>" /></a></li>
					<li><a>|</a></li>
					<li><a href="<?php echo base_url('noticias'); ?>">Sala de Notícias</a></li>
					<li><a href="<?php echo base_url('carreira'); ?>">Carreira</a></li>
					<li><a>|</a></li>
					<li class="primary-navbar-img"><a href="http://www.facebook.com/marjanfarma" target="_blank"><img src="<?php echo base_url(PATH_ASSETS.'/img/menu/primary/face.png'); ?>" /></a></li>
					<li class="primary-navbar-img"><a href="https://br.linkedin.com/company/marjan-farma" target="_blank"><img src="<?php echo base_url(PATH_ASSETS.'/img/menu/primary/linkedin.png'); ?>" /></a></li>
					<li class="primary-navbar-img"><a href="http://www.instagram.com/farmamarjan" target="_blank"><img src="<?php echo base_url(PATH_ASSETS.'/img/menu/primary/insta.png'); ?>" /></a></li>
					<li class="primary-navbar-sn"><a href="<?php echo base_url('sala-social'); ?>">Sala Social</a></li>
				</ul>
		    </nav>
		    </div>
	    </div>
	</div>

    <div class="secondary-navbar-wrapper" id="secondary-navbar-wrapper">
    	<div class="secondary-navbar" id="secondary-navbar">
    		<div class="navbar col-one-thirdy">
    			<a href="<?php echo base_url(); ?>">
		    		<img class="logo" src="<?php echo base_url(PATH_ASSETS.'/img/_logos/logo-marjan.png'); ?>" alt=""/>
		    	</a>
			</div>
		    <div class="navbar col-two-thirdy">
		    	<nav>
					<ul>
						<li  class="navbar-about-us navbar-item" id="navbar_about_us"><div class="navbar-link-container"><a target="_self" href="<?php echo base_url('sobre-nos'); ?>">SOBRE NÓS</a></div></li>
						<li class="navbar-resp-social navbar-item" id="navbar_resp_social"><div class="navbar-link-container"><a target="_self" href="<?php echo base_url('responsabilidade-social'); ?>">RESPONSABILIDADE SOCIAL</a></div></li>
						<li class="navbar-products navbar-item" id="navbar_products"><div class="navbar-link-container"><a target="_self" href="<?php echo base_url('produtos'); ?>">PRODUTOS</a></div></li>
						<li class="navbar-health navbar-item" id="navbar_health"><div class="navbar-link-container"><a target="_self" href="<?php echo base_url('saude-e-bem-estar'); ?>">SAÚDE E BEM-ESTAR</a></div></li>
						<li class="navbar-health-doctors navbar-item" id="navbar_health_doctors"><div class="navbar-link-container"><a target="_self" href="<?php echo base_url('profissionais-da-saude'); ?>">PROFISSIONAIS DA SAÚDE</a></div></li>
						<li class="navbar-contact navbar-item" id="navbar_contact"><div class="navbar-link-container"><a target="_self" href="<?php echo base_url('contato'); ?>">CONTATO</a></div></li>
					</ul>
				</nav>
		    </div>
    	</div>
	</div>

   <!--Submenu About Us-->
   <div class="submenu-wrapper submenu-about-us" id="submenu-wrapper-about-us">
  		<div class="submenu" id="submenu-about-us">
  			<div class="col-one-fourth submenu-column-01 submenu-columns submenu-heigth submenu-description" id="submenu-about-us-column-01">
  				<div class="submenu-desc-title text-left"><h4>SOBRE NÓS</h4></div>
  				<div class="submenu-desc-summary text-left"><p>Somos uma indústria farmacêutica brasileira, com uma história de 55 anos de desenvolvimento de produtos para a saúde</p></div>
  				<div class="submenu-desc-button"><a href="<?php echo base_url('sobre-nos'); ?>"><button id="sm-prod-au-btn-km"></button></a></div>
  			</div>
       		<div class="col-three-fourth submenu-column-02 submenu-heigth" id="submenu-about-us-column-02">
       		    <div class="submenu-columns submenu-heigth submenu-column-02-left">
  					<div class="submenu-desc-title text-left width-100"><h4>NOSSA HISTÓRIA</h4></div>
					<ul class="submenu-desc-summary text-left">
						<li><p><a href="<?php echo base_url('sobre-nos'); ?>">Sobre Nós</a></p></li>
						<li><p><a href="<?php echo base_url('sobre-nos'); ?>#mission-value-section">Missão</a> | <a href="<?php echo base_url('sobre-nos'); ?>#mission-value-section">Valores</a></p></li>
						<li><p><a href="<?php echo base_url('sobre-nos'); ?>/inovacao">Inovação</a> | <a href="<?php echo base_url('sobre-nos'); ?>/qualidade">Qualidade</a> | <a href="<?php echo base_url('sobre-nos'); ?>/meio-ambiente">Meio Ambiente</a></p></li>
						<li><p><a href="<?php echo base_url('sobre-nos'); ?>/novos-negocios">Novos Negócios e Parcerias</a></p></li>
						<li><p><a href="<?php echo base_url('sobre-nos'); ?>/nossa-historia">Conheça nossa história</a></p></li>
						<li><p><a href="<?php echo base_url('contato'); ?>">Contato</a></p></li>
					</ul>
  				</div>
  				<div class="submenu-columns submenu-heigth submenu-column-02-right" style="background-image: url('<?php echo base_url(PATH_ASSETS.'/img/menu/submenus/menu-sobre-nos.jpg'); ?>'); background-position: center">
  					<div class="submenu-img-mask"></div>
  					<div class="submenu-desc-input submenu-health-doctors-button"><a href="<?php echo base_url('sobre-nos'); ?>#nossa-historia"><button class="">Nossa<br>história</button></a></div>
  				</div>
  			</div>
        </div>
    </div>

    <!--Submenu Resp Social-->
    <div class="submenu-wrapper submenu-resp-social" id="submenu-wrapper-resp-social">
  		<div class="submenu" id="submenu-resp-social">
  			<div class="col-one-fourth submenu-column-01 submenu-columns submenu-heigth submenu-description" id="submenu-resp-social-column-01">
  				<div class="submenu-desc-title text-left"><h4>RESPONSABILIDADE<br>SOCIAL</h4></div>
  				<div class="submenu-desc-summary text-left"><p>A Marjan Farma acredita na força da iniciativa privada como um importante agente transformador da sociedade. Conheça nossas campanhas</p></div>
  				<div class="submenu-desc-button" id="submenu-resp-social-button"><a href="<?php echo base_url('responsabilidade-social'); ?>"><button id="sm-prod-rs-btn-km"></button></a></div>
  			</div>
       		<div class="col-three-fourth submenu-column-02 submenu-heigth" id="submenu-resp-social-column-02">
       		    <div class="submenu-columns submenu-heigth submenu-column-02-left">
  					<div class="submenu-desc-title center-text"><h4>CAMPANHAS & PARCEIROS</h4></div>
					<div class="submenu-desc-summary center-text">
						<div><a href="<?php echo base_url('responsabilidade-social'); ?>#resp-social-campaign-01"><img src="<?php echo base_url(PATH_ASSETS.'/img/menu/submenus/_SubMenus/menu-inst-omp.jpg'); ?>" /><p>Instituto Olinto Marques de Paulo</p></a></div>
						<div><a href="<?php echo base_url('responsabilidade-social'); ?>#resp-social-campaign-02"><img src="<?php echo base_url(PATH_ASSETS.'/img/menu/submenus/_SubMenus/menu-topo-mulher-coracao.jpg'); ?>" /><p>Campanha Mulher Coração</p></a></div>
						<div><a href="<?php echo base_url('responsabilidade-social'); ?>#resp-social-campaign-03"><img src="<?php echo base_url(PATH_ASSETS.'/img/menu/submenus/_SubMenus/menu-arrvore-generosa.jpg'); ?>" /><p>Projeto Árvore Generosa</p></a></div>
						<!--<div><p><a><img src="<?php echo base_url(PATH_ASSETS.'/img/sections/responsabilidade-social/logo-iomp.png'); ?>" /></a></p></div>
						<div><p><a><img src="<?php echo base_url(PATH_ASSETS.'/img/sections/responsabilidade-social/logo-scm.png'); ?>" /></a></p></div>
						<div><p><a><img src="<?php echo base_url(PATH_ASSETS.'/img/sections/responsabilidade-social/logo-agv.png'); ?>" /></a></p></div>-->
					</div>
  				</div>
  				<div class="submenu-columns submenu-heigth submenu-column-02-right" style="background-image: url('<?php echo base_url(PATH_ASSETS.'/img/menu/submenus/menu-resp-social.jpg'); ?>'); background-position: right bottom">
  					<div class="submenu-img-mask"></div>
  					<div class="submenu-desc-input submenu-health-doctors-button"><a href="<?php echo base_url('responsabilidade-social'); ?>"><button class="">Projetos, Campanhas e<br>Parceiros</button></a></div>
  				</div>
  			</div>
        </div>
    </div>

    <!--Submenu Products-->
    <div class="submenu-wrapper submenu-products" id="submenu-wrapper-products">
  		<div class="submenu" id="submenu">
  			<div class="col-one-fourth submenu-column-01 submenu-columns submenu-heigth submenu-description" id="submenu-column-01">
  				<div class="submenu-desc-title text-left"><h4 id="submenu-products-first-title"></h4></div>
  				<div class="submenu-desc-summary text-left"><p>A Marjan Farma está sempre<br>inovando e desenvolvendo<br>novos produtos para melhorar<br>cada vez mais a qualidade de<br>vida.</p></div>
  				<div class="submenu-desc-button"><a href="<?php echo base_url('produtos'); ?>"><button id="sm-prod-pd-btn-km"></button></a></div>
  			</div>
       		<div class="col-three-fourth submenu-column-02 submenu-heigth" id="submenu-column-02">
       		    <div class="submenu-columns submenu-heigth submenu-column-02-left">
  					<div class="submenu-desc-title text-left width-100"><h4 id="submenu-products-second-title"></h4></div>
					<ul class="submenu-desc-summary text-left">
						<li><p><a href="<?php echo base_url('produtos/list/all'); ?>" class="submenu-prod-show-all" id="submenu-prod-show-all"></a></p></li>
						<li><p><a href="<?php echo base_url('produtos/list/under_prescription'); ?>" class="submenu-prod-show-under-pres" id="submenu-prod-show-under-pres"></a></p></li>
						<li><p><a href="<?php echo base_url('produtos/list/exempt_prescription'); ?>" class="submenu-prod-show-exempt-pres" id="submenu-prod-show-exempt-pres"></a></p></li>
						<li><p><a href="<?php echo base_url('produtos/list/foods'); ?>" class="submenu-prod-show-foods" id="submenu-prod-show-foods"></a></p></li>
					</ul>
					<div class="submenu-desc-input">
						<p> - </p>
						<div class="input-wrapper-submenu" id="input-wrapper-submenu">
							<input class="input-search-products" type="text" placeholder="" />
							<img src="<?php echo base_url(PATH_ASSETS.'/img/common/search-orange.png'); ?>">
						</div>
					</div>
  				</div>
  				<div class="submenu-columns submenu-heigth submenu-column-02-right" style="background-image: url('<?php echo base_url(PATH_ASSETS.'/img/menu/submenus/menu-prof-saude.jpg'); ?>'); background-position: center">  		<div class="submenu-img-mask"></div>
  					 <div class="submenu-desc-input submenu-health-doctors-button"><a href="<?php echo base_url('profissionais-da-saude'); ?>"><button class="">Profissionais de<br>saúde</button></a></div>
  				</div>
  			</div>
        </div>
    </div>

    <!--Submenu Health-->
    <div class="submenu-wrapper submenu-health" id="submenu-wrapper-health">
  		<div class="submenu" id="submenu-health">
  			<div class="col-one-fourth submenu-column-01 submenu-columns submenu-heigth submenu-description" id="submenu-health-column-01">
  				<div class="submenu-desc-title text-left"><h4>SAÚDE E BEM ESTAR</h4></div>
  				<div class="submenu-desc-summary text-left"><p>A Marjan Farma investe em projetos de conteúdo informativo e educacional para ajudar a concientizar sobre a importância de cultivar hábitos saudáveis.</p></div>
  				<div class="submenu-desc-button"><a href="<?php echo base_url('saude-e-bem-estar'); ?>"><button id="sm-prod-ht-btn-km"></button></a></div>
  			</div>
       		<div class="col-three-fourth submenu-column-02 submenu-heigth" id="submenu-health-column-02">
       		    <div class="submenu-columns submenu-heigth submenu-column-02-left">
  					<div class="submenu-desc-title center-text"><h4>HOTSITES</h4></div>
					<div class="submenu-desc-summary center-text">
						<div><a href="<?php echo base_url('saude-e-bem-estar'); ?>#health-campaign-01"><img src="<?php echo base_url(PATH_ASSETS.'/img/menu/submenus/_SubMenus/menu-sim-e-possivel.jpg'); ?>" /><p>Sim é Possível</p></a></div>
						<div><a href="<?php echo base_url('saude-e-bem-estar'); ?>#health-campaign-02"><img src="<?php echo base_url(PATH_ASSETS.'/img/menu/submenus/_SubMenus/menu-gravidez-precisa-de-dois.jpg'); ?>" /><p>Gravidez precisa de dois</p></a></div>
						<div><a href="<?php echo base_url('saude-e-bem-estar'); ?>#health-campaign-03"><img src="<?php echo base_url(PATH_ASSETS.'/img/menu/submenus/_SubMenus/menu-colageno-e-flexibilidade.jpg'); ?>" /><p>Colágeno e Flexibilidade</p></a></div>
						<!--<div><p><a><img src="<?php echo base_url(PATH_ASSETS.'/img/sections/saude-e-bem-estar/logo-simepossivel-color-circle.png'); ?>" /></a></p></div>
						<div><p><a><img src="<?php echo base_url(PATH_ASSETS.'/img/sections/saude-e-bem-estar/logo-gravidez-circle-color.png'); ?>" /></a></p></div>
						<div><p><a><img src="<?php echo base_url(PATH_ASSETS.'/img/sections/saude-e-bem-estar/logo_colageno-color-circle.png'); ?>" /></a></p></div>-->
					</div>
  				</div>
  				<div class="submenu-columns submenu-heigth submenu-column-02-right" style="background-image: url('<?php echo base_url(PATH_ASSETS.'/img/menu/submenus/menu-saude-bem-estar.jpg'); ?>'); background-position: center">
  					<div class="submenu-img-mask"></div>
  					<div class="submenu-desc-input submenu-health-doctors-button"><a href="<?php echo base_url('saude-e-bem-estar'); ?>"><button class="">Incentivo à saúde e ao<br>bem-estar</button></a></div>
  				</div>
  			</div>
        </div>
    </div>

    <!--Submenu Health Doctors-->
    <div class="submenu-wrapper submenu-health-doctors" id="submenu-wrapper-health-doctors">
  		<div class="submenu" id="submenu-health-doctors">
  			<div class="col-one-fourth submenu-column-01 submenu-columns submenu-heigth submenu-description" id="submenu-health-doctors-column-01">
  				<div class="submenu-desc-title text-left"><h4>PROFISSIONAIS DE SAÚDE</h4></div>
  				<div class="submenu-desc-summary text-left"><p>Um portal com informações e conteúdo científico dedicado ao profissional da saúde! Faça o cadastro e tenha acesso a inúmeros materiais, escritos e gravados por médicos renomados, além de diversos outros materiais sobre os mais variados temas e assuntos relevantes à área médica.</p></div>
  				<div class="submenu-desc-button"><a href="<?php echo base_url('profissionais-da-saude'); ?>"><button id="sm-prod-hd-btn-km"></button></a></div>
  			</div>
       		<div class="col-three-fourth submenu-column-02 submenu-heigth" id="submenu-health-doctors-column-02">
       		    <div class="submenu-columns submenu-heigth submenu-column-02-left">
  					<div class="submenu-desc-title text-left width-100"><h4>ÁREAS</h4></div>
					<ul class="submenu-desc-summary text-left">
						<li><p><a href="http://www.marjanmedicalnews.com.br/" target="_blank">Medical News</a></p></li>
						<li><p><a href="<?php echo base_url('farmacovigilancia'); ?>">Farmacovigilância</a></p></li>
						<li><p><a href="<?php echo base_url('contato'); ?>">Contato</a></p></li>
					</ul>
  				</div>
  				<div class="submenu-columns submenu-heigth submenu-column-02-right" style="background-image: url('<?php echo base_url(PATH_ASSETS.'/img/menu/submenus/menu-prof-saude.jpg'); ?>'); background-position: center">
  					<div class="submenu-img-mask"></div>
  					<div class="submenu-desc-input submenu-health-doctors-button"><a href="http://www.marjanmedicalnews.com.br/" target="_blank"><button class="">Acesse nosso<br>"Medical News"</button></a></div>
  				</div>
  			</div>
        </div>
    </div>

    <!--Submenu Contact-->
    <div class="submenu-wrapper submenu-contact" id="submenu-wrapper-contact">
  		<div class="submenu" id="submenu-contact">
  			<div class="col-one-fourth submenu-column-01 submenu-columns submenu-heigth submenu-description" id="submenu-contact-column-01">
  				<div class="submenu-desc-title text-left"><h4>FALE CONOSCO</h4></div>
  				<div class="submenu-desc-summary text-left"><p>Tire suas dúvidas, participe e dê sugestões</p></div>
  				<div class="submenu-desc-button"><a href="<?php echo base_url('contato'); ?>"><button id="sm-prod-ct-btn-km"></button></a></div>
  			</div>
       		<div class="col-three-fourth submenu-column-02 submenu-heigth" id="submenu-contact-column-02">
       		    <div class="submenu-columns submenu-heigth submenu-column-02-left">
  					<div class="submenu-desc-title text-left width-100"><h4>CANAIS DE ATENDIMENTO</h4></div>
					<ul class="submenu-desc-summary text-left">
						<li><p><a href="<?php echo base_url('contato'); ?>">Preencha nosso formulário</a></p></li>
						<li><p><a href="<?php echo base_url('farmacovigilancia'); ?>">Farmacovigilância</a></p></li>
						<li><p>E-mail: <a href="mailto: sac@marjanfarma.com.br?Subject=Contato de e-mail através do Portal Marjan Farma">sac@marjanfarma.com.br</a></p></li>
						<li><p>SAC: 0800-55-4545</p></li>
					</ul>
  				</div>
  				<div class="submenu-columns submenu-heigth submenu-column-02-right" style="background-image: url('<?php echo base_url(PATH_ASSETS.'/img/menu/submenus/menus-contato-pags-topo.jpg'); ?>'); background-position: left top">
  					<div class="submenu-img-mask"></div>
  					<div class="submenu-desc-input submenu-health-doctors-button"><a href="<?php echo base_url('farmacovigilancia'); ?>"><button class="">Reações ou eventos<br>adversos?</button></a></div>
  				</div>
  			</div>
        </div>
    </div>

</header>