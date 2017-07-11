		<?php if ($controller_module  == 'home'): ?>

			<footer class="footer-home" id="footer_home" ng-controller="footerController">
				<div class="footer-wrapper" id="footer_wrapper">
					<div class="footer-col-1 col-one-thirdy"><p>ÚLTIMAS NOTÍCIAS</p></div>
					<div class="footer-col-2 col-one-thirdy"><p>SOCIAL@MARJAN</p></div>
					<div class="footer-col-3 col-one-thirdy"><p>CONTATOS</p></div>
				</div>
				<div class="sub-footer-wrapper" id="sub-footer_wrapper">
					<div class="sub-footer-col-1 col-one-thirdy">
						<div class="sub-footer-col-1-content sub-footer-content">
							<div id="social-stream-1"></div>
						</div>
					</div>
					<div class="sub-footer-col-2 col-one-thirdy">
						<div class="sub-footer-col-1-content sub-footer-content">
							<div class="social-icons">
								<a href="http://www.facebook.com/marjanfarma" target="_blank"><img src="<?php echo base_url(PATH_ASSETS.'/img/social/fb-org-white.png'); ?>"></a>
								<a href="http://www.instagram.com/farmamarjan" target="_blank"><img src="<?php echo base_url(PATH_ASSETS.'/img/social/ig-org-white.png'); ?>"></a>
								<a href="https://br.linkedin.com/company/marjan-farma" target="_blank"><img src="<?php echo base_url(PATH_ASSETS.'/img/social/in-org-white.png'); ?>"></a>
							</div>
							<div id="social-stream-2"></div>
						</div>
					</div>
					<div class="sub-footer-col-3 col-one-thirdy">
						<div class="sub-footer-col-1-content sub-footer-content">
							<div class="footer-col-3-wrapper">
								<ul>
									<li style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/home/home-footer-02.png')?>); background-size: 34px; background-position: left center"><p><?php echo $general_settings->footer_sac_text; ?></p></li>
								</ul>
								<ul>
									<li style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/home/home-footer-03.png')?>); background-size: 34px; background-position: left center"><p><?php echo $general_settings->phone_sac; ?></p></li>
								</ul>
								<ul class="margin-bottom-10">
									<li style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/home/home-footer-04.png')?>); background-size: 34px; background-position: left center"><p><?php echo $general_settings->email_sac; ?></p></li>
								</ul>
								<ul class="margin-bottom-10">
									<li><p class="margin-0"><?php echo $general_settings->footer_copyright_text; ?></p></li>
								</ul>
								<ul class="padding-0 margin-0">
									<li><p class="margin-0"><a href="<?php echo $general_settings->footer_terms_link; ?>"><?php echo $general_settings->footer_terms_text; ?></a></p></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>

		<?php else: ?>

			<footer class="footer-static-wrapper">

				<section class="know-more-about-mj display-inline-block"> <!-- nem todas as páginas tem essa section -->
					<div class="know-more-about-mj-wrapper center-text" id="know-more-about-mj-wrapper">
						<div class="know-more-about-mj-title-wrp">
							<h4 class="know-more-about-mj-title pre-line title">SAIBA MAIS SOBRE A MARJAN FARMA</h4>
						</div>
						<div class="know-more-about-mj-items display-inline-flex max-width-x" id="know-more-about-mj-items-wrapper">
							<div class="float-left center-text">
							<div class="know-more-about-mj-items-wrapper-01 know-more-about-mj-items-wrapper" id="know-more-about-mj-items-wrapper-01">
								<div class="know-more-about-mj-items-row-01">
									<div class="know-more-about-mj-items-info-wrapper">
										<div class="know-more-about-mj-items-info" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/common/know-more-about-mf/carreira.png')?>); background-position: right bottom">
										</div>
										<div class="bottom-text max-width-x"><h6><a href="<?php echo base_url('carreira'); ?>">CARREIRAS<br><font style="opacity: 0">.</font></a></h6></div>
									</div>
								</div>
							</div>
							<div class="know-more-about-mj-items-wrapper-02 know-more-about-mj-items-wrapper" id="know-more-about-mj-items-wrapper-02">
								<div class="know-more-about-mj-items-row-01">
									<div class="know-more-about-mj-items-info-wrapper">
										<div class="know-more-about-mj-items-info" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/common/know-more-about-mf/produtos.png')?>); background-position: right bottom"></div>
										<div class="bottom-text max-width-x"><h6><a href="<?php echo base_url('produtos'); ?>">CONHEÇA NOSSOS<br>PRODUTOS</a></h6></div>
									</div>
								</div>
							</div>
							</div>
							<div class="float-left center-text">
							<div class="know-more-about-mj-items-wrapper-03 know-more-about-mj-items-wrapper" id="know-more-about-mj-items-wrapper-03">
								<div class="know-more-about-mj-items-row-01">
									<div class="know-more-about-mj-items-info-wrapper">
										<div class="know-more-about-mj-items-info" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/common/know-more-about-mf/saude-e-bem-estar.png')?>); background-position: right bottom"></div>
										<div class="bottom-text max-width-x"><h6><a href="<?php echo base_url('saude-e-bem-estar'); ?>">SAÚDE E BEM-ESTAR<br><font style="opacity: 0">.</font></a></h6></div>
									</div>
								</div>
							</div>
							<div class="know-more-about-mj-items-wrapper-04 know-more-about-mj-items-wrapper" id="know-more-about-mj-items-wrapper-04">
								<div class="know-more-about-mj-items-row-01">
									<div class="know-more-about-mj-items-info-wrapper">
										<div class="know-more-about-mj-items-info" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/common/know-more-about-mf/sala-de-noticias.png')?>); background-position: right bottom">
										</div>
										<div class="bottom-text max-width-x"><h6><a href="<?php echo base_url('noticias'); ?>">VISITE NOSSA SALA<br>DE NOTÍCIAS</a></h6></div>
									</div>
								</div>
							</div>
							</div>
						</div>
						<div class="know-more-about-mj-items display-inline-table min-width-x" id="know-more-about-mj-items-wrapper-01-a">
							<div class="know-more-about-mj-items-wrapper-01 know-more-about-mj-items-wrapper display-flex min-width-x-wrapper" id="know-more-about-mj-items-wrapper-01a">
								<div class="know-more-about-mj-items-row-01 min-width-x">
									<div class="know-more-about-mj-items-info-wrapper min-width-x">
										<div class="bottom-text min-width-x"><h6><a href="<?php echo base_url('carreira'); ?>">CARREIRAS<br></a></h6></div>
									</div>
								</div>
							</div>
							<div class="know-more-about-mj-items-wrapper-02 know-more-about-mj-items-wrapper display-flex min-width-x-wrapper" id="know-more-about-mj-items-wrapper-02a">				<div class="know-more-about-mj-items-row-01 min-width-x">
									<div class="know-more-about-mj-items-info-wrapper min-width-x">
										<div class="bottom-text min-width-x"><h6><a href="<?php echo base_url('produtos'); ?>">CONHEÇA NOSSOS<br>PRODUTOS</a></h6></div>
									</div>
								</div>
							</div>
							<div class="know-more-about-mj-items-wrapper-03 know-more-about-mj-items-wrapper display-flex min-width-x-wrapper" id="know-more-about-mj-items-wrapper-03a">
								<div class="know-more-about-mj-items-row-01 min-width-x">
									<div class="know-more-about-mj-items-info-wrapper min-width-x">
										<div class="bottom-text min-width-x"><h6><a href="<?php echo base_url('saude-e-bem-estar'); ?>">SAÚDE E BEM-ESTAR</a></h6></div>
									</div>
								</div>
							</div>
							<div class="know-more-about-mj-items-wrapper-04 know-more-about-mj-items-wrapper display-flex min-width-x-wrapper" id="know-more-about-mj-items-wrapper-04a">
								<div class="know-more-about-mj-items-row-01 min-width-x">
									<div class="know-more-about-mj-items-info-wrapper min-width-x">
										<div class="bottom-text min-width-x"><h6><a href="<?php echo base_url('noticias'); ?>">VISITE NOSSA SALA<br>DE NOTÍCIAS</a></h6></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="contact-footer-section"> <!-- nem todas as páginas tem essa section -->
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


				<hr>
				<div class="footer-container-static">
					<div class="footer-static-col-01 footer-static-cols">
						<div class="footer-copyrights"><p>@Copyright 2017 Marjan Farma Indústria - Todos os direitos reservados</p></div>
						<div class="footer-privacy-politics"><p>Política de Privacidade</p></div>
					</div>
					<div class="footer-static-col-02 footer-static-cols">
						<div class="footer-sac-text"><p>Para dúvidas e sugestões entre em contato com o Serviço de Atendimento ao cliente</p></div>
						<div class="footer-sac-phone-number"><p>SAC: 0800-55-4545</p></div>
						<div class="footer-sac-email"><p>E-mail: <a href="mailto: sac@marjan.com.br">sac@marjan.com.br</a></p></div>
					</div>
				</div>
			</footer>


		<?php endif ?>

		<?php if ($controller_module  == 'home'): ?>

			<script language="javascript">
				window.onload = function(){
					Application.beforeStart(true);
					menu_fns.Initialize(true);
					home_fns.Initialize();
				}
				$(document).ready(Application.documentReady);
			</script>

		<?php elseif ($controller_module  == 'contact'): ?>

			<script language="javascript">
				window.onload = function(){
					Application.beforeStart(false);
					menu_fns.Initialize(false);
					contact_fns.Initialize();
				}
			$(document).ready(Application.documentReady);
			</script>

		<?php elseif ($controller_module  == 'about' && $action_module  == 'index'): ?>

			<script language="javascript">
				window.onload = function(){
					Application.beforeStart(false);
					menu_fns.Initialize(false);
					about_us_fns.Initialize();
					timeline_fns.Initialize('auto', 600);
				}
			$(document).ready(Application.documentReady);
			</script>

		<?php elseif ($controller_module  == 'about' && $action_module  == 'newbusiness'): ?>

			<script language="javascript">
				window.onload = function(){
					Application.beforeStart(false);
					menu_fns.Initialize(false);
					social_stream_sec.Initialize();
					novos_negocios_fns.Initialize();
				}
				$(document).ready(Application.documentReady);

			</script>

		<?php elseif ($controller_module  == 'about' && $action_module  == 'environment'): ?>

			<script language="javascript">
				window.onload = function(){
					Application.beforeStart(false);
					menu_fns.Initialize(false);
					social_stream_sec.Initialize();
				}
				$(document).ready(Application.documentReady);

			</script>

		<?php elseif ($controller_module  == 'about' && $action_module  == 'quality'): ?>

			<script language="javascript">
				window.onload = function(){
					Application.beforeStart(false);
					menu_fns.Initialize(false);
					social_stream_sec.Initialize();
				}
				$(document).ready(Application.documentReady);

			</script>

		<?php elseif ($controller_module  == 'about' && $action_module  == 'ourhistory'): ?>

			<script type="text/javascript">
				$(document).ready(function(){
					Application.documentReady();
					timeline_fns.Initialize();
				});

				window.onload = function(){
					Application.beforeStart(false);
					menu_fns.Initialize(false);

				}
			</script>

		<?php endif ?>

	</body>

</html>