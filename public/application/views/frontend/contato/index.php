<main class="main-contact">

	<section class="first-section-contact">
		<div class="first-section-wrapper" id="first_section_wrapper" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/sections/contato/header-img.jpg'); ?>); background-position: center;">
			<div class="info-wrapper">
				<div class="info-container">
					<div class="page-info text title" id="title_about_us_values" >
						<h4 class="pre-line">FALE<br>CONOSCO</h4>
					</div>
					<div class="page-info text sub-title" id="text_about_us_values" >
						<h4 class="pre-line">Tire suas<br>dúvidas, participe<br>e dê sugestões</h4>
					</div>
				</div>
			</div>

		</div>

		<div class="call-to-next" id="call_to_next">
			<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/contato/call-to-next.png'); ?>" />
		</div>
	</section>

	<section class="second-section-contact call-to-next-anchor">
		<div class="second-section-wrapper" id="second_section_wrapper">
			<div class="second-section-text-wrapper">
				<h4 class="second-section-text">A Marjan Farma está pronta para atendê-lo<br>da melhor forma possível</h4>
			</div>
		</div>
	</section>

	<section class="third-section-contact contact-sac-call-to-action">
		<div class="third-section-wrapper" id="third_section_wrapper_contact_sac">
			<div class="third-filter-wrapper">
				<div class="third-section-col-01 border-top-left" id="third-section-col-01" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/sections/contato/contato-2.jpg'); ?>); background-position: center;">
				</div>
				<div class="third-section-col-02 border-top-right">
					<div class="third-section-col-01-title center-text">
						<h4>PARA DÚVIDAS E SUGESTÕES,<br>ENTRE EM CONTATO CONOSCO</h4>
					</div>
					<div class="third-section-col-01-button center-text">
						<button><h6>SERVIÇO DE ATENDIMENTO AO CLIENTE<br>0800 55 4545</h6></button>
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
						<h4>ENTRE EM CONTATO CONOSCO TAMBÉM<br>ATRAVÉS DO FORMULÁRIO ABAIXO</h4>
					</div>
					<div class="third-section-col-01-button center-text">
						<button class="btn-show-form"><h6>PREENCHER<br>FORMULÁRIO</h6></button>
					</div>
				</div>
				<div class="third-section-col-01 border-right" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/sections/contato/contato-3.jpg'); ?>); background-position: center;">
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
				<div class="third-section-col-01 border-left" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/sections/contato/farmacovigilancia.jpg'); ?>); background-position: right center;">
				</div>
				<div class="third-section-col-02 border-right">
					<div class="third-section-col-01-title center-text">
						<h4>REAÇÕES OU EVENTOS ADVERSOS<br>PARA NOTIFICAR?</h4>
					</div>

					<div class="third-section-col-01-button center-text">
						<a href="../../sections/farmacovigilancia/home.html"><button><h6>IR PARA A ÁREA DE<br>FARMACOVIGILÂNCIA</h6></button></a>
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
						<h4>CONHEÇA NOSSAS<br>REDES SOCIAIS</h4>
					</div>
					<div class="third-section-col-01-button center-text">
						<div class="health-social-footer">
							<div class="social-network-wrapper">
								<div class="social-network-col01">
									<div class="display-inline-block">
										<div class="fb-logo" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/social/fb-org.png'); ?>); background-position: center"></div>
										<div class="fb-link"><span><a href="http://www.facebook.com/marjanfarma" target="_blank">facebook.com/marjanfarma</a></span></div>
									</div>
								</div>
								<div class="social-network-col02">
									<div class="display-inline-block">
										<div class="ig-logo" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/social/ig-org.png'); ?>); background-position: center"></div>
										<div class="ig-link"><span><a href="http://www.instagram.com/farmamarjan" target="_blank">instagram.com/farmamarjan</a></span></div>
									</div>
								</div>
								<div class="social-network-col03">
									<div class="display-inline-block">
										<div class="in-logo" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/social/in-org.png'); ?>); background-position: center"></div>
										<div class="in-link"><span><a href="https://br.linkedin.com/company/marjan-farma" target="_blank">linkedin.com/marjanfarma</a></span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="third-section-col-01 border-bottom-right" id="third-section-col-01" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/sections/contato/contato-social.jpg'); ?>); background-position: left center;">
				</div>
			</div>
		</div>
	</section>

	<section class="know-more-about-mj display-inline-block">
		<div class="know-more-about-mj-wrapper center-text" id="know-more-about-mj-wrapper">
			<div class="know-more-about-mj-title-wrp">
				<h4 class="know-more-about-mj-title pre-line title">SAIBA MAIS SOBRE A MARJAN FARMA</h4>
			</div>
			<div class="know-more-about-mj-items display-inline-flex max-width-x" id="know-more-about-mj-items-wrapper">
				<div class="float-left center-text">
				<div class="know-more-about-mj-items-wrapper-01 know-more-about-mj-items-wrapper" id="know-more-about-mj-items-wrapper-01">
					<div class="know-more-about-mj-items-row-01">
						<div class="know-more-about-mj-items-info-wrapper">
							<div class="know-more-about-mj-items-info" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/common/know-more-about-mf/carreira.png'); ?>); background-position: right bottom">
							</div>
							<div class="bottom-text max-width-x"><h6><a href="../../sections/carreira/home.html">CARREIRAS<br><font style="opacity: 0">.</font></a></h6></div>
						</div>
					</div>
				</div>
				<div class="know-more-about-mj-items-wrapper-02 know-more-about-mj-items-wrapper" id="know-more-about-mj-items-wrapper-02">
					<div class="know-more-about-mj-items-row-01">
						<div class="know-more-about-mj-items-info-wrapper">
							<div class="know-more-about-mj-items-info" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/common/know-more-about-mf/produtos.png'); ?>); background-position: right bottom"></div>
							<div class="bottom-text max-width-x"><h6><a href="../../sections/produtos/home.html">CONHEÇA NOSSOS<br>PRODUTOS</a></h6></div>
						</div>
					</div>
				</div>
				</div>
				<div class="float-left center-text">
				<div class="know-more-about-mj-items-wrapper-03 know-more-about-mj-items-wrapper" id="know-more-about-mj-items-wrapper-03">
					<div class="know-more-about-mj-items-row-01">
						<div class="know-more-about-mj-items-info-wrapper">
							<div class="know-more-about-mj-items-info" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/common/know-more-about-mf/saude-e-bem-estar.png'); ?>); background-position: right bottom"></div>
							<div class="bottom-text max-width-x"><h6><a href="../../sections/saude-e-bem-estar/home.html">SAÚDE E BEM-ESTAR<br><font style="opacity: 0">.</font></a></h6></div>
						</div>
					</div>
				</div>
				<div class="know-more-about-mj-items-wrapper-04 know-more-about-mj-items-wrapper" id="know-more-about-mj-items-wrapper-04">
					<div class="know-more-about-mj-items-row-01">
						<div class="know-more-about-mj-items-info-wrapper">
							<div class="know-more-about-mj-items-info" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/common/know-more-about-mf/sala-de-noticias.png'); ?>); background-position: right bottom">
							</div>
							<div class="bottom-text max-width-x"><h6><a href="../../sections/noticias/home.html">VISITE NOSSA SALA<br>DE NOTÍCIAS</a></h6></div>
						</div>
					</div>
				</div>
				</div>
			</div>
			<div class="know-more-about-mj-items display-inline-table min-width-x" id="know-more-about-mj-items-wrapper-01-a">
				<div class="know-more-about-mj-items-wrapper-01 know-more-about-mj-items-wrapper display-flex min-width-x-wrapper" id="know-more-about-mj-items-wrapper-01a">
					<div class="know-more-about-mj-items-row-01 min-width-x">
						<div class="know-more-about-mj-items-info-wrapper min-width-x">
							<div class="bottom-text min-width-x"><h6><a href="../../sections/carreira/home.html">CARREIRAS<br></a></h6></div>
						</div>
					</div>
				</div>
				<div class="know-more-about-mj-items-wrapper-02 know-more-about-mj-items-wrapper display-flex min-width-x-wrapper" id="know-more-about-mj-items-wrapper-02a">				<div class="know-more-about-mj-items-row-01 min-width-x">
						<div class="know-more-about-mj-items-info-wrapper min-width-x">
							<div class="bottom-text min-width-x"><h6><a href="../../sections/produtos/home.html">CONHEÇA NOSSOS<br>PRODUTOS</a></h6></div>
						</div>
					</div>
				</div>
				<div class="know-more-about-mj-items-wrapper-03 know-more-about-mj-items-wrapper display-flex min-width-x-wrapper" id="know-more-about-mj-items-wrapper-03a">
					<div class="know-more-about-mj-items-row-01 min-width-x">
						<div class="know-more-about-mj-items-info-wrapper min-width-x">
							<div class="bottom-text min-width-x"><h6><a href="../../sections/saude-e-bem-estar/home.html">SAÚDE E BEM-ESTAR</a></h6></div>
						</div>
					</div>
				</div>
				<div class="know-more-about-mj-items-wrapper-04 know-more-about-mj-items-wrapper display-flex min-width-x-wrapper" id="know-more-about-mj-items-wrapper-04a">
					<div class="know-more-about-mj-items-row-01 min-width-x">
						<div class="know-more-about-mj-items-info-wrapper min-width-x">
							<div class="bottom-text min-width-x"><h6><a href="../../sections/noticias/home.html">VISITE NOSSA SALA<br>DE NOTÍCIAS</a></h6></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contact-footer-section">
		<div class="contact-footer-section-wrapper" id="contact_footer_section_wrapper">
			<div class="contact-footer-wrapper padding-0">
				<div class="contact-footer-col-01 width-100">
					<div class="contact-data">
						<h4>DÚVIDAS, CONTATO, REAÇÕES ADVERSAS?</h4>
						<h4>Fale conosco e consulte nossos especialistas. Relate qualquer evento adverso.<br>Ligue para o nosso SAC 0800-55-4545</h4>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>