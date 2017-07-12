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
			<div class="resp-social-col01-wrapper" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/sections/responsabilidade-social/resp-social-iomp-side.png'); ?>); background-position: center">
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
				<div class="resp-social-video-wrapper resp-social-bg-wrapper resp-social-vd-bg-wrapper-01"  style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section1_image); ?>); background-position: center top">

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
							<p><?php echo $object->section1_text; ?></p>
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
						<p><p><?php echo $object->section2_text; ?></p></p>
						</div>
						<div class="btn-go-to-campaign"><a href="<?php echo $object->section2_link; ?>" target="_blank">Ir para Campanha</a></div>
					</div>
				</div>
			</div>
			<div class="resp-social-col01-wrapper" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/sections/responsabilidade-social/resp-social-iomp-side.png'); ?>); background-position: center">
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
			<div class="resp-social-col01-wrapper" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/imgs/sections/responsabilidade-social/resp-social-iomp-side.png'); ?>); background-position: center">
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
						<p><p><?php echo $object->section3_text; ?></p></p>
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
						<p><p><?php echo $object->section4_text; ?></p></p>
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