<main class="main-about-us">

	<section class="loader">
		<div class="loader-wrapper">
			<img src="<?php echo base_url(PATH_ASSETS.'/img/common/ajaxSpinner.gif'); ?>">
		</div>
	</section>

	<section class="first-section-about-us">
		<div class="first-section-wrapper" id="first_section_wrapper" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('about', $object->principal_image); ?>); background-position: center;">
			<div class="info-wrapper video-wrapper">
				<div class="info-wrapper-mask"></div>
				<video id="video-slide-3" width="100%" autoplay loop>
					<source src="<?php echo MY_Controller_CMS::get_path_file('about/video', $object->principal_video); ?>" type="video/mp4">
				</video>
				<div class="info-container">
					<div class="page-info text title" id="title_about_us_value" >
						<h4 class="pre-line"><?php echo $object->principal_left_text; ?></h4>
					</div>
					<div class="page-info text sub-title" id="text_about_us_value" >
						<h4 class="pre-line"><?php echo $object->principal_right_text; ?></h4>
					</div>
				</div>
			</div>

		</div>

		<div class="call-to-next" id="call_to_next">
			<img src="<?php echo MY_Controller_CMS::get_path_file('about', $object->calltonext_section_image); ?>" />
		</div>
	</section>

	<section class="second-section-about-us display-inline-block call-to-next-anchor" id="mission-value-section">
		<div class="second-section-wrapper" id="second_section_wrapper">
			<div class="second-section-text-wrapper">
				<h4 class="second-section-text top"><?php echo $object->company_text; ?></h4>
			</div>
			<div class="mission-value-wrapper display-inline-block" id="mission-value-wrapper">
				<div class="mission-wrapper" id="mission-wrapper">
					<div class="img"><img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/mission-icon.png'); ?>" /></div>
					<div class="title"><h4><?php echo $object->mission_section_title; ?></h4></div>
					<div class="text"><span><p><img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/aspas-blue-small.png'); ?>"/><?php echo $object->mission_section_text; ?><img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/aspas-blue-small-inverted.png'); ?>"/></p></span></div>
				</div>
				<div class="value-wrapper" id="value-wrapper">
					<div class="img"><img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/vision-icon.png'); ?>" /></div>
					<div class="title"><h4><?php echo $object->vision_section_title; ?></h4></div>
					<div class="text"><span><p><img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/aspas-blue-small.png'); ?>"/><?php echo $object->vision_section_text; ?><img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/aspas-blue-small-inverted.png'); ?>"/></p></span></div>
				</div>
			</div>
			<div class="second-section-text-wrapper">
				<h4 class="second-section-text bottom"><img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/aspas-white-big.png'); ?>"/><?php echo $object->vision_mission_catchphrase; ?><img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/aspas-white-big-inverted.png'); ?>"/></h4>
			</div>
		</div>
	</section>

	<section class="slider-about-us" id="history-values">
		<div class="slider-container" id="slider_container">
			<div class="sliders-wrapper">

			<div class="slider-items slide-number-1" id="slider_items_1">
				<div class="slide-mask">
					<div class="slide-item-container slide-item-container-1" id="slide_item_container-1" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide1_image); ?>); background-position: right bottom;">
					</div>
					<div class="video-slider-01-wrapper sn-video-slide-wrapper" style="position: absolute; width: 100%; height: 100%; top: 0px; left: 0px;">
						<video id="video-slide-1" width="100%" autoplay loop>
							<source src="<?php echo base_url(PATH_ASSETS.'/videos/sobre-nos/video-valores.mp4'); ?>" type="video/mp4">
						</video>
					</div>
				</div>
				<div class="info-container slide-info-container _01">
					<div class="about-us text title _01" id="title_about_us_values" >
						<h4 class="pre-line font-weight-bold"><?php echo $object->vision_mission_slide1_title; ?></h4>
					</div>
					<div class="about-us text sub-title _01" id="text_about_us_values" >
						<h4 class="pre-line font-weight-bold"><?php echo $object->vision_mission_slide1_text; ?></h4>
					</div>
					<?php if (!empty($object->vision_mission_slide1_button_text)): ?>

						<div class="info-container-btn">
							<a href="<?php echo $object->vision_mission_slide1_button_link; ?>"><button><?php echo $object->vision_mission_slide1_button_text; ?></button></a>
						</div>

					<?php endif ?>
				</div>
			</div>

       		<div class="slider-items slide-number-2" id="slider_items_2">
				<div class="slide-mask">
					<div class="slide-item-container slide-item-container-2" id="slide_item_container-2" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide2_image); ?>); background-position: left center;">
					</div>
				</div>
				<div class="info-container slide-info-container _02">
					<div class="about-us text title _02" id="title_about_us_values_02">
						<h4 class="pre-line font-weight-bold"><?php echo $object->vision_mission_slide2_title; ?></h4>
					</div>
					<div class="about-us text sub-title _02" id="text_about_us_values_02">
						<h4 class="pre-line font-weight-bold"><?php echo $object->vision_mission_slide2_text; ?></h4>
					</div>
					<?php if (!empty($object->vision_mission_slide2_button_text)): ?>

						<div class="info-container-btn">
							<a href="<?php echo $object->vision_mission_slide2_button_link; ?>"><button><?php echo $object->vision_mission_slide2_button_text; ?></button></a>
						</div>

					<?php endif ?>
				</div>
			</div>

       		<div class="slider-items slide-number-3" id="slider_items_3">
				<div class="slide-mask">
					<div class="slide-item-container slide-item-container-3" id="slide_item_container-3" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide3_image); ?>); background-position: right bottom;">
					</div>
				</div>
				<div class="info-container slide-info-container _03">
					<div class="about-us text title _03" id="title_about_us_values_03" >
						<h4 class="pre-line font-weight-bold"><?php echo $object->vision_mission_slide3_title; ?></h4>
					</div>
					<div class="about-us text sub-title _03" id="text_about_us_values_03" >
						<h4 class="pre-line font-weight-bold"><?php echo $object->vision_mission_slide3_text; ?></h4>
					</div>
					<?php if (!empty($object->vision_mission_slide3_button_text)): ?>

						<div class="info-container-btn">
							<a href="<?php echo $object->vision_mission_slide3_button_link; ?>"><button><?php echo $object->vision_mission_slide3_button_text; ?></button></a>
						</div>

					<?php endif ?>
				</div>
			</div>

       		<div class="slider-items slide-number-4" id="slider_items_4">
				<div class="slide-mask">
					<div class="slide-item-container slide-item-container-4" id="slide_item_container-4" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide4_image); ?>); background-position: left top;">
					</div>
				</div>
				<div class="info-container slide-info-container _04">
					<div class="about-us text title _04" id="title_about_us_values_04" >
						<h4 class="pre-line font-weight-bold"><?php echo $object->vision_mission_slide4_title; ?></h4>
					</div>
					<div class="about-us text sub-title _04" id="text_about_us_values_04" >
						<h4 class="pre-line font-weight-bold"><?php echo $object->vision_mission_slide4_text; ?></h4>
					</div>
					<?php if (!empty($object->vision_mission_slide4_button_text)): ?>

						<div class="info-container-btn">
							<a href="<?php echo $object->vision_mission_slide4_button_link; ?>"><button><?php echo $object->vision_mission_slide4_button_text; ?></button></a>
						</div>

					<?php endif ?>
				</div>
			</div>

      		<div class="slider-items slide-number-5" id="slider_items_5">
				<div class="slide-mask">
					<div class="slide-item-container slide-item-container-5" id="slide_item_container-5" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide5_image); ?>); background-position: center center;">
					</div>
				</div>
				<div class="info-container slide-info-container _05">
					<div class="about-us text title _05" id="title_about_us_values_05" >
						<h4 class="pre-line font-weight-bold"><?php echo $object->vision_mission_slide5_title; ?></h4>
					</div>
					<div class="about-us text sub-title _05" id="text_about_us_values_05" >
						<h4 class="pre-line font-weight-bold"><?php echo $object->vision_mission_slide5_text; ?></h4>
					</div>
					<?php if (!empty($object->vision_mission_slide5_button_text)): ?>

						<div class="info-container-btn">
							<a href="<?php echo $object->vision_mission_slide5_button_link; ?>"><button><?php echo $object->vision_mission_slide5_button_text; ?></button></a>
						</div>

					<?php endif ?>
				</div>
			</div>

    		<div class="slider-controller-wrapper">
				<div class="about-us slider-controller" id="slider_controller" >
					<ul>
						<li class="slider-controller-1"><p><?php echo $object->vision_mission_slide1_title; ?></p></li>
						<li class="slider-controller-2"><p><?php echo $object->vision_mission_slide2_title; ?></p></li>
						<li class="slider-controller-3"><p><?php echo $object->vision_mission_slide3_title; ?></p></li>
						<li class="slider-controller-4"><p><?php echo $object->vision_mission_slide4_title; ?></p></li>
						<li class="slider-controller-5"><p><?php echo $object->vision_mission_slide5_title; ?></p></li>
					</ul>
				</div>
			</div>
     		</div>

        </div>
    </section>

    <section class="third-section-about-us display-inline-block">
		<div class="third-section-wrapper" id="third_section_wrapper">
			<div class="third-section-text-wrapper">
				<h4 class="third-section-text pre-line title"><?php echo $object->who_we_are_title; ?></h4>
				<h4 class="third-section-text pre-line"><?php echo $object->who_we_are_text; ?></h4>
			</div>
			<div class="au-indicators-wrapper display-inline-block" id="au-indicators-wrapper">
				<div class="colcol">
					<div class="au-indicator-01-wrapper au-indicator-wrapper-itens" id="au-indicator-01-wrapper">
						<div class="au-indicator-row-01 au-indicator-row-wrp" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/blue-button.png'); ?>); background-size: 100% 100%; background-position: center center">
							<div class="au-indicator-info">
								<div class="au-indicator-info-wrapper">
									<div class="title"><span><h5><?php echo $object->who_we_are1_title; ?></h5></span></div>
									<div class="text"><span><h2 id="counter01"><?php echo $object->who_we_are1_prefix.$object->who_we_are1_value; ?></h2><h2><?php echo $object->who_we_are1_unit; ?></h2></span></div>
								</div>
							</div>
							<div class="au-indicator-info-wrapper">
								<div class="bottom-text"><h5><?php echo $object->who_we_are1_box_text; ?></h5></div>
							</div>
						</div>
					</div>
					<div class="au-indicator-02-wrapper au-indicator-wrapper-itens" id="au-indicator-02-wrapper">
						<div class="au-indicator-row-01 au-indicator-row-wrp" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/blue-button.png'); ?>)); background-size: 100% 100%; background-position: center center">
							<div class="au-indicator-info-wrapper">
								<div class="au-indicator-info">
									<div class="title"><span><h5><?php echo $object->who_we_are2_title; ?></h5></span></div>
									<div class="text"><span><h2 id="counter02"><?php echo $object->who_we_are2_prefix.$object->who_we_are2_value; ?></h2><h2><?php echo $object->who_we_are2_unit; ?></h2></span></div>
								</div>
								<div class="bottom-text"><h5><?php echo $object->who_we_are2_box_text; ?></h5></div>
							</div>
						</div>
					</div>
				</div>
				<div class="colcol">
				<div class="au-indicator-03-wrapper au-indicator-wrapper-itens" id="au-indicator-03-wrapper">
					<div class="au-indicator-row-01 au-indicator-row-wrp" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/blue-button.png'); ?>)); background-size: 100% 100%; background-position: center center">
						<div class="au-indicator-info-wrapper">
							<div class="au-indicator-info">
								<div class="title"><span><h5><?php echo $object->who_we_are3_title; ?></h5></span></div>
								<div class="text"><span><h2 id="counter03"><?php echo $object->who_we_are3_prefix.$object->who_we_are3_value; ?></h2><h2><?php echo $object->who_we_are3_unit; ?></h2></span></div>
							</div>
							<div class="bottom-text"><h5><?php echo $object->who_we_are3_box_text; ?></h5></div>
						</div>
					</div>
				</div>
				<div class="au-indicator-04-wrapper au-indicator-wrapper-itens" id="au-indicator-04-wrapper">
					<div class="au-indicator-row-01 au-indicator-row-wrp" style="background-image: url(<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/blue-button.png'); ?>)); background-size: 100% 100%; background-position: center center">
						<div class="au-indicator-info-wrapper">
							<div class="au-indicator-info">
								<div class="title"><span><h5><?php echo $object->who_we_are4_title; ?></h5></span></div>
								<div class="text"><span><h2 id="counter04"><?php echo $object->who_we_are4_prefix.$object->who_we_are4_value; ?></h2><h2><?php echo $object->who_we_are4_unit; ?></h2></span></div>
							</div>
							<div class="bottom-text"><h5><?php echo $object->who_we_are4_box_text; ?></h5></div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>

   <section class="section-resp-social">
		<div class="resp-social-container" id="resp-social-container">
			<div class="resp-social-wrapper" id="resp-social-wrapper">
				<div class="resp-social-bg" id="resp-social-bg" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('about', $object->social_responsability_image); ?>); background-position: left center;"></div>
				<div class="resp-social-info-container">
					<div class="about-us-resp-social text title {{slide.cls}}" id="about-us-resp-social-title" >
						<h4 class="pre-line"><?php echo $object->social_responsability_title; ?></h4>
					</div>
					<div class="about-us-resp-social text sub-title" id="about-us-resp-social-subtitle" >
						<h4 class="pre-line"><?php echo $object->social_responsability_text; ?></h4>
					</div>
					<div class="resp-social-button"><a href="<?php echo base_url('responsabilidade-social') ?>"><button class=""><?php echo $object->social_responsability_button_text; ?></button></a></div>
				</div>
			</div>
        </div>
    </section>

	<section class="section-our-history dark-demo">

		<div class="our-history-section-wrapper">
			<div class="our-history-section-text-wrapper">
				<h4 class="our-history-section-text pre-line title">CONHEÇA A HISTÓRIA DA MARJAN FARMA</h4>
				<div class="our-history-section-text-div"><div class="our-history-section-text-div-first-line"><h5 class="our-history-section-text pre-line">Clique em qualquer "</h5><img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/scrollbar_mark.png'); ?>" alt=""><h5 class="our-history-section-text pre-line">" ponto da linha do tempo, ou arraste com o mouse a barra</h5></div><h5 class="our-history-section-text pre-line adjust" style="float: none;">de navegação ou clique na própria imagem e arraste.</h5></div>
			</div>
		</div>
		<!-- TIMELINE WRAPPER -->
		<div id="mytimeline" class="timeline-wrapper">


			<!-- TIMELINE -->
			<div class="timeline">

					<!-- VIEWPORT - IMAGES -->
					<!-- NOTE: BETTER SPLIT IMAGES FOR SITE SPEED, BUT YOU CAN USE JUST ONE FULL IMAGE FOR ALL -->
					<!-- YOU CAN WRAP IMAGES INSIDE HREFS, FOR OPENING LIGHTBOX, LIKE THE SAMPLE BELOW -->
					<div class="viewport">
						<div class="images">
							<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/tl-marjan/MF-timeline-img1.png'); ?>" alt="" />
							<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/tl-marjan/MF-timeline-img2.png'); ?>" alt="" />
							<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/tl-marjan/MF-timeline-img3.png'); ?>" alt="" />
							<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/tl-marjan/MF-timeline-img4.png'); ?>" alt="" />
							<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/tl-marjan/MF-timeline-img5.png'); ?>" alt="" />
							<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/tl-marjan/MF-timeline-img6.png'); ?>" alt="" />
							<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/tl-marjan/MF-timeline-img7.png'); ?>" alt="" />
							<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/tl-marjan/MF-timeline-img8.png'); ?>" alt="" />
							<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/tl-marjan/MF-timeline-img9.png'); ?>" alt="" />
							<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/tl-marjan/MF-timeline-img10.png'); ?>" alt="" />
							<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/tl-marjan/MF-timeline-img11.png'); ?>" alt="" />
							<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/tl-marjan/MF-timeline-img12.png'); ?>" alt="" />
							<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/tl-marjan/MF-timeline-img13.png'); ?>" alt="" />
							<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/tl-marjan/MF-timeline-img14.png'); ?>" alt="" />
							<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/tl-marjan/MF-timeline-img15.png'); ?>" alt="" />
							<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/tl-marjan/MF-timeline-img16.png'); ?>" alt="" />
							<img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/tl-marjan/MF-timeline-img17.png'); ?>" alt="" />
						</div>
					</div>
					<!-- SCROLLBAR (VIEW PLUGIN OPTIONS FOR STYLING) -->
					<div class="scrollbar">
						<div class="track">

							<!-- MARKS -->
							<!-- NOTE: MANUALLY POSITION (PERCENT %) EACH MARK WITH data-xpos ATTRIB -->
							<div class="marks">
								<div data-xpos="0%" data-label="1961" data-seq="1"></div>
								<div data-xpos="6.25%" data-label="1961" data-seq="2"></div>
								<div data-xpos="12.5%" data-label="1961" data-seq="3"></div>
								<div data-xpos="18.75%" data-label="1961" data-seq="4"></div>
								<div data-xpos="25%" data-label="1982" data-seq="5"></div>
								<div data-xpos="31.25%" data-label="1990" data-seq="6"></div>
								<div data-xpos="37.5%" data-label="1991" data-seq="7"></div>
								<div data-xpos="43.75%" data-label="1994" data-seq="8"></div>
								<div data-xpos="50%" data-label="2002" data-seq="9"></div>
								<div data-xpos="56.25%" data-label="2005" data-seq="10"></div>
								<div data-xpos="62.5%" data-label="2007" data-seq="11"></div>
								<div data-xpos="68.75%" data-label="2011" data-seq="12"></div>
								<div data-xpos="75%" data-label="2012" data-seq="13"></div>
								<div data-xpos="81.25%" data-label="2013" data-seq="14"></div>
								<div data-xpos="87.5%" data-label="2014" data-seq="15"></div>
								<div data-xpos="93.75%" data-label="2015" data-seq="16"></div>
								<div data-xpos="98%" data-label="2016" data-seq="17"></div>
								<!--<div data-xpos="0%" data-label="1961" data-seq="1"></div>
								<div data-xpos="6.25%" data-label="1961" data-seq="2"></div>
								<div data-xpos="12.5%" data-label="1961" data-seq="3"></div>
								<div data-xpos="18.75%" data-label="1982" data-seq="4"></div>
								<div data-xpos="25%" data-label="1990" data-seq="5"></div>
								<div data-xpos="31.25%" data-label="1991" data-seq="6"></div>
								<div data-xpos="37.5%" data-label="1994" data-seq="7"></div>
								<div data-xpos="43.75%" data-label="2002" data-seq="8"></div>
								<div data-xpos="50%" data-label="2005" data-seq="9"></div>
								<div data-xpos="56.25%" data-label="2007" data-seq="10"></div>
								<div data-xpos="62.5%" data-label="2011" data-seq="11"></div>
								<div data-xpos="68.75%" data-label="2012" data-seq="12"></div>
								<div data-xpos="75%" data-label="2013" data-seq="13"></div>
								<div data-xpos="81.25%" data-label="2014" data-seq="14"></div>
								<div data-xpos="87.5%" data-label="2015" data-seq="15"></div>
								<div data-xpos="93.75%" data-label="2016" data-seq="16"></div>
								<div data-xpos="98%" data-label="2017" data-seq="17"></div>-->
							</div>

							<!-- DRAGGER -->
							<div class="dragger"><img src="<?php echo base_url(PATH_ASSETS.'/img/sections/sobre-nos/scrollbar_dragger.png'); ?>" alt="" /></div>
						</div>
					</div>

					<!-- MILESTONES -->
					<div class="milestones">
						<div class="content">
							<div class="column">
								<div class="c200">
									<span class="date _1961" data-seq="1">1961</span>
									<span class="txt">Início da Nossa História</span>
								</div>
							</div>
							<div class="column">
								<div class="c200">
									<span class="date _1961" data-seq="2">1961</span>
									<span class="txt">Fundação da Marjan Farma</span>
								</div>
							</div>
							<div class="column">
								<div class="c200">
									<span class="date _1961" data-seq="3">1961</span>
									<span class="txt">Fusão JOMA, Sintoquímica e Activus</span>
								</div>
							</div>
							<div class="column">
								<div class="c200">
									<span class="date _1961" data-seq="4">1961</span>
									<span class="txt">Lançamento Frutoplex</span>
								</div>
							</div>
							<div class="column">
								<div class="c200">
									<span class="date _1982" data-seq="5">1982</span>
									<span class="txt">Lançamento Trivagel focado na saúde da mulher</span>
								</div>
							</div>
							<div class="column">
								<div class="c200">
									<span class="date _1990" data-seq="6">1990</span>
									<span class="txt">Lançamento Pasalix, primeiro fitoterápico focado em ansiedade<br><br>Início da década de inovação com foco na saúde da mulher – ácido fólico, antioxidante, fito hormônios, fitoterápicos</span>
								</div>
							</div>
							<div class="column">
								<div class="c200">
									<span class="date _1991" data-seq="7">1991</span>
									<span class="txt">Lançamento Endofolin, focado na pré-concepção</span>
								</div>
							</div>
							<div class="column">
								<div class="c200">
									<span class="date _1994" data-seq="8">1994</span>
									<span class="txt">Lançamento Vitergan Zinco PL, antioxidante para reposição de vitaminas e minerais</span>
								</div>
							</div>
							<div class="column">
								<div class="c200">
									<span class="date _2002" data-seq="9">2002</span>
									<span class="txt">Lançamento Aplause, focado nos sintomas da menopausa</span>
								</div>
							</div>
							<div class="column">
								<div class="c200">
									<span class="date _2005" data-seq="10">2005</span>
									<span class="txt">Lançamento Vecasten, focado na deficiência circulatória<br><br>Fundação da Droxter</span>
								</div>
							</div>
							<div class="column">
								<div class="c200">
									<span class="date _2007" data-seq="11">2007</span>
									<span class="txt">Início de projetos focados na educação da criança - Fundação do Instituto Olinto Marques de Paulo</span>
								</div>
							</div>
							<div class="column">
								<div class="c200">
									<span class="date _2011" data-seq="12">2011</span>
									<span class="txt">Lançamento ViterKids, suplemento vitamínico para crianças; primeiro produto da divisão de alimentos em forma de gummies</span>
								</div>
							</div>
							<div class="column">
								<div class="c200">
									<span class="date _2012" data-seq="13">2012</span>
									<span class="txt">Lançamento Caldê Mag, suplemento vitamínico-mineral de Cálcio e Vitamina D, com Magnésio, para a extensão da família Caldê<br><br>Início de parceria com Sobrafito e Anvisa com workshops internacionais, eventos com foco em levar conhecimento</span>
								</div>
							</div>
							<div class="column">
								<div class="c200">
									<span class="date _2013" data-seq="14">2013</span>
									<span class="txt">Lançamento Caldê K2, suplemento vitamínico-mineral de Cálcio e Vitamina D, com vitamina K2, para a prevenção do depósito de cálcio nas artérias<br><br>Lançamento Barivit, multivitamínico para pacientes de cirurgia bariátrica com tecnologia exclusiva de tabletes mastigaveis<br><br>Expansão da produção com aquisição de novas máquinas e equipamentos</span>
								</div>
							</div>
							<div class="column">
								<div class="c200">
									<span class="date _2014" data-seq="15">2014</span>
									<span class="txt">Lançamento Permear – complexo fitoterápico focado em osteoartrite<br><br>Lançamento Normaten Fit – laxativo probiótico<br><br>Lançamento Tenflax – colágeno hidrolisado</span>
								</div>
							</div>
							<div class="column">
								<div class="c200">
									<span class="date _2015" data-seq="16">2015</span>
									<span class="txt">Lançamento PreFolin, suplemento polivitamínico para homens para a melhora da qualidade do esperma</span>
								</div>
							</div>
							<div class="column">
								<div class="c200">
									<span class="date _2016" data-seq="17">2016</span>
									<span class="txt">Prêmio Sindusfarma “Lupa de Ouro” – Vicog e Magnen B6</span>
								</div>
							</div>

						</div>	<!-- END CONTENT -->
					</div> <!-- END MILESTONES -->


			</div> <!-- END TIMELINE -->


		</div> <!-- END TIMELINE WRAPPER -->

	</section>

	<section class="fifth-section-products">
		<div class="fifth-section-wrapper" id="fifth_section_wrapper">
			<div class="fifth-filter-wrapper">
				<div class="fifth-section-col-02">
					<div class="fifth-section-col-01-title center-text">
						<h4><?php echo $object->our_history_programs_title; ?></h4>
					</div>
					<div class="fifth-section-col-01-subtitle text-left">
						<h4><?php echo $object->our_history_programs_text; ?></h4>
					</div>

					<?php if (!empty($object->our_history_button_text)): ?>

						<div class="fifth-section-col-01-button center-text">
							<button><h6><a href="<?php echo base_url('sobre-nos/nossa-historia') ?>"><?php echo $object->our_history_button_text; ?></a></h6></button>
						</div>

					<?php endif ?>
				</div>
				<div class="fifth-section-col-01" id="fifth-section-col-01" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('about', $object->our_history_programs_image); ?>); background-position: right center;">
				</div>
			</div>
		</div>
	</section>

	<section class="fourth-section-products">
		<div class="fourth-section-wrapper" id="fourth_section_wrapper">
			<div class="fourth-section-filter-wrapper">
				<div class="fourth-filter-wrapper">
					<div class="fourth-section-col-02" id="fourth-section-col-02" style="background-image: url(<?php echo MY_Controller_CMS::get_path_file('about', $object->our_products_image); ?>); background-position: right top;">
					</div>
					<div class="fourth-section-col-01">
						<div class="fourth-section-col-01-title center-text">
							<h4><?php echo $object->our_products_title; ?></h4>
						</div>
						<div class="fourth-section-col-01-subtitle text-left">
							<h4><?php echo $object->our_products_text; ?></h4>
						</div>
						<div class="fourth-section-col-01-button center-text">
							<button><h6><a href="<?php echo base_url('produtos') ?>">CONHEÇA NOSSO PORTFÓLIO</a></h6></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>