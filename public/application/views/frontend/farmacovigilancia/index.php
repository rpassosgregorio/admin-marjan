<main class="main-contact main-farmacovigilancia">

	<section class="first-section-contact">
		<div class="first-section-wrapper" id="first_section_wrapper" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('pharmacovigilance', $object->principal_image); ?> ); background-position: center;">
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
			<img src="<?php echo MY_Controller_CMS::get_path_file('pharmacovigilance', $object->calltonext_section_image); ?>" />
		</div>
	</section>

	<section class="second-section-contact call-to-next-anchor">
		<div class="second-section-wrapper" id="second_section_wrapper">
			<div class="second-section-text-wrapper">
				<!--<h4 class="second-section-text">Aqui na Marjan Farma estamos prontos a atendê-lo<br>da melhor forma possível</h4>-->
				<div class="col-pv-01">
					<?php echo $object->left_text; ?>
				</div>
				<div class="col-pv-02">
					<?php echo $object->right_text; ?>
					<div class="col-pv-02-btn-wp">
						<button><?php echo $object->button_text; ?></button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="form-mask"></div>
		<div class="form-fv">
			<div class="form-fv-filter-wrapper">
				<div class="close-fv-form">[x] fechar</div>
				<div class="form-fv-filter">
					<h4>VOCÊ É PROFISSIONAL DA SAÚDE?</h4>
					<button id="form-fv-filter-btn-yes">Sim</button>
					<button id="form-fv-filter-btn-no">Não</button>
				</div>
				<div class="form-fv-health-doctor" id="form-fv-health-doctor">
					<div class="third-section-contact contact-form-input">
						<div class="third-section-wrapper" id="third_section_wrapper_contact_form_input">
							<div class="contact-form-wrapper">
								<div class="third-section-col-02 border-left">
									<!--<div class="third-section-col-01-subtitle text-left">
										<h4>Desde 1961 a Marjan Farma reforça<br>seu compromisso de atuar em favor da<br>melhoria da qualidade de vida.</h4>
									</div>-->
									<div class="third-section-col-01-form center-text">
										<div class="third-section-col-01-title center-text">
											<h5>FORMULÁRIO DE CONTATO<font class="form-required-obs"><br>(os campos com <font class="required-field-form">*</font> são obrigatórios)</font></h5>
										</div>
										<form class="form-fv-form" id="fv-hd-form">
											<div class="third-section-col-01-title2 text-left">
												<h5>Dados do profissional de saúde</h5>
											</div>
											<div class="form-col-01">
												<ul class="form-caption">
													<li><p>Nome Completo: <font class="required-field-form">*</font></p></li>
													<li><p>Especialidade:</p></li>
													<li><p>Tipo de Conselho:</p></li>
													<li><p>UF do Conselho:</p></li>
													<li><p>Número de Registro no conselho:</p></li>
													<li><p>E-mail:</p></li>
													<li><p>Telefone: <font class="required-field-form">*</font></p></li>
													<li><p>Celular:</p></li>
												</ul>
											</div>
											<div class="form-col-02">
												<ul class="form-inputs">
													<li><input id="hd-full-name" name="name" placeholder="" required/></li>
													<li><input id="hd-specialties" name="specialty" placeholder="" /></li>
													<li><input id="hd-type" name="advice_type" placeholder="" /></li>
													<li><select name="state" id="uf">
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
													<li><input id="hd-nbr-conselho" name="record_number" placeholder="" /></li>
													<li><input id="hd-email" name="email" placeholder="" /></li>
													<li><input id="hd-phone-nbr" name="phone" placeholder="" required/></li>
													<li><input id="hd-cel-nbr" name="mobile" placeholder="" /></li>
												</ul>
											</div>

											<div class="third-section-col-01-title2 text-left">
												<h5>Dados do paciente</h5>
											</div>
											<div class="form-col-01">
												<ul class="form-caption">
													<li><p>Nome ou iniciais:</p></li>
													<li><p>Gênero:</p></li>
													<li><p>Data de nascimento:</p></li>
												</ul>
											</div>
											<div class="form-col-02">
												<ul class="form-inputs">
													<li><input placeholder="" name="patient_name" /></li>
													<li><select name="patient_genre" id="fv-genre-form">
														<option value="">Selecione</option>
														<option value="Masculino">Masculino</option>
														<option value="Feminino">Feminino</option>
													 </select></li>
													<li><input placeholder="dd-mm-aaaa" name="patient_birth_date" type="text" id="bday-date-picker"></li>
												</ul>
											</div>

											<div class="third-section-col-01-title2 text-left">
												<h5>Dados do medicamento Marjan</h5>
											</div>
											<div class="form-col-01">
												<ul class="form-caption">
													<li><p>Medicamento:</p></li>
													<li><p>Número do lote:</p></li>
													<li><p>Indicação:</p></li>
													<li><p>Data do início do tratamento:</p></li>
													<li><p>Ainda está em tratamento:</p></li>
												</ul>
											</div>
											<div class="form-col-02">
												<ul class="form-inputs">
													<li><input placeholder="" name="medicine" /></li>
													<li><input placeholder="" name="lot_number" /></li>
													<li><input placeholder="" name="indication" /></li>
													<li><input placeholder="dd-mm-aaaa" name="start_date_treatment" type="text" id="fv-treat-start-date-picker"></li>
													<li><select name="is_progress_treatment" id="fv-under-treat-form">
														<option value="">Selecione</option>
														<option value="Sim">Sim</option>
														<option value="Não">Não</option>
													 </select></li>
												</ul>
											</div>
											<div class="third-section-col-01-title2 text-left">
												<h5>Evento Adverso</h5>
											</div>
											<div class="form-col-01">
												<ul class="form-caption">
													<li><p>Início do evento:</p></li>
													<li><p>Ainda apresenta o(s) sintoma(s):</p></li>
													<li><p>Descrição do evento:</p></li>
													<!--<li><p>Você autoriza o nosso contato para que possamos obter informações complementares, se necessário?</p></li>-->
												</ul>
											</div>
											<div class="form-col-02">
												<ul class="form-inputs">
													<li><input placeholder="dd-mm-aaaa" name="start_date_event" type="text" id="fv-event-start-date-picker"></li>
													<li><select name="has_symptoms" id="fv-event-start-form">
														<option value="">Selecione</option>
														<option value="Sim">Sim</option>
														<option value="Não">Não</option>
													 </select></li>
													<li><textarea name="event_text" id="fv-event-description"></textarea></li>
													<!--<li><select name="contact-auth" id="fv-contact-auth-form">
														<option value="">Selecione</option>
														<option value="yes">Sim</option>
														<option value="no">Não</option>
													 </select></li>	-->
												</ul>
											</div>
											<div class="form-contact-auth">
												<p>Você autoriza o nosso contato para que possamos obter informações complementares, se necessário?</p>
												<select name="information_authorization" id="hd-contact-auth-form" required>
													<option value="">Selecione</option>
													<option value="Sim">Sim</option>
													<option value="Não">Não</option>
												 </select>
											 </div>
											 <div class="third-section-col-01-button-form center-text">
												<input type="submit" class="send-user-form" id="send-hd-form" value="ENVIAR">
											</div>
										</form>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="form-fv-patient" id="form-fv-patient">
					<div class="third-section-contact contact-form-input">
						<div class="third-section-wrapper" id="third_section_wrapper_contact_form_input_patient">
							<div class="contact-form-wrapper">
								<div class="third-section-col-02 border-left">
									<!--<div class="third-section-col-01-subtitle text-left">
										<h4>Desde 1961 a Marjan Farma reforça<br>seu compromisso de atuar em favor da<br>melhoria da qualidade de vida.</h4>
									</div>-->
									<div class="third-section-col-01-form center-text">
										<div class="third-section-col-01-title center-text">
											<h5>FORMULÁRIO DE CONTATO<font class="form-required-obs"><br>(os campos com <font class="required-field-form">*</font> são obrigatórios)</font></h5>
										</div>
										<form id="fv-patient-form" class="form-pt-form">
											<div class="third-section-col-01-title2 text-left">
												<h5>Dados do profissional de saúde</h5>
											</div>
											<div class="form-col-01 no-width">
												<ul class="form-caption">
													<li><p><font class="required-field-form">*</font> Nome do relator:</p></li>
													<li><p><font class="required-field-form">*</font> Nome do paciente:</p></li>
													<li><p><font class="required-field-form">*</font> Telefone:</p></li>
													<li><p><font class="required-field-form">*</font> Celular:</p></li>
													<li><p><font class="required-field-form">*</font> Nome do medicamento Marjan:</p></li>
													<li><p><font class="required-field-form">*</font> Descrição do Evento Adverso:</p></li>
												</ul>
											</div>
											<div class="form-col-02">
												<ul class="form-inputs">
													<li><input id="pt-relator-full-name" name="name_rapporteur" placeholder="" required/></li>
													<li><input id="pt-patient-full-name" name="patient_name" placeholder="" required/></li>
													<li><input id="pt-phone-nbr" name="phone" placeholder="" required/></li>
													<li><input id="pt-cel-nbr" name="mobile" placeholder="" required/></li>
													<li><input id="pt-remedy-name" name="medicine" placeholder="" required/></li>
													<li><textarea name="event_text" name="event_text" id="pt-event-description" required></textarea></li>
												</ul>
											</div>
											<div class="form-contact-auth">
												<p>Você autoriza o nosso contato para que possamos obter informações complementares, se necessário?</p>
												<select name="information_authorization" id="pt-contact-auth-form" required>
													<option value="">Selecione</option>
													<option value="Sim">Sim</option>
													<option value="Não">Não</option>
												 </select>
											 </div>
											 <div class="third-section-col-01-button-form center-text">
												<input type="submit" class="send-user-form" id="send-pt-form" value="ENVIAR">
											 </div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="form-fv-costumers"></div>
			</div>
		</div>

	</section>

</main>