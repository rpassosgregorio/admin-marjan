<main class="main-health-doctors">

	<section class="first-section-health-doctors">
		<div class="first-section-wrapper" id="first_section_wrapper" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('health_professionals', $object->principal_image); ?>); background-position: center;">
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
			<img src="<?php echo MY_Controller_CMS::get_path_file('health_professionals', $object->calltonext_section_image); ?>" />
		</div>
	</section>

	<section class="second-section-health-doctors call-to-next-anchor">
		<div class="second-section-wrapper" id="second_section_wrapper">
			<div class="second-section-text-wrapper">
				<h4 class="second-section-text"><?php echo $object->call_text_secion; ?></h4>
			</div>
		</div>
	</section>

	<section class="third-section-products">
		<div class="third-section-wrapper" id="third_section_wrapper">
			<div class="third-filter-wrapper">
				<div class="third-section-col-01" id="third-section-col-01" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('health_professionals', $object->section1_image); ?>); background-position: left center;">
				</div>
				<div class="third-section-col-02">
					<div class="third-section-col-01-title center-text">
						<h4><?php echo $object->section1_title; ?></h4>
						<p><?php echo $object->section1_text; ?></p>
					</div>
					<div class="third-section-col-01-button center-text">
						<a href="<?php echo $object->section1_button_link; ?>" target="_blank"><button><h6><?php echo $object->section1_button_text; ?></h6></button></a>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>