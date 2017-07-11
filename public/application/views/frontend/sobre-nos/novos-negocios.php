<main class="main-contact">

	<section class="first-section-contact">
		<div class="first-section-wrapper" id="first_section_wrapper" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('new_business', $object->principal_image); ?>); background-position: center;">
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
			<img src="<?php echo MY_Controller_CMS::get_path_file('new_business', $object->calltonext_section_image); ?>" />
		</div>
	</section>

	<section class="second-section-contact call-to-next-anchor">
		<div class="second-section-wrapper" id="second_section_wrapper">
			<div class="second-section-text-wrapper">
				<!--<h4 class="second-section-text">Aqui na Marjan Farma estamos prontos a atendê-lo<br>da melhor forma possível</h4>-->
				<div class="col-pv-01">
					<p><?php echo $object->call_text_secion; ?></p>
					<div class="contact-form-wrapper">
						<div class="third-section-col-02">
							<div class="third-section-col-01-form center-text">
								<!--<div class="third-section-col-01-title">
									<h5>FORMULÁRIO DE CONTATO</h5>
								</div>-->
								<form id="novos-negocios-form" class="novos-negocios-form" method="post" action="../../email/send.php">
									<ul class="form-caption">
										<li><p><font style="color: #f26522">*</font> Nome da empresa:</p></li>
										<li><p><font style="color: #f26522">*</font> Área de atuação:</p></li>
										<li><p><font style="color: #f26522">*</font> Nome de contato:</p></li>
										<li><p><font style="color: #f26522">*</font> Cargo:</p></li>
										<li><p><font style="color: #f26522">*</font> E-mail:</p></li>
										<li><p><font style="color: #f26522">*</font> Telefone:</p></li>
										<li><p><font style="color: #f26522">*</font> Ramal:</p></li>
										<li><p><font style="color: #f26522">*</font> País:</p></li>
										<li><p><font style="color: #f26522">*</font> Cidade:</p></li>
										<li><p><font style="color: #f26522">*</font> UF:</p></li>
										<li><p><font style="color: #f26522">*</font> Endereço:</p></li>
										<li><p><font style="color: #f26522">*</font> Assunto:</p></li>
									</ul>
									<ul class="form-inputs">
										<li><input placeholder="" name="entreprise_name" required/></li>
										<li><input placeholder="" name="act_area" required/></li>
										<li><input placeholder="" name="name" required/></li>
										<li><input placeholder="" name="role" required/></li>
										<li><input placeholder="" name="email" required/></li>
										<li><input placeholder="" name="phone" required/></li>
										<li><input placeholder="" name="branch" required/></li>
										<li><input placeholder="" name="country" required/></li>
										<li><input placeholder="" name="city" required/></li>
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
										<li><input placeholder="" name="address" required/></li>
										<li><textarea name="message" required></textarea></li>
										<input type="submit" class="send-user-form" id="send-ct-form" value="ENVIAR">
									</ul>
									<div class="third-section-col-01-button-form center-text">

									</div>
								</form>
							</div>
						</div>
					</div>
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