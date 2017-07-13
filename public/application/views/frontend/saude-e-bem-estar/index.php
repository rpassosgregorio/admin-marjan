<main class="main-health">

	<section class="first-section-health">
		<div class="first-section-wrapper" id="first_section_wrapper" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('health_wellness', $object->principal_image); ?> ); background-position: center center;">
			<div class="info-wrapper">
				<div class="info-container">
					<div class="page-info text title" id="top_title_health" >
						<h4 class="pre-line"><?php echo $object->principal_left_text; ?></h4>
					</div>
					<div class="page-info text sub-title" id="top_subtitle_health" >
						<h4 class="pre-line"><?php echo $object->principal_right_text; ?></h4>
					</div>
				</div>
			</div>
		</div>

		<div class="call-to-next" id="call_to_next">
			<img src="<?php echo MY_Controller_CMS::get_path_file('health_wellness', $object->calltonext_section_image); ?>" />
		</div>
	</section>

	<section class="second-section-health call-to-next-anchor">
		<div class="second-section-wrapper" id="second_section_wrapper">
			<div class="second-section-text-wrapper">
				<h4 class="second-section-text"><?php echo $object->call_text_secion; ?></h4>
			</div>
		</div>
	</section>

	<section class="health-campaign-01" id="health-campaign-01">
		<div class="health-wrapper" id="health-wrapper-01">
			<div class="health-col01-wrapper" style="background-image: url(../../img/sections/saude-e-bem-estar/health-sidebar-blue.png); background-position: center">
				<div class="health-campaign-short-text">
					<h4><?php echo $object->section1_title; ?></h4>
					<p class="line-clamp line-clamp-8"><?php echo $object->section1_short_text; ?></p>
				</div>
				<div class="health-campaign-btn">
					<div class="btn-health-know-more campaign-01"><p>Saiba Mais</p></div>
				</div>
				<div class="health-campaign-logo" id="health-logo-01">
					<img src="<?php echo MY_Controller_CMS::get_path_file('health_wellness', $object->section1_campaign_logo); ?>" />
				</div>
			</div>
			<div class="health-col02-wrapper" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('health_wellness', $object->section1_image); ?>); background-position: center">
				<div class="health-site-redirect">
					<div class="health-site-redirect-wrapper">
						<span><a href="<?php echo $object->section1_link; ?>" target="_blank"><?php echo $object->section1_text_link; ?></a></span>
					</div>
				</div>
				<div class="health-social-footer">
					<div class="social-network-wrapper">
						<div class="social-network-col01">
							<div class="display-inline-block">
								<div class="fb-logo" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('health_wellness', $object->section1_social_media1_icon); ?>); background-position: center"></div>
								<div class="fb-link"><span><a href="<?php echo $object->section1_social_media1_link; ?>" target="_blank"><?php echo $object->section1_social_media1_text_link; ?></a></span></div>
							</div>
						</div>
						<div class="social-network-col02">
							<div class="display-inline-block">
								<div class="ig-logo" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('health_wellness', $object->section1_social_media2_icon); ?>); background-position: center"></div>
								<div class="ig-link"><span><a href="<?php echo $object->section1_social_media2_link; ?>" target="_blank"><?php echo $object->section1_social_media2_text_link; ?></a></span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="health-description health-description-campaign-01">
					<div class="close-health-description close-description-campaign-01"><p>Fechar</p></div>
					<div class="health-description-text-campaign-01">
						<p><?php echo $object->section1_text; ?></p>
					</div>
					<div class="btn-go-to-campaign"><a href="http://www.instituto-omp.org.br" target="_blank">instituto-omp.org.br</a></div>
				</div>
			</div>
		</div>
	</section>

	<section class="health-campaign-02" id="health-campaign-02">
		<div class="health-wrapper" id="health-wrapper-02">
			<div class="health-col02-wrapper" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('health_wellness', $object->section2_image); ?>); background-position: center">
				<div class="health-site-redirect">
					<div class="health-site-redirect-wrapper">
						<span><a href="<?php echo $object->section2_link ?>" target="_blank"><?php echo $object->section2_text_link; ?></a></span>
					</div>
				</div>
				<div class="health-social-footer">
					<div class="social-network-wrapper">
						<div class="social-network-col01">
							<div class="display-inline-block">
								<div class="fb-logo" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('health_wellness', $object->section2_social_media1_icon); ?>); background-position: center"></div>
								<div class="fb-link"><span><a href="<?php echo $object->section2_social_media1_link; ?>" target="_blank"><?php echo $object->section2_social_media1_text_link; ?></a></span></div>
							</div>
						</div>
						<div class="social-network-col02">
							<div class="display-inline-block">
								<div class="ig-logo" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('health_wellness', $object->section2_social_media2_icon); ?>); background-position: center"></div>
								<div class="ig-link"><span><a href="<?php echo $object->section2_social_media2_link; ?>" target="_blank"><?php echo $object->section2_social_media2_text_link; ?></a></span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="health-description health-description-campaign-02">
					<div class="close-health-description close-description-campaign-02"><p>Fechar</p></div>
					<div class="health-description-text-campaign-02">
						<p><p><?php echo $object->section2_text; ?></p></p>
					</div>
					<div class="btn-go-to-campaign"><a href="<?php echo $object->section2_link ?>" target="_blank">Ir para Campanha</a></div>
				</div>
			</div>
			<div class="health-col01-wrapper" style="background-image: url(../../img/sections/saude-e-bem-estar/health-sidebar-blue.png); background-position: center">
				<div class="health-campaign-short-text">
					<h4><?php echo $object->section2_title; ?></h4>
					<p class="line-clamp line-clamp-8"><?php echo $object->section2_short_text; ?></p>
				</div>
				<div class="health-campaign-btn">
					<div class="btn-health-know-more campaign-02"><p>Saiba Mais</p></div>
				</div>
				<div class="health-campaign-logo" id="health-logo-01">
					<img src="<?php echo MY_Controller_CMS::get_path_file('health_wellness', $object->section2_campaign_logo); ?>"" />
				</div>
			</div>
		</div>
	</section>

	<section class="health-campaign-03" id="health-campaign-03">
		<div class="health-wrapper" id="health-wrapper-03">
			<div class="health-col01-wrapper" style="background-image: url(../../img/sections/saude-e-bem-estar/health-sidebar-blue.png); background-position: center">
				<div class="health-campaign-short-text">
					<h4><?php echo $object->section3_title; ?></h4>
					<p class="line-clamp line-clamp-8"><?php echo $object->section3_short_text; ?></p>
				</div>
				<div class="health-campaign-btn">
					<div class="btn-health-know-more campaign-03"><p>Saiba Mais</p></div>
				</div>
				<div class="health-campaign-logo" id="health-logo-03">
					<img src="<?php echo MY_Controller_CMS::get_path_file('health_wellness', $object->section3_campaign_logo); ?>" />
				</div>
			</div>
			<div class="health-col02-wrapper" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('health_wellness', $object->section3_image); ?>); background-position: center top">
				<div class="health-site-redirect">
					<div class="health-site-redirect-wrapper">
						<span><a href="<?php echo $object->section3_link; ?>" target="_blank"><?php echo $object->section3_text_link; ?></a></span>
					</div>
				</div>
				<div class="health-social-footer">
					<div class="social-network-wrapper">
						<div class="social-network-col01">
							<div class="display-inline-block">
								<div class="fb-logo" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('health_wellness', $object->section3_social_media1_icon); ?>); background-position: center"></div>
								<div class="fb-link"><span><a href="<?php echo $object->section3_social_media1_link; ?>" target="_blank"><?php echo $object->section3_social_media1_text_link; ?></a></span></div>
							</div>
						</div>
						<div class="social-network-col02">
							<div class="display-inline-block">
								<div class="ig-logo" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('health_wellness', $object->section3_social_media2_icon); ?>); background-position: center"></div>
								<div class="ig-link"><span><a href="<?php echo $object->section3_social_media2_link; ?>" target="_blank"><?php echo $object->section3_social_media2_text_link; ?></a></span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="health-description health-description-campaign-03">
					<div class="close-health-description close-description-campaign-03"><p>Fechar</p></div>
					<div class="health-description-text-campaign-03">
						<p><p><?php echo $object->section3_text; ?></p></p>
					</div>
					<div class="btn-go-to-campaign"><a href="<?php echo $object->section3_link; ?>" target="_blank">Ir para Campanha</a></div>
				</div>
			</div>
		</div>
	</section>

</main>