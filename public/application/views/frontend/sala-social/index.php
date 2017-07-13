<main class="main-health-doctors">

	<section class="first-section-health-doctors">
		<div class="first-section-wrapper" id="first_section_wrapper" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('social_room', $object->principal_image); ?>); background-position: center;">
			<div class="info-wrapper">
				<div class="info-container">
					<div class="page-info text title" id="title_about_us_values" >
						<h3 class="pre-line"><?php echo $object->principal_left_text; ?></h3>
					</div>
					<div class="page-info text sub-title" id="text_about_us_values" >
						<h4 class="pre-line"><?php echo $object->principal_right_text; ?></h4>
					</div>
				</div>
			</div>

		</div>

		<div class="call-to-next" id="call_to_next">
			<img src="<?php echo MY_Controller_CMS::get_path_file('social_room', $object->calltonext_section_image); ?>" />
		</div>
	</section>

	<section class="second-section-health-doctors call-to-next-anchor">
		<div class="second-section-wrapper" id="second_section_wrapper">
			<div class="second-section-text-wrapper">
				<h4 class="second-section-text">Veja nossos últimos posts e acesse nossas principais redes sociais<br><a href="http://www.facebook.com/marjanfarma" target="_blank">Facebook</a>, <a href="http://www.instagram.com/farmamarjan" target="_blank">Instagram</a>, <a href="https://br.linkedin.com/company/marjan-farma" target="_blank">LinkedIn</a> e <a href="" target="_blank">Twitter</a></h4>
			</div>
		</div>
	</section>

	<section class="third-section-products">
		<div id="social-stream"></div>
	</section>

	<section>
		<div class="separator-know-more"></div>
	</section>

</main>