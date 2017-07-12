<main class="main-contact">

	<section class="first-section-contact">
		<div class="first-section-wrapper" id="first_section_wrapper" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('contact_us', $object->principal_image); ?>); background-position: center;">
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
			<img src="<?php echo MY_Controller_CMS::get_path_file('contact_us', $object->calltonext_section_image); ?>" />
		</div>
	</section>

	<section class="second-section-contact call-to-next-anchor">
		<div class="second-section-wrapper" id="second_section_wrapper">
			<div class="second-section-text-wrapper">
				<h4 class="second-section-text"><?php echo $object->call_text_secion; ?></h4>
			</div>
		</div>
	</section>

	<section class="third-section-contact contact-sac-call-to-action">
		<div class="third-section-wrapper" id="third_section_wrapper_contact_sac">
			<div class="third-filter-wrapper">
				<div class="third-section-col-01 border-top-left" id="third-section-col-01" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('contact_us', $object->section1_image); ?>); background-position: center;">
				</div>
				<div class="third-section-col-02 border-top-right">
					<div class="third-section-col-01-title center-text">
						<h4><?php echo $object->section1_title; ?></h4>
					</div>
					<div class="third-section-col-01-button center-text">
						<button><h6><?php echo $object->section1_text; ?></h6></button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="third-section-contact contact-form-call-to-action">
		<div class="third-section-wrapper" id="third_section_wrapper_contact_form">
			<div class="third-filter-wrapper">
				<div class="third-section-col-02 border-left">
					<div class="third-section-col-01-title center-text">
						<h4><?php echo $object->section2_title; ?></h4>
					</div>
					<div class="third-section-col-01-button center-text">
						<button class="btn-show-form"><h6><?php echo $object->section2_text; ?></h6></button>
					</div>
				</div>
				<div class="third-section-col-01 border-right" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('contact_us', $object->section2_image); ?>); background-position: center;">
				</div>
			</div>
		</div>
	</section>

	<section class="third-section-contact contact-form-input">
		<div class="third-section-wrapper" id="third_section_wrapper_contact_form_input">
			<div class="contact-form-wrapper">
				<div class="third-section-col-02 border-left">
					<div class="close-ct-form"><p>[x] fechar</p></div>
					<div class="third-section-col-01-form center-text">
						<div class="third-section-col-01-title text-left">
							<h5>FORMULÁRIO DE CONTATO</h5>
						</div>
						<form id="ctc-form" method="post" action="../../email/send.php">
							<ul class="form-caption">
								<li><p><font style="color: #f26522">*</font> Nome:</p></li>
								<li><p><font style="color: #f26522">*</font> E-mail:</p></li>
								<li><p><font style="color: #f26522">*</font> Telefone:</p></li>
								<li><p><font style="color: #f26522">*</font> Gênero:</p></li>
								<li><p><font style="color: #f26522">*</font> UF:</p></li>
								<li><p><font style="color: #f26522">*</font> Assunto:</p></li>
							</ul>
							<ul class="form-inputs">
								<li><input placeholder="" name="name" required/></li>
								<li><input placeholder="" name="email" required/></li>
								<li><input placeholder="" name="phone" required/></li>
								<li><select name="genre" id="ct-frm-genre" required>
									<option value="">Selecione</option>
									<option value="Masculino">Masculino</option>
									<option value="Feminino">Feminino</option>
								</select></li>
								<li><select name="state" id="ct-frm-state" required>
									<option value="">Selecione</option>
									<option value="AC">AC</option><option value="AL">AL</option><option value="AM">AM</option>
									<option value="AP">AP</option><option value="BA">BA</option><option value="CE">CE</option>
									<option value="DF">DF</option><option value="ES">ES</option><option value="GO">GO</option>
									<option value="MA">MA</option><option value="MG">MG</option><option value="MS">MS</option>
									<option value="MT">MT</option><option value="PA">PA</option><option value="PB">PB</option>
									<option value="PE">PE</option><option value="PI">PI</option><option value="PR">PR</option>
									<option value="RJ">RJ</option><option value="RN">RN</option><option value="RS">RS</option>
									<option value="RO">RO</option><option value="RR">RR</option><option value="SC">SC</option>
									<option value="SE">SE</option><option value="SP">SP</option><option value="TO">TO</option>
								</select></li>
								<li><textarea name="message" required></textarea></li>
							</ul>
							<div class="third-section-col-01-button-form center-text">
								<input type="submit" class="send-user-form" id="send-ct-form" value="ENVIAR">
							</div>
						</form>
					</div>
				</div>
				<div class="third-section-col-01 border-right">
				</div>
			</div>
		</div>
	</section>

	<section class="third-section-contact contact-farm-vigil-call-to-action">
		<div class="third-section-wrapper" id="third_section_wrapper_contact_farm_vigil">
			<div class="third-filter-wrapper">
				<div class="third-section-col-01 border-left" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('contact_us', $object->section3_image); ?>); background-position: right center;">
				</div>
				<div class="third-section-col-02 border-right">
					<div class="third-section-col-01-title center-text">
						<h4><?php echo $object->section3_title; ?></h4>
					</div>

					<div class="third-section-col-01-button center-text">
						<a href="<?php echo base_url('farmacovigilancia') ?>"><button><h6><?php echo $object->section3_text; ?></h6></button></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="third-section-contact contact-social-net-call-to-action">
		<div class="third-section-wrapper" id="third_section_wrapper_contact_social_net">
			<div class="third-filter-wrapper">
				<div class="third-section-col-02 border-bottom-left">
					<div class="third-section-col-01-title center-text">
						<h4><?php echo $object->section4_title; ?></h4>
					</div>
					<div class="third-section-col-01-button center-text">
						<div class="health-social-footer">
							<div class="social-network-wrapper">
								<div class="social-network-col01">
									<div class="display-inline-block">
										<div class="fb-logo" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('contact_us', $object->section4_social_media1_icon); ?>); background-position: center"></div>
										<div class="fb-link"><span><a href="<?php echo $object->section4_social_media1_link; ?>" target="_blank"><?php echo $object->section4_social_media1_text_link; ?></a></span></div>
									</div>
								</div>
								<div class="social-network-col02">
									<div class="display-inline-block">
										<div class="ig-logo" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('contact_us', $object->section4_social_media2_icon); ?>); background-position: center"></div>
										<div class="ig-link"><span><a href="<?php echo $object->section4_social_media2_link; ?>" target="_blank"><?php echo $object->section4_social_media2_text_link; ?></a></span></div>
									</div>
								</div>
								<div class="social-network-col03">
									<div class="display-inline-block">
										<div class="in-logo" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('contact_us', $object->section4_social_media3_icon); ?>); background-position: center"></div>
										<div class="in-link"><span><a href="<?php echo $object->section4_social_media3_link; ?>" target="_blank"><?php echo $object->section4_social_media3_text_link; ?></a></span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="third-section-col-01 border-bottom-right" id="third-section-col-01" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('contact_us', $object->section4_image); ?>); background-position: left center;">
				</div>
			</div>
		</div>
	</section>

</main>