<main class="main-contact">

	<section class="first-section-contact">
		<div class="first-section-wrapper" id="first_section_wrapper" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('innovation', $object->principal_image); ?>); background-position: center;">
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
			<img src="<?php echo MY_Controller_CMS::get_path_file('innovation', $object->calltonext_section_image); ?>" />
		</div>
	</section>

	<section class="second-section-contact call-to-next-anchor">
		<div class="second-section-wrapper" id="second_section_wrapper">
			<div class="second-section-text-wrapper">
				<!--<h4 class="second-section-text">Aqui na Marjan Farma estamos prontos a atendê-lo<br>da melhor forma possível</h4>-->
				<div class="col-pv-01">
					<p><?php echo $object->call_text_secion; ?></p>
				</div>
				<div class="col-pv-02">
					<div class="social-stream-wrapper">
						<div class="mj-nas-redes"><h4>Marjan nas redes</h4></div>
						<div id="social-stream-1"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>