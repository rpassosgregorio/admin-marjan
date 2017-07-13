<main class="main-career">

	<section class="first-section-career">
		<div class="first-section-wrapper" id="first_section_wrapper" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('career', $object->principal_image); ?>); background-position: center;">
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
			<img src="<?php echo MY_Controller_CMS::get_path_file('career', $object->calltonext_section_image); ?>" />
		</div>
	</section>

	<section class="second-section-career call-to-next-anchor">
		<div class="second-section-wrapper" id="second_section_wrapper">
			<div class="second-section-text-wrapper">
				<h4 class="second-section-text"><?php echo $object->call_text_secion; ?></h4>
			</div>
		</div>
	</section>

	<section class="third-section-career career-why-work-at-marjan">
		<div class="third-section-wrapper" id="third_section_wrapper_career_sac">
			<div class="third-filter-wrapper">
				<div class="third-section-col-02 border-top-left">
					<div class="third-section-col-01-title center-text">
						<h4><?php echo $object->section1_title; ?></h4>
					</div>
					<div class="third-section-col-01-subtitle text-left">
						<h5><?php echo $object->section1_text; ?></h5>
					</div>
					<div class="third-section-col-01-button center-text">
						<a href="<?php echo $object->section1_button_link; ?>" target="_blank"><button><h6><?php echo $object->section1_button_text; ?></h6></button></a>
					</div>
				</div>
				<div class="third-section-col-01 border-top-right" id="third-section-col-01" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('career', $object->section1_image); ?>); background-position: left center;">
				</div>
			</div>
		</div>
	</section>

	<section class="third-section-career career-talent-development">
		<div class="third-section-wrapper" id="third_section_wrapper_career_form">
			<div class="third-filter-wrapper">
				<div class="third-section-col-01 border-left" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('career', $object->section2_image); ?>); background-position: center;">
				</div>
				<div class="third-section-col-02 border-right">
					<div class="third-section-col-01-title center-text">
						<h4><?php echo $object->section2_title; ?></h4>
					</div>
					<div class="third-section-col-01-subtitle text-left">
						<h5><?php echo $object->section2_text; ?></h5>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="third-section-career career-benefits">
		<div class="third-section-wrapper" id="third_section_wrapper_career_farm_vigil">
			<div class="third-filter-wrapper">
				<div class="third-section-col-02 border-left">
					<div class="third-section-col-01-title center-text">
						<h4><?php echo $object->section3_title; ?></h4>
					</div>
					<div class="third-section-col-01-subtitle text-left">
						<h5><?php echo $object->section3_text; ?></h5>
					</div>
				</div>
				<div class="third-section-col-01 border-right" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('career', $object->section3_image); ?>); background-position: center;">
				</div>
			</div>
		</div>
	</section>

	<section class="third-section-career career-benefits">
		<div class="third-section-wrapper" id="third_section_wrapper_career_farm_vigil">
			<div class="third-filter-wrapper">
				<div class="third-section-col-01 border-bottom-left" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('career', $object->section4_image); ?>); background-position: right center;">
				</div>
				<div class="third-section-col-02 border-bottom-right">
					<div class="third-section-col-01-title center-text">
						<h4><?php echo $object->section4_title; ?></h4>
					</div>
					<div class="third-section-col-01-subtitle text-left">
						<h5><?php echo $object->section4_text; ?></h5>
					</div>
					<div class="third-section-col-01-button center-text">
						<a href="<?php echo $object->section4_button_link; ?>" target="_blank"><button><h6><?php echo $object->section4_button_text; ?></h6></button></a>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>