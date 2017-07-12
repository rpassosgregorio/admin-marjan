<main class="main-resp-social">

	<section class="loader">
		<div class="loader-wrapper">
			<img src="<?php echo base_url(PATH_ASSETS.'/img/common/ajaxSpinner.gif'); ?>">
		</div>
	</section>

	<section class="first-section-resp-social">
		<div class="first-section-wrapper" id="first_section_wrapper" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->principal_image); ?>); background-position: center;">
			<div class="info-wrapper">
				<div class="info-container">
					<div class="page-info text title" id="title_about_us_values" >
						<h4 class="pre-line"><?php echo $object->principal_left_text; ?></h4>
					</div>
					<div class="page-info text sub-title" id="text_about_us_values" >
						<h4 class="pre-line"><?php echo $object->principal_right_text; ?></h4>
					</div>
				</div>
			</div>
		</div>
		<div class="call-to-next" id="call_to_next">
			<img src="<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->calltonext_section_image); ?>" />
		</div>
	</section>

	<section class="second-section-resp-social call-to-next-anchor">
		<div class="second-section-wrapper" id="second_section_wrapper">
			<div class="second-section-text-wrapper">
				<h4 class="second-section-text"><?php echo $object->call_text_secion; ?></h4>
			</div>
		</div>
	</section>

	<section class="resp-social-campaign-01" id="resp-social-campaign-01">
		<div class="resp-social-wrapper" id="resp-social-wrapper-01">
			<div class="resp-social-col01-wrapper" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section1_image); ?>); background-position: center">
				<div class="resp-social-campaign-short-text">
					<h4><?php echo $object->section1_title; ?></h4>
					<p class="line-clamp line-clamp-8"><?php echo $object->section1_short_text; ?></p>
				</div>
				<div class="resp-social-campaign-btn">
					<div class="btn-resp-social-know-more campaign-01"><p>Saiba Mais</p></div>
				</div>
				<div class="resp-social-campaign-logo" id="resp-social-logo-01">
					<img src="<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section1_campaign_logo); ?>" />
				</div>
			</div>
			<div class="resp-social-col02-wrapper">
				<div class="resp-social-video-wrapper resp-social-bg-wrapper resp-social-vd-bg-wrapper-01"  style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/sections/responsabilidade-social/resp-social-iomp.jpg'); ?>; background-position: center top">

					<?php $video = MY_Controller_CMS::get_path_file('social_responsability/video', $object->section1_video); ?>

					<?php if (!empty($video) && strstr($video, '.mp4')): ?>

						<video id="video-resp-social-iomp" class="video-resp-social-iomp video-resp-social-campaigns video-resp-social-campaign-01" autoplay loop>
							<source src="<?php echo $video; ?>" type="video/mp4">
						</video>

					<?php endif ?>


					<div class="resp-social-site-redirect">
						<div class="resp-social-site-redirect-wrapper">
							<span><a href="<?php echo $object->section1_link; ?>" target="_blank"><?php echo $object->section1_text_link; ?></a></span>
						</div>
					</div>
					<div class="resp-social-social-footer">
						<div class="social-network-wrapper">
							<div class="social-network-col01">
								<div class="display-inline-block">
									<div class="fb-logo" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section1_social_media1_icon); ?>); background-position: center"></div>
									<div class="fb-link"><span><a href="<?php echo $object->section1_social_media1_link; ?>" target="_blank"><?php echo $object->section1_social_media1_text_link; ?></a></span></div>
								</div>
							</div>
							<div class="social-network-col02">
								<div class="display-inline-block">
									<div class="ig-logo" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section1_social_media2_icon); ?>); background-position: center"></div>
									<div class="ig-link"><span><a href="<?php echo $object->section1_social_media2_link; ?>" target="_blank"><?php echo $object->section1_social_media2_text_link; ?></a></span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="resp-social-description resp-social-description-campaign-01">
						<div class="close-resp-social-description close-description-campaign-01"><p>Fechar</p></div>
						<div class="resp-social-description-text-campaign-01">
							<p>A Marjan Farma investe no desenvolvimento integral do Ser Humano, através de diversas ações, entre elas o apoio e compromisso com o Instituto Olinto Marques de Paulo, Organização Social de Interesse Público que tem por objetivo principal a promoção e o incentivo de projetos ligados à área da Educação, diretamente ou mediante o apoio de entidades com o mesmo foco de atuação, visando sempre a formação de uma sociedade consciente do seu papel transformador.<br><br>Por meio do Instituto OMP, através de projetos de resgate e valorização da infância, realizando formação continuada para educadores da rede pública – Educação Infantil e projeto de musicalização para crianças e adolescentes mais de 10 mil pessoas foram beneficiadas diretamente.<br><br>E não para por aí, preocupado com o distanciamento das crianças com a natureza, o Instituto OMP com o total apoio da Marjan Farma iniciou o Projeto Arvore Generosa, que visa o plantio de uma árvore para cada criança da cidade de São Paulo. Afinal se o futuro depende das crianças que estão sendo formadas hoje e se essas crianças não brincam na natureza, elas também não se preocuparão em protegê-las.<br><br>Deste modo, o Projeto Árvore Generosa, não quer só um plantio de uma árvore, que por si só, já seria maravilhoso. O projeto quer fortalecer a relação entre criança e natureza desde o início de suas vidas, desejando que cada criança tenha sua própria árvore, fomentando sensibilidade, encantamento e respeito.</p>
						</div>
						<div class="btn-go-to-campaign"><a href="http://www.instituto-omp.org.br" target="_blank">instituto-omp.org.br</a></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="resp-social-campaign-02" id="resp-social-campaign-02">
		<div class="resp-social-wrapper" id="resp-social-wrapper-02">
			<div class="resp-social-col02-wrapper">
				<div class="resp-social-video-wrapper resp-social-bg-wrapper resp-social-vd-bg-wrapper-02"  style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section2_image); ?>); background-position: center">

					<?php $video = MY_Controller_CMS::get_path_file('social_responsability/video', $object->section2_video); ?>

					<?php if (!empty($video) && strstr($video, '.mp4')): ?>

						<video id="video-resp-social-scm" class="video-resp-social-scm video-resp-social-campaigns video-resp-social-campaign-02" autoplay loop>
							<source src="<?php echo $video; ?>" type="video/mp4">
						</video>

					<?php endif ?>

					<div class="resp-social-site-redirect">
						<div class="resp-social-site-redirect-wrapper">
							<span><a href="<?php echo $object->section2_link; ?>" target="_blank"><?php echo $object->section2_text_link; ?></a></span>
						</div>
					</div>
					<div class="resp-social-social-footer">
						<div class="social-network-wrapper">
							<div class="social-network-col01">
								<div class="display-inline-block">
									<div class="fb-logo" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section2_social_media1_icon); ?>); background-position: center"></div>
									<div class="fb-link"><span><a href="<?php echo $object->section2_social_media1_link; ?>" target="_blank"><?php echo $object->section2_social_media1_text_link; ?></a></span></div>
								</div>
							</div>
							<div class="social-network-col02">
								<div class="display-inline-block">
									<div class="ig-logo" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section2_social_media2_icon); ?>); background-position: center"></div>
									<div class="ig-link"><span><a href="<?php echo $object->section2_social_media2_link; ?>" target="_blank"><?php echo $object->section2_social_media2_text_link; ?></a></span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="resp-social-description resp-social-description-campaign-02">
						<div class="close-resp-social-description close-description-campaign-02"><p>Fechar</p></div>
						<div class="resp-social-description-text-campaign-02">
						<p>CAMPANHA SAÚDE DO CORAÇÃO DA MULHER<br><br>Até pouco tempo, havia o mito de que problemas do coração eram próprios dos homens. Uma realidade que se alterou bastante nas últimas gerações. Com a mudança no estilo de vida, as mulheres passaram a exercer um novo papel, que representou importante conquista histórica para o sexo feminino. Por outro lado, também atingiu diretamente a saúde do coração, com o consequente aumento do risco de problemas cardíacos.</p><p><b>PORQUE SE PREOCUPAR?</b></p><p>As doenças cardiovasculares na mulher já ultrapassam as estatísticas dos tumores de mama e útero.<br><br>Segundo dados recentes da Organização Mundial da Saúde (OMS), respondem por um terço das mortes no mundo, com 8,5 milhões de óbitos por ano, ou seja, mais de 23 mil mulheres por dia.<br><br>Entre as brasileiras, principalmente acima dos 40 anos, as cardiopatias chegam a representar 30% das causas de morte, a maior taxa da América Latina.<br><br>AQUI A VIDA BATE MAIS FORTE</p>
						</div>
						<div class="btn-go-to-campaign"><a href="<?php echo $object->section2_link; ?>" target="_blank">Ir para Campanha</a></div>
					</div>
				</div>
			</div>
			<div class="resp-social-col01-wrapper" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section2_image); ?>); background-position: center">
				<div class="resp-social-campaign-short-text">
					<h4><?php echo $object->section2_title; ?></h4>
					<p class="line-clamp line-clamp-8"><?php echo $object->section2_short_text; ?></p>
				</div>
				<div class="resp-social-campaign-btn">
					<div class="btn-resp-social-know-more campaign-02"><p>Saiba Mais</p></div>
				</div>
				<div class="resp-social-campaign-logo" id="resp-social-logo-02">
					<img src="<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section2_campaign_logo); ?>" />
				</div>
			</div>
		</div>
	</section>

	<section class="resp-social-campaign-03"  id="resp-social-campaign-03">
		<div class="resp-social-wrapper" id="resp-social-wrapper-03">
			<div class="resp-social-col01-wrapper" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section3_image); ?> ); background-position: center">
				<div class="resp-social-campaign-short-text">
					<h4><?php echo $object->section3_title; ?></h4>
					<p class="line-clamp line-clamp-8"><?php echo $object->section3_short_text; ?></p>
				</div>
				<div class="resp-social-campaign-btn">
					<div class="btn-resp-social-know-more campaign-03"><p>Saiba Mais</p></div>
				</div>
				<div class="resp-social-campaign-logo" id="resp-social-logo-03"><
					<img src="<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section3_campaign_logo); ?>" />
				</div>
			</div>
			<div class="resp-social-col02-wrapper">
				<div class="resp-social-video-wrapper resp-social-bg-wrapper resp-social-vd-bg-wrapper-03"  style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section3_image); ?>); background-position: center top">

					<?php $video = MY_Controller_CMS::get_path_file('social_responsability/video', $object->section3_video); ?>

					<?php if (!empty($video) && strstr($video, '.mp4')): ?>

						<video id="video-resp-social-agv" class="video-resp-social-agv video-resp-social-campaigns video-resp-social-campaign-03" autoplay loop>
							<source src="<?php echo $video; ?>" type="video/mp4">
						</video>

					<?php endif ?>

					<div class="resp-social-site-redirect">
						<div class="resp-social-site-redirect-wrapper">
							<span><a href="<?php echo $object->section3_link; ?>" target="_blank"><?php echo $object->section3_text_link; ?></a></span>
						</div>
					</div>
					<div class="resp-social-social-footer">
						<div class="social-network-wrapper">
							<div class="social-network-col01">
								<div class="display-inline-block">
									<div class="fb-logo" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section3_social_media1_icon); ?>); background-position: center"></div>
									<div class="fb-link"><span><a href="<?php echo $object->section3_social_media1_link; ?>" target="_blank"><?php echo $object->section3_social_media1_text_link; ?></a></span></div>
								</div>
							</div>
							<div class="social-network-col02">
								<div class="display-inline-block">
									<div class="ig-logo" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section3_social_media2_icon); ?>); background-position: center"></div>
									<div class="ig-link"><span><a href="<?php echo $object->section3_social_media2_link; ?>" target="_blank"><?php echo $object->section3_social_media2_text_link; ?></a></span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="resp-social-description resp-social-description-campaign-03">
						<div class="close-resp-social-description close-description-campaign-03"><p>Fechar</p></div>
						<div class="resp-social-description-text-campaign-03">
						<p>UMA ÁRVORE PARA CADA CRIANÇA DE SÃO PAULO<br><br>O Projeto Árvore Generosa quer plantar uma árvore nativa para cada criança de São Paulo. Não só o plantio na terra, mas principalmente no coração da criançada. Afinal, como bem dizia Rubem Alves “Todo jardim começa com uma história de amor. Antes que qualquer árvore seja plantada, é preciso que ela tenha nascido dentro da alma. Quem não planta jardim por dentro, não planta jardins por fora e nem passeia por eles”.<br><br>O objetivo é fortalecer a relação entre criança e natureza desde o início de suas vidas, promovendo sensibilidade, encantamento e respeito, pelo ser vivo (árvore) que está crescendo junto com a criança.<br><br>O projeto é realizado por meio de parcerias com iniciativas privadas, poder público e sociedade civil em geral, através de distribuição de mudas nativas e/ou plantios coletivos onde a criança e a família são convidadas para participar.</p>
						</div>
						<div class="btn-go-to-campaign"><a href="<?php echo $object->section3_link; ?>" target="_blank">Ir para Campanha</a></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="resp-social-campaign-04" id="resp-social-campaign-04">
		<div class="resp-social-wrapper" id="resp-social-wrapper-04">
			<div class="resp-social-col02-wrapper">
				<div class="resp-social-video-wrapper resp-social-bg-wrapper resp-social-vd-bg-wrapper-04"  style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section4_image); ?>); background-position: center top">

					<?php $video = MY_Controller_CMS::get_path_file('social_responsability/video', $object->section4_video); ?>

					<?php if (!empty($video) && strstr($video, '.mp4')): ?>

						<video id="video-resp-social-saf" class="video-resp-social-saf video-resp-social-campaigns video-resp-social-campaign-04" autoplay loop>
							<source src="<?php echo $video; ?>" type="video/mp4">
						</video>

					<?php endif ?>

					<div class="resp-social-site-redirect">
						<div class="resp-social-site-redirect-wrapper">
							<span><a href="<?php echo $object->section4_link; ?>" target="_blank"><?php echo $object->section4_text_link; ?></a></span>
						</div>
					</div>
					<div class="resp-social-social-footer">
						<div class="social-network-wrapper">
							<div class="social-network-col01">
								<div class="display-inline-block">
									<div class="fb-logo" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section4_social_media1_icon); ?>); background-position: center"></div>
									<div class="fb-link"><span><a href="<?php echo $object->section4_social_media1_link; ?>" target="_blank"><?php echo $object->section4_social_media1_text_link; ?></a></span></div>
								</div>
							</div>
							<div class="social-network-col02">
								<div class="display-inline-block">
									<div class="ig-logo" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section4_social_media2_icon); ?>); background-position: center"></div>
									<div class="ig-link"><span><a href="<?php echo $object->section4_social_media2_link; ?>" target="_blank"><?php echo $object->section4_social_media2_text_link; ?></a></span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="resp-social-description resp-social-description-campaign-04">
						<div class="close-resp-social-description close-description-campaign-04"><p>Fechar</p></div>
						<div class="resp-social-description-text-campaign-04">
						<p>O consumo de álcool por uma mulher grávida tem grandes possibilidades de atingir o feto, levando-o a apresentar várias alterações em órgãos do corpo, bem como desordens de comportamento que são conhecidas como Síndrome Alcoólica Fetal (SAF) e não têm cura.<br><br>Bebês que nascem com SAF têm alterações na face, em órgãos do corpo, podem nascer com peso abaixo do normal e ter retardo mental. Eles têm problemas de aprendizagem, memória, fala, audição, atenção e alterações de comportamento, que se mostram principalmente na idade escolar, e no relacionamento com outras pessoas.<br><br>Mas nem todos os bebês apresentam todos os sintomas da SAF!Muitas vezes são reconhecidos tardiamente e recebem várias denominações como SAF parcial ou espectro de alterações relacionadas ao álcool.Em determinadas situações a mãe pode expor o bebê ao álcool antes mesmo de saber que está grávida, por isso é importante não ingerir bebida alcoólica quando há intenção de engravidar.<br><br>Se a mãe descobriu a gravidez após ingerir bebida alcoólica, o ideal é parar imediatamente. Nunca é tarde para parar. O quanto antes parar de beber, melhor para a gestante e para o bebê.Mas há que lembrar: A exposição ao álcool durante a gestação não resulta necessariamente em SAF. O principal problema é que não se conhecem níveis seguros de consumo de álcool durante a gravidez, abaixo dos quais o feto não será afetado. Portanto, não há tolerância.</p>
						</div>
						<div class="btn-go-to-campaign"><a href="<?php echo $object->section4_link; ?>" target="_blank">Ir para Campanha</a></div>
					</div>
				</div>
			</div>
			<div class="resp-social-col01-wrapper" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/sections/responsabilidade-social/resp-social-iomp-side.png'); ?>); background-position: center">
				<div class="resp-social-campaign-short-text">
					<h4><?php echo $object->section4_title; ?></h4>
					<p class="line-clamp line-clamp-8"><?php echo $object->section4_short_text; ?></p>
				</div>
				<div class="resp-social-campaign-btn">
					<div class="btn-resp-social-know-more campaign-04"><p>Saiba Mais</p></div>
				</div>
				<div class="resp-social-campaign-logo" id="resp-social-logo-04">
					<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/responsabilidade-social/logo-saf.png'); ?>" />
				</div>
			</div>
		</div>
	</section>

</main>