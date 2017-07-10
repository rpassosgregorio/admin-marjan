<section class='content-header'>
	<h1>
		<?php echo $this->title_module; ?>
	</h1>
	<ol class='breadcrumb'>
		<li class='active'><?php echo $this->title_module; ?></li>
	</ol>
</section>

<section class='content'>

	<div class='row'>
		<div class='col-xs-12'>

			<div class='box'>
				<div class='box-body'>


					<section class="admingrid">

						<?php if(isset($object->id)){ ?>

							<article class="admingrid-item admingrid-item--0" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('about', $object->principal_image); ?> )">

								<a href="#" class="admingrid-edit-btn" data-open-modal="#item0">
									<span>Clique aqui para editar esse conteúdo</span>
								</a>

								<div class="admingrid-item-textleft">
									<p><?php echo !empty($object->principal_left_text) ? $object->principal_left_text : 'Lorem ipsum dolor sit amet'; ?></p>
								</div>
								<div class="admingrid-item-textright">
									<p><?php echo !empty($object->principal_right_text) ? $object->principal_right_text : 'Lorem ipsum dolor sit amet'; ?></p>
								</div>


							</article>

						<?php }else{ ?>

							<article class="admingrid-item admingrid-item--0" style="background-image: url(URL_AQUI)">

								<a href="#" class="admingrid-edit-btn" data-open-modal="#item0">
									<span>Clique aqui para editar esse conteúdo</span>
								</a>

								<div class="admingrid-item-textleft">
									<p>Lorem ipsum dolor sit amet</p>
								</div>
								<div class="admingrid-item-textright">
									<p>Lorem ipsum dolor sit amet</p>
								</div>

							</article>

						<?php } ?>

						<?php if(isset($object->id)){ ?>

							<article class="admingrid-item admingrid-item--1" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('about', $object->calltonext_section_image); ?> )">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item1">
									<span>Clique para editar esse conteúdo</span>
								</a>
							</article>

						<?php }else{ ?>

							<article class="admingrid-item admingrid-item--1" style="background-image: url(URL_AQUI)">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item1">
									<span>Clique para editar esse conteúdo</span>
								</a>
							</article>

						<?php } ?>

						<?php if(isset($object->id)){ ?>

							<article class="admingrid-item admingrid-item--2">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item2">
									<span>Clique para editar esse conteúdo</span>
								</a>

								<h2><?php echo !empty($object->company_text) ? $object->company_text : 'Lorem ipsum dolor'; ?></h2>

								<div class="admingrid-item-box admingrid-item-box--0">
									<h3><?php echo !empty($object->mission_section_title) ? $object->mission_section_title : 'Lorem ipsum dolor sit amet'; ?></h3>
									<p><?php echo !empty($object->mission_section_text) ? $object->mission_section_text : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores unde assumenda tenetur nisi quisquam aspernatur eveniet error architecto doloremque blanditiis?'; ?></p>
								</div>
								<div class="admingrid-item-box admingrid-item-box--1">
									<h3><?php echo !empty($object->vision_section_title) ? $object->vision_section_title : 'Lorem ipsum dolor sit amet'; ?></h3>
									<p><?php echo !empty($object->vision_section_text) ? $object->vision_section_text : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores unde assumenda tenetur nisi quisquam aspernatur eveniet error architecto doloremque blanditiis?'; ?></p>
								</div>

								<div class="admingrid-clear"></div>

								<div class="admingrid-item-quotes">
									<p><?php echo !empty($object->vision_mission_catchphrase) ? $object->vision_mission_catchphrase : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores unde assumenda tenetur nisi quisquam aspernatur eveniet error architecto doloremque blanditiis?'; ?></p>
								</div>
							</article>

						<?php }else{ ?>

							<article class="admingrid-item admingrid-item--2">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item2">
									<span>Clique para editar esse conteúdo</span>
								</a>

								<h2>Lorem ipsum dolor</h2>

								<div class="admingrid-item-box admingrid-item-box--0">
									<h3>Lorem ipsum dolor sit amet</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores unde assumenda tenetur nisi quisquam aspernatur eveniet error architecto doloremque blanditiis?</p>
								</div>
								<div class="admingrid-item-box admingrid-item-box--1">
									<h3>Lorem ipsum dolor sit amet</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores unde assumenda tenetur nisi quisquam aspernatur eveniet error architecto doloremque blanditiis?</p>
								</div>

								<div class="admingrid-clear"></div>

								<div class="admingrid-item-quotes">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores unde assumenda tenetur nisi quisquam aspernatur eveniet error architecto doloremque blanditiis?</p>
								</div>
							</article>

						<?php } ?>



						<div class="admingrid-fullbanner admingrid-box">
							<div class="admingrid-fullbanner-items owl-carousel">

								<?php if(isset($object->id)){ ?>

									<div class="admingrid-fullbanner-item" data-thumb-title="<?php echo !empty($object->vision_mission_slide1_title) ? $object->vision_mission_slide1_title : 'Conteúdo 1'; ?>" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide1_image); ?> )">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner1">
											<span>Clique para editar esse conteúdo</span>
										</a>

										<div class="admingrid-fullbanner-item-title">
											<p><?php echo !empty($object->vision_mission_slide1_title) ? $object->vision_mission_slide1_title : 'Lorem ipsum dolor'; ?></p>
										</div>

										<div class="admingrid-fullbanner-item-text">
											<p><?php echo !empty($object->vision_mission_slide1_text) ? $object->vision_mission_slide1_text : ''; ?></p>
											<?php if(!empty(!empty($object->vision_mission_slide1_button_text))){ ?>
												<span class="admingrid-fullbanner-item-text-btn"><?php echo !empty($object->vision_mission_slide1_button_text) ? $object->vision_mission_slide1_button_text : 'lorem ipsum dolor' ?></span>
											<?php } ?>
										</div>
									</div>

									<div class="admingrid-fullbanner-item" data-thumb-title="<?php echo !empty($object->vision_mission_slide2_title) ? $object->vision_mission_slide2_title : 'Conteúdo 2'; ?>" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide2_image); ?> )">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner2">
											<span>Clique para editar esse conteúdo</span>
										</a>

										<div class="admingrid-fullbanner-item-title">
											<p><?php echo !empty($object->vision_mission_slide2_title) ? $object->vision_mission_slide2_title : 'Lorem ipsum dolor'; ?></p>
										</div>

										<div class="admingrid-fullbanner-item-text">
											<p><?php echo !empty($object->vision_mission_slide2_text) ? $object->vision_mission_slide2_text : ''; ?></p>

											<?php if(!empty(!empty($object->vision_mission_slide2_button_text))){ ?>
												<span class="admingrid-fullbanner-item-text-btn"><?php echo !empty($object->vision_mission_slide2_button_text) ? $object->vision_mission_slide2_button_text : 'lorem ipsum dolor' ?></span>
											<?php } ?>
										</div>
									</div>

									<div class="admingrid-fullbanner-item" data-thumb-title="<?php echo !empty($object->vision_mission_slide3_title) ? $object->vision_mission_slide3_title : 'Conteúdo 3'; ?>" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide3_image); ?> )">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner3">
											<span>Clique para editar esse conteúdo</span>
										</a>

										<div class="admingrid-fullbanner-item-title">
											<p><?php echo !empty($object->vision_mission_slide3_title) ? $object->vision_mission_slide3_title : 'Lorem ipsum dolor'; ?></p>
										</div>

										<div class="admingrid-fullbanner-item-text">
											<p><?php echo !empty($object->vision_mission_slide3_text) ? $object->vision_mission_slide3_text : ''; ?></p>

											<?php if(!empty(!empty($object->vision_mission_slide3_button_text))){ ?>
												<span class="admingrid-fullbanner-item-text-btn"><?php echo !empty($object->vision_mission_slide3_button_text) ? $object->vision_mission_slide3_button_text : 'lorem ipsum dolor' ?></span>
											<?php } ?>
										</div>
									</div>

									<div class="admingrid-fullbanner-item" data-thumb-title="<?php echo !empty($object->vision_mission_slide4_title) ? $object->vision_mission_slide4_title : 'Conteúdo 4'; ?>" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide4_image); ?> )">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner4">
											<span>Clique para editar esse conteúdo</span>
										</a>

										<div class="admingrid-fullbanner-item-title">
											<p><?php echo !empty($object->vision_mission_slide4_title) ? $object->vision_mission_slide4_title : 'Lorem ipsum dolor'; ?></p>
										</div>

										<div class="admingrid-fullbanner-item-text">
											<p><?php echo !empty($object->vision_mission_slide4_text) ? $object->vision_mission_slide4_text : ''; ?></p>

											<?php if(!empty(!empty($object->vision_mission_slide4_button_text))){ ?>
												<span class="admingrid-fullbanner-item-text-btn"><?php echo !empty($object->vision_mission_slide4_button_text) ? $object->vision_mission_slide4_button_text : 'lorem ipsum dolor' ?></span>
											<?php } ?>
										</div>
									</div>

									<div class="admingrid-fullbanner-item" data-thumb-title="<?php echo !empty($object->vision_mission_slide5_title) ? $object->vision_mission_slide5_title : 'Conteúdo 5'; ?>" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide5_image); ?> )">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner5">
											<span>Clique para editar esse conteúdo</span>
										</a>

										<div class="admingrid-fullbanner-item-title">
											<p><?php echo !empty($object->vision_mission_slide5_title) ? $object->vision_mission_slide5_title : 'Lorem ipsum dolor'; ?></p>
										</div>

										<div class="admingrid-fullbanner-item-text">
											<p><?php echo !empty($object->vision_mission_slide5_text) ? $object->vision_mission_slide5_text : ''; ?></p>
											<?php if(!empty(!empty($object->vision_mission_slide5_button_text))){ ?>
												<span class="admingrid-fullbanner-item-text-btn"><?php echo !empty($object->vision_mission_slide5_button_text) ? $object->vision_mission_slide5_button_text : 'lorem ipsum dolor' ?></span>
											<?php } ?>
										</div>
									</div>


								<?php }else{ ?>

									<div class="admingrid-fullbanner-item" data-thumb-title="Título 1" style="background-image: url(URL_AQUI)">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner1">
											<span>Clique para editar esse conteúdo 1</span>
										</a>

										<div class="admingrid-fullbanner-item-title">
											<p>Lorem ipsum dolor</p>
										</div>

										<div class="admingrid-fullbanner-item-text">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore exercitationem autem commodi assumenda quidem repudiandae non sunt nesciunt quae rerum?</p>

											<span class="admingrid-fullbanner-item-text-btn">lorem ipsum dolor</span>
										</div>
									</div>

									<div class="admingrid-fullbanner-item" data-thumb-title="Título 2" style="background-image: url(URL_AQUI)">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner2">
											<span>Clique para editar esse conteúdo 2</span>
										</a>

										<div class="admingrid-fullbanner-item-title">
											<p>Lorem ipsum dolor</p>
										</div>

										<div class="admingrid-fullbanner-item-text">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore exercitationem autem commodi assumenda quidem repudiandae non sunt nesciunt quae rerum?</p>

											<span class="admingrid-fullbanner-item-text-btn">lorem ipsum dolor</span>
										</div>
									</div>

									<div class="admingrid-fullbanner-item" data-thumb-title="Título 3" style="background-image: url(URL_AQUI)">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner3">
											<span>Clique para editar esse conteúdo 3</span>
										</a>

										<div class="admingrid-fullbanner-item-title">
											<p>Lorem ipsum dolor</p>
										</div>

										<div class="admingrid-fullbanner-item-text">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore exercitationem autem commodi assumenda quidem repudiandae non sunt nesciunt quae rerum?</p>

											<span class="admingrid-fullbanner-item-text-btn">lorem ipsum dolor</span>
										</div>
									</div>

									<div class="admingrid-fullbanner-item" data-thumb-title="Título 4" style="background-image: url(URL_AQUI)">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner4">
											<span>Clique para editar esse conteúdo 4</span>
										</a>

										<div class="admingrid-fullbanner-item-title">
											<p>Lorem ipsum dolor</p>
										</div>

										<div class="admingrid-fullbanner-item-text">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore exercitationem autem commodi assumenda quidem repudiandae non sunt nesciunt quae rerum?</p>

											<span class="admingrid-fullbanner-item-text-btn">lorem ipsum dolor</span>
										</div>
									</div>

									<div class="admingrid-fullbanner-item" data-thumb-title="Título 5" style="background-image: url(URL_AQUI)">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner5">
											<span>Clique para editar esse conteúdo 5</span>
										</a>

										<div class="admingrid-fullbanner-item-title">
											<p>Lorem ipsum dolor</p>
										</div>

										<div class="admingrid-fullbanner-item-text">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore exercitationem autem commodi assumenda quidem repudiandae non sunt nesciunt quae rerum?</p>

											<span class="admingrid-fullbanner-item-text-btn">lorem ipsum dolor</span>
										</div>
									</div>

								<?php } ?>


							</div>
						</div>


						<?php if(isset($object->id)){ ?>

							<article class="admingrid-item admingrid-item--3">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item3">
									<span>Clique para editar esse conteúdo</span>
								</a>

								<h2><?php echo !empty($object->who_we_are_title) ? $object->who_we_are_title : 'Lorem ipsum'; ?></h2>
								<p><?php echo !empty($object->who_we_are_text) ? $object->who_we_are_text : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et totam praesentium, deleniti tempora nesciunt quam iste ipsum eum, saepe libero?'; ?></p>
							</article>

						<?php }else{ ?>

							<article class="admingrid-item admingrid-item--3">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item3">
									<span>Clique para editar esse conteúdo</span>
								</a>

								<h2>Lorem ipsum</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et totam praesentium, deleniti tempora nesciunt quam iste ipsum eum, saepe libero?</p>
							</article>

						<?php } ?>


						<div class="admingrid-about-boxes">

							<?php if(isset($object->id)){ ?>

								<article class="admingrid-item admingrid-item--about-box">
									<a href="#" class="admingrid-edit-btn" data-open-modal="#quemsomosbox1">
										<span>Clique para editar esse conteúdo</span>
									</a>

									<h2><?php echo !empty($object->who_we_are1_title) ? $object->who_we_are1_title : 'Lorem ipsum'; ?></h2>
									<p><?php echo $object->who_we_are1_prefix.$object->who_we_are1_value.$object->who_we_are1_unit; ?></p>
									<span><?php echo !empty($object->who_we_are1_box_text) ? $object->who_we_are1_box_text : 'lorem ipsum'; ?></span>
								</article>

								<article class="admingrid-item admingrid-item--about-box">
									<a href="#" class="admingrid-edit-btn" data-open-modal="#quemsomosbox2">
										<span>Clique para editar esse conteúdo</span>
									</a>

									<h2><?php echo !empty($object->who_we_are2_title) ? $object->who_we_are2_title : 'Lorem ipsum'; ?></h2>
									<p><?php echo $object->who_we_are2_prefix.$object->who_we_are2_value.$object->who_we_are2_unit; ?></p>
									<span><?php echo !empty($object->who_we_are2_box_text) ? $object->who_we_are2_box_text : 'lorem ipsum'; ?></span>
								</article>

								<article class="admingrid-item admingrid-item--about-box">
									<a href="#" class="admingrid-edit-btn" data-open-modal="#quemsomosbox3">
										<span>Clique para editar esse conteúdo</span>
									</a>

									<h2><?php echo !empty($object->who_we_are3_title) ? $object->who_we_are3_title : 'Lorem ipsum'; ?></h2>
									<p><?php echo $object->who_we_are3_prefix.$object->who_we_are3_value.$object->who_we_are3_unit; ?></p>
									<span><?php echo !empty($object->who_we_are3_box_text) ? $object->who_we_are3_box_text : 'lorem ipsum'; ?></span>
								</article>

								<article class="admingrid-item admingrid-item--about-box">
									<a href="#" class="admingrid-edit-btn" data-open-modal="#quemsomosbox4">
										<span>Clique para editar esse conteúdo</span>
									</a>

									<h2><?php echo !empty($object->who_we_are4_title) ? $object->who_we_are4_title : 'Lorem ipsum'; ?></h2>
									<p><?php echo $object->who_we_are4_prefix.$object->who_we_are4_value.$object->who_we_are4_unit; ?></p>
									<span><?php echo !empty($object->who_we_are4_box_text) ? $object->who_we_are4_box_text : 'lorem ipsum'; ?></span>
								</article>


							<?php }else{ ?>

								<article class="admingrid-item admingrid-item--about-box">
									<a href="#" class="admingrid-edit-btn" data-open-modal="#quemsomosbox1">
										<span>Clique para editar esse conteúdo</span>
									</a>

									<h2>Lorem ipsum</h2>
									<p>XXX</p>
									<span>lorem ipsum</span>
								</article>

								<article class="admingrid-item admingrid-item--about-box">
									<a href="#" class="admingrid-edit-btn" data-open-modal="#quemsomosbox2">
										<span>Clique para editar esse conteúdo</span>
									</a>

									<h2>Lorem ipsum</h2>
									<p>XXX</p>
									<span>lorem ipsum</span>
								</article>

								<article class="admingrid-item admingrid-item--about-box">
									<a href="#" class="admingrid-edit-btn" data-open-modal="#quemsomosbox3">
										<span>Clique para editar esse conteúdo</span>
									</a>

									<h2>Lorem ipsum</h2>
									<p>XXX</p>
									<span>lorem ipsum</span>
								</article>

								<article class="admingrid-item admingrid-item--about-box">
									<a href="#" class="admingrid-edit-btn" data-open-modal="#quemsomosbox4">
										<span>Clique para editar esse conteúdo</span>
									</a>

									<h2>Lorem ipsum</h2>
									<p>XXX</p>
									<span>lorem ipsum</span>
								</article>

							<?php } ?>

						</div>

						<?php if(isset($object->id)){ ?>

							<article class="admingrid-item admingrid-item--4" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('about', $object->social_responsability_image); ?> )">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item4">
									<span>Clique para editar esse conteúdo</span>
								</a>

								<div class="admingrid-item-content">
									<h2><?php echo !empty($object->social_responsability_title) ? $object->social_responsability_title : 'Lorem ipsum'; ?></h2>
									<p><?php echo !empty($object->social_responsability_text) ? $object->social_responsability_text : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, voluptas?'; ?></p>
									<span><?php echo !empty($object->social_responsability_button_text) ? $object->social_responsability_button_text : 'Lorem ipsum'; ?></span>
								</div>
							</article>

						<?php }else{ ?>

							<article class="admingrid-item admingrid-item--4" style="background-image: url(URL_AQUI)">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item4">
									<span>Clique para editar esse conteúdo</span>
								</a>

								<div class="admingrid-item-content">
									<h2>Lorem ipsum</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, voluptas?</p>
									<span>Lorem ipsum</span>
								</div>
							</article>

						<?php } ?>

						<?php if(isset($object->id)){ ?>

							<article class="admingrid-item admingrid-item--5">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item5">
									<span>Clique para editar esse conteúdo</span>
								</a>

								<div class="admingrid-item-content">
									<h2><?php echo !empty($object->assistance_programs_title) ? $object->assistance_programs_title : 'Lorem ipsum'; ?></h2>
									<p><?php echo !empty($object->assistance_programs_text) ? $object->assistance_programs_text : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, voluptas?'; ?></p>
								</div>

								<div class="admingrid-item-image" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('about', $object->assistance_programs_image); ?> )"></div>
							</article>

						<?php }else{ ?>

							<article class="admingrid-item admingrid-item--5">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item5">
									<span>Clique para editar esse conteúdo</span>
								</a>

								<div class="admingrid-item-content">
									<h2>Lorem ipsum</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, voluptas?</p>
								</div>

								<div class="admingrid-item-image" style="background-image: url(URL_AQUI)"></div>
							</article>

						<?php } ?>

						<?php if(isset($object->id)){ ?>

							<article class="admingrid-item admingrid-item--6">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item6">
									<span>Clique para editar esse conteúdo</span>
								</a>

								<div class="admingrid-item-content">
									<h2><?php echo !empty($object->our_history_programs_title) ? $object->our_history_programs_title : 'Lorem ipsum'; ?></h2>
									<p><?php echo !empty($object->our_history_programs_text) ? $object->our_history_programs_text : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, voluptas?'; ?></p>
									<span><?php echo !empty($object->our_history_button_text) ? $object->our_history_button_text : 'Lorem ipsum'; ?></span>
									<p><?php echo !empty($object->our_history_low_title) ? $object->our_history_low_title : ''; ?></p>
								</div>

								<div class="admingrid-item-image" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('about', $object->our_history_programs_image); ?> )"></div>
							</article>

						<?php }else{ ?>

							<article class="admingrid-item admingrid-item--6">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item6">
									<span>Clique para editar esse conteúdo</span>
								</a>

								<div class="admingrid-item-content">
									<h2>Lorem ipsum</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, voluptas?</p>
									<span>Lorem ipsum</span>
									<p>Lorem ipsum dolor sit amet!</p>
								</div>

								<div class="admingrid-item-image" style="background-image: url(URL_AQUI); ?> )"></div>
							</article>

						<?php } ?>


						<?php if(isset($object->id)){ ?>

							<article class="admingrid-item admingrid-item--7">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item7">
									<span>Clique para editar esse conteúdo</span>
								</a>

								<div class="admingrid-item-image" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('about', $object->our_products_image); ?> )"></div>
								<div class="admingrid-item-content">
									<h2><?php echo !empty($object->our_products_title) ? $object->our_products_title : 'Lorem ipsum'; ?></h2>
									<p><?php echo !empty($object->our_products_text) ? $object->our_products_text : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, voluptas?'; ?></p>
								</div>
							</article>

						<?php }else{ ?>

							<article class="admingrid-item admingrid-item--7">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item7">
									<span>Clique para editar esse conteúdo</span>
								</a>

								<div class="admingrid-item-image" style="background-image: url(URL_AQUI)"></div>
								<div class="admingrid-item-content">
									<h2>Lorem psum</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, voluptas?</p>
								</div>
							</article>



						<?php } ?>

						<!--
						<article class="admingrid-marjanmore-title">
							<a href="#" class="admingrid-edit-btn" data-open-modal="#marjanmore">
								<span>Clique para editar esse conteúdo</span>
							</a>
							<h2>Lorem ipsum dolor sit amet</h2>
						</article>


						<div class="admingrid-marjanmore-items">

							<?php for($i = 0; $i < 4; $i++) { ?>
								<article class="admingrid-marjanmore-item admingrid-marjanmore-item--<?php echo $i+1; ?>">
									<a href="#" class="admingrid-edit-btn" data-open-modal="#marjanmore<?php echo $i+1; ?>">
										<span>Clique para editar esse conteúdo</span>
									</a>
									<img src="http://i.imgur.com/9sbWBb5.jpg" alt="">
									<p>Lorem ipsum</p>
								</article>
							<?php } ?>

						</div>
						-->


						<!-- MODALS -->

						<div class="admingrid-modal" data-modal="item0">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->principal_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->principal_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="principal_image" placeholder="Imagem">
											</div>
										</div>

										<div class="col-xs-6">

											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about/video', $object->principal_video)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about/video', $object->principal_video); ?>' width='50' alt=''></span>
											<?php }else if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->principal_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->principal_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>

											<div class="form-group">

												<div class="gallery-container" data-url-upload="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/upload_file/video'); ?>" data-input-hidden-name="arquivoGaleria">

													<label>Vídeo</label>
													<input type="file" class="form-control file-upload" name="principal_video" placeholder="Vídeo">

													<div class="progress progress-sm active" style="top:60px">
														<div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="300" style="width: 0%">
															<span class="sr-only"></span>
														</div>
													</div>
													<!-- /progress -->

													<!-- <div class="gallery clearfix">
														<ul>
															<li class="gallery-item" data-id="">
																<a href="#" class="btn btn-danger btn-sm btn-gallery-remove-item">Excluir</a>
																<input type="hidden" name="arquivoGaleria" value="3">
															</li>
														</ul>
													</div> -->

												</div> <!-- /gallery-container -->
											</div> <!-- /form-group -->


										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Horizontal</label><br/>
												<label style="margin-right: 10px;">
													<input type="radio" name="principal_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->principal_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px;">
													<input type="radio" name="principal_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->principal_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
												</label>
												<label>
													<input type="radio" name="principal_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->principal_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Vertical</label><br/>
												<label style="margin-right: 10px">
													<input type="radio" name="principal_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->principal_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px">
													<input type="radio" name="principal_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->principal_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
												</label>
												<label>
													<input type="radio" name="principal_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->principal_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
												</label>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->principal_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->principal_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="principal_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->principal_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->principal_image_tablet); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="principal_image_tablet" placeholder="Imagem Tablet">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto Esquerda</label>
												<textarea class="form-control" name="principal_left_text" placeholder="Texto esquerda"><?php echo isset($object->id) ? strip_tags($object->principal_left_text) : ''; ?></textarea>
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto direita</label>
												<textarea class="form-control" name="principal_right_text" placeholder="Texto direita"><?php echo isset($object->id) ? strip_tags($object->principal_right_text) : ''; ?></textarea>
											</div>
										</div>
									</div>

									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>


								</form>
							</div>
						</div>

						<div class="admingrid-modal" data-modal="item1">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->calltonext_section_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->calltonext_section_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="calltonext_section_image" placeholder="Conheça nossa empresa">
											</div>
										</div>

									</div>


									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>


								</form>
							</div>
						</div>

						<div class="admingrid-modal" data-modal="item2">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">

										<div class="col-xs-6">
											<div class="form-group">
												<label>Título Central</label>
												<input type="text" class="form-control" name="company_text" placeholder="Nossa empresa" value="<?php echo isset($object->id) ? $object->company_text : ''; ?>">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Título Esquerda</label>
												<input type="text" class="form-control" name="mission_section_title" placeholder="Missão Título" value="<?php echo isset($object->id) ? $object->mission_section_title : ''; ?>">
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto Esquerda</label>
												<textarea class="form-control" name="mission_section_text" placeholder="Missão Texto"><?php echo isset($object->id) ? strip_tags($object->mission_section_text) : ''; ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Título Direita</label>
												<input type="text" class="form-control" name="vision_section_title" placeholder="Visão Título" value="<?php echo isset($object->id) ? $object->vision_section_title : ''; ?>">
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto Direita</label>
												<textarea class="form-control" name="vision_section_text" placeholder="Visão Texto"><?php echo isset($object->id) ? strip_tags($object->vision_section_text) : ''; ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<label>Frase destaque</label>
												<textarea class="form-control" name="vision_mission_catchphrase" placeholder="Visão Texto"><?php echo isset($object->id) ? strip_tags($object->vision_mission_catchphrase) : ''; ?></textarea>
											</div>
										</div>
									</div>


									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>


								</form>
							</div>
						</div>


						<div class="admingrid-modal" data-modal="fullbanner1">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide1_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide1_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="vision_mission_slide1_image" placeholder="Imagem">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Horizontal</label><br/>
												<label style="margin-right: 10px;">
													<input type="radio" name="vision_mission_slide1_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->vision_mission_slide1_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px;">
													<input type="radio" name="vision_mission_slide1_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->vision_mission_slide1_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
												</label>
												<label>
													<input type="radio" name="vision_mission_slide1_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->vision_mission_slide1_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Vertical</label><br/>
												<label style="margin-right: 10px">
													<input type="radio" name="vision_mission_slide1_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->vision_mission_slide1_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px">
													<input type="radio" name="vision_mission_slide1_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->vision_mission_slide1_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
												</label>
												<label>
													<input type="radio" name="vision_mission_slide1_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->vision_mission_slide1_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
												</label>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide1_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide1_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="vision_mission_slide1_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide1_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide1_image_tablet); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="vision_mission_slide1_image_tablet" placeholder="Imagem Tablet">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Título</label>
												<input type="text" class="form-control" name="vision_mission_slide1_title" placeholder="Título" value="<?php echo isset($object->id) ? $object->vision_mission_slide1_title : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto direita</label>
												<textarea class="form-control" name="vision_mission_slide1_text" placeholder="Texto"><?php echo isset($object->id) ? strip_tags($object->vision_mission_slide1_text) : ''; ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Botão texto</label>
												<input type="text" class="form-control" name="vision_mission_slide1_button_text" placeholder="Botão Texto" value="<?php echo isset($object->id) ? $object->vision_mission_slide1_button_text : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Botão Link</label>
												<input type="text" class="form-control" name="vision_mission_slide1_button_link" placeholder="Botão Link" value="<?php echo isset($object->id) ? $object->vision_mission_slide1_button_link : ''; ?>">
											</div>
										</div>
									</div>

									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>


								</form>
							</div>
						</div>

						<div class="admingrid-modal" data-modal="fullbanner2">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide2_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide2_image); ?>' width='200' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/200x200' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="vision_mission_slide2_image" placeholder="Imagem">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Horizontal</label><br/>
												<label style="margin-right: 20px;">
													<input type="radio" name="vision_mission_slide2_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->vision_mission_slide2_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 20px;">
													<input type="radio" name="vision_mission_slide2_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->vision_mission_slide2_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
												</label>
												<label>
													<input type="radio" name="vision_mission_slide2_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->vision_mission_slide2_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Vertical</label><br/>
												<label style="margin-right: 20px">
													<input type="radio" name="vision_mission_slide2_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->vision_mission_slide2_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 20px">
													<input type="radio" name="vision_mission_slide2_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->vision_mission_slide2_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
												</label>
												<label>
													<input type="radio" name="vision_mission_slide2_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->vision_mission_slide2_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
												</label>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide2_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide2_image_mobile); ?>' width='200' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/200x200' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="vision_mission_slide2_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide2_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide2_image_tablet); ?>' width='200' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/200x200' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="vision_mission_slide2_image_tablet" placeholder="Imagem Tablet">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Título</label>
												<input type="text" class="form-control" name="vision_mission_slide2_title" placeholder="Título" value="<?php echo isset($object->id) ? $object->vision_mission_slide2_title : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto direita</label>
												<textarea class="form-control" name="vision_mission_slide2_text" placeholder="Texto"><?php echo isset($object->id) ? strip_tags($object->vision_mission_slide2_text) : ''; ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Botão texto</label>
												<input type="text" class="form-control" name="vision_mission_slide2_button_text" placeholder="Botão Texto" value="<?php echo isset($object->id) ? $object->vision_mission_slide2_button_text : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Botão Link</label>
												<input type="text" class="form-control" name="vision_mission_slide2_button_link" placeholder="Botão Link" value="<?php echo isset($object->id) ? $object->vision_mission_slide2_button_link : ''; ?>">
											</div>
										</div>
									</div>

									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>


								</form>
							</div>
						</div>

						<div class="admingrid-modal" data-modal="fullbanner3">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide3_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide3_image); ?>' width='200' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/300x300' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="vision_mission_slide3_image" placeholder="Imagem">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Horizontal</label><br/>
												<label style="margin-right: 30px;">
													<input type="radio" name="vision_mission_slide3_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->vision_mission_slide3_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 30px;">
													<input type="radio" name="vision_mission_slide3_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->vision_mission_slide3_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
												</label>
												<label>
													<input type="radio" name="vision_mission_slide3_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->vision_mission_slide3_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Vertical</label><br/>
												<label style="margin-right: 30px">
													<input type="radio" name="vision_mission_slide3_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->vision_mission_slide3_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 30px">
													<input type="radio" name="vision_mission_slide3_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->vision_mission_slide3_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
												</label>
												<label>
													<input type="radio" name="vision_mission_slide3_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->vision_mission_slide3_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
												</label>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide3_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide3_image_mobile); ?>' width='200' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/300x300' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="vision_mission_slide3_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide3_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide3_image_tablet); ?>' width='200' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/300x300' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="vision_mission_slide3_image_tablet" placeholder="Imagem Tablet">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Título</label>
												<input type="text" class="form-control" name="vision_mission_slide3_title" placeholder="Título" value="<?php echo isset($object->id) ? $object->vision_mission_slide3_title : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto direita</label>
												<textarea class="form-control" name="vision_mission_slide3_text" placeholder="Texto"><?php echo isset($object->id) ? strip_tags($object->vision_mission_slide3_text) : ''; ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Botão texto</label>
												<input type="text" class="form-control" name="vision_mission_slide3_button_text" placeholder="Botão Texto" value="<?php echo isset($object->id) ? $object->vision_mission_slide3_button_text : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Botão Link</label>
												<input type="text" class="form-control" name="vision_mission_slide3_button_link" placeholder="Botão Link" value="<?php echo isset($object->id) ? $object->vision_mission_slide3_button_link : ''; ?>">
											</div>
										</div>
									</div>

									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>


								</form>
							</div>
						</div>

						<div class="admingrid-modal" data-modal="fullbanner4">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide4_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide4_image); ?>' width='200' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/400x400' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="vision_mission_slide4_image" placeholder="Imagem">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Horizontal</label><br/>
												<label style="margin-right: 40px;">
													<input type="radio" name="vision_mission_slide4_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->vision_mission_slide4_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 40px;">
													<input type="radio" name="vision_mission_slide4_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->vision_mission_slide4_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
												</label>
												<label>
													<input type="radio" name="vision_mission_slide4_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->vision_mission_slide4_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Vertical</label><br/>
												<label style="margin-right: 40px">
													<input type="radio" name="vision_mission_slide4_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->vision_mission_slide4_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 40px">
													<input type="radio" name="vision_mission_slide4_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->vision_mission_slide4_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
												</label>
												<label>
													<input type="radio" name="vision_mission_slide4_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->vision_mission_slide4_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
												</label>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide4_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide4_image_mobile); ?>' width='200' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/400x400' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="vision_mission_slide4_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide4_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide4_image_tablet); ?>' width='200' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/400x400' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="vision_mission_slide4_image_tablet" placeholder="Imagem Tablet">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Título</label>
												<input type="text" class="form-control" name="vision_mission_slide4_title" placeholder="Título" value="<?php echo isset($object->id) ? $object->vision_mission_slide4_title : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto direita</label>
												<textarea class="form-control" name="vision_mission_slide4_text" placeholder="Texto"><?php echo isset($object->id) ? strip_tags($object->vision_mission_slide4_text) : ''; ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Botão texto</label>
												<input type="text" class="form-control" name="vision_mission_slide4_button_text" placeholder="Botão Texto" value="<?php echo isset($object->id) ? $object->vision_mission_slide4_button_text : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Botão Link</label>
												<input type="text" class="form-control" name="vision_mission_slide4_button_link" placeholder="Botão Link" value="<?php echo isset($object->id) ? $object->vision_mission_slide4_button_link : ''; ?>">
											</div>
										</div>
									</div>

									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>


								</form>
							</div>
						</div>

						<div class="admingrid-modal" data-modal="fullbanner5">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide5_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide5_image); ?>' width='200' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/500x500' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="vision_mission_slide5_image" placeholder="Imagem">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Horizontal</label><br/>
												<label style="margin-right: 40px;">
													<input type="radio" name="vision_mission_slide5_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->vision_mission_slide5_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 40px;">
													<input type="radio" name="vision_mission_slide5_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->vision_mission_slide5_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
												</label>
												<label>
													<input type="radio" name="vision_mission_slide5_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->vision_mission_slide5_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Vertical</label><br/>
												<label style="margin-right: 40px">
													<input type="radio" name="vision_mission_slide5_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->vision_mission_slide5_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 40px">
													<input type="radio" name="vision_mission_slide5_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->vision_mission_slide5_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
												</label>
												<label>
													<input type="radio" name="vision_mission_slide5_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->vision_mission_slide5_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
												</label>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide5_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide5_image_mobile); ?>' width='200' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/500x500' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="vision_mission_slide5_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide5_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->vision_mission_slide5_image_tablet); ?>' width='200' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/500x500' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="vision_mission_slide5_image_tablet" placeholder="Imagem Tablet">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Título</label>
												<input type="text" class="form-control" name="vision_mission_slide5_title" placeholder="Título" value="<?php echo isset($object->id) ? $object->vision_mission_slide5_title : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto direita</label>
												<textarea class="form-control" name="vision_mission_slide5_text" placeholder="Texto"><?php echo isset($object->id) ? strip_tags($object->vision_mission_slide5_text) : ''; ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Botão texto</label>
												<input type="text" class="form-control" name="vision_mission_slide5_button_text" placeholder="Botão Texto" value="<?php echo isset($object->id) ? $object->vision_mission_slide5_button_text : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Botão Link</label>
												<input type="text" class="form-control" name="vision_mission_slide5_button_link" placeholder="Botão Link" value="<?php echo isset($object->id) ? $object->vision_mission_slide5_button_link : ''; ?>">
											</div>
										</div>
									</div>

									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>


								</form>
							</div>
						</div>


						<div class="admingrid-modal" data-modal="item3">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">

										<div class="col-xs-6">
											<div class="form-group">
												<label>Título</label>
												<input type="text" class="form-control" name="who_we_are_title" placeholder="Quem somos" value="<?php echo isset($object->id) ? $object->who_we_are_title : ''; ?>">
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto</label>
												<textarea class="form-control" name="who_we_are_text"><?php echo isset($object->id) ? strip_tags($object->who_we_are_text) : ''; ?></textarea>
											</div>
										</div>

									</div>


									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>


								</form>
							</div>
						</div>


						<div class="admingrid-modal" data-modal="quemsomosbox1">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Título</label>
												<input type="text" class="form-control" name="who_we_are1_title" value="<?php echo isset($object->id) ? $object->who_we_are1_title : ''; ?>">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-3">
											<div class="form-group">
												<label>Prefixo</label>
												<input type="text" class="form-control" name="who_we_are1_prefix" placeholder="R$" value="<?php echo isset($object->id) ? $object->who_we_are1_prefix : ''; ?>">
											</div>
										</div>
										<div class="col-xs-3">
											<div class="form-group">
												<label>Valor</label>
												<input type="number" step="0.01" class="form-control" name="who_we_are1_value" placeholder="00" value="<?php echo isset($object->id) ? $object->who_we_are1_value : ''; ?>">
											</div>
										</div>
										<div class="col-xs-3">
											<div class="form-group">
												<label>Unidade</label>
												<input type="text" class="form-control" name="who_we_are1_unit" placeholder="%" value="<?php echo isset($object->id) ? $object->who_we_are1_unit : ''; ?>">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto rodapé</label>
												<input type="text" class="form-control" name="who_we_are1_box_text" value="<?php echo isset($object->id) ? $object->who_we_are1_box_text : ''; ?>">
											</div>
										</div>
									</div>


									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>

								</form>
							</div>
						</div>

						<div class="admingrid-modal" data-modal="quemsomosbox2">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Título</label>
												<input type="text" class="form-control" name="who_we_are2_title" value="<?php echo isset($object->id) ? $object->who_we_are2_title : ''; ?>">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-3">
											<div class="form-group">
												<label>Prefixo</label>
												<input type="text" class="form-control" name="who_we_are2_prefix" placeholder="R$" value="<?php echo isset($object->id) ? $object->who_we_are2_prefix : ''; ?>">
											</div>
										</div>
										<div class="col-xs-3">
											<div class="form-group">
												<label>Valor</label>
												<input type="number" step="0.01" class="form-control" name="who_we_are2_value" placeholder="00" value="<?php echo isset($object->id) ? $object->who_we_are2_value : ''; ?>">
											</div>
										</div>
										<div class="col-xs-3">
											<div class="form-group">
												<label>Unidade</label>
												<input type="text" class="form-control" name="who_we_are2_unit" placeholder="%" value="<?php echo isset($object->id) ? $object->who_we_are2_unit : ''; ?>">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto rodapé</label>
												<input type="text" class="form-control" name="who_we_are2_box_text" value="<?php echo isset($object->id) ? $object->who_we_are2_box_text : ''; ?>">
											</div>
										</div>
									</div>


									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>

								</form>
							</div>
						</div>

						<div class="admingrid-modal" data-modal="quemsomosbox3">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Título</label>
												<input type="text" class="form-control" name="who_we_are3_title" value="<?php echo isset($object->id) ? $object->who_we_are3_title : ''; ?>">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-3">
											<div class="form-group">
												<label>Prefixo</label>
												<input type="text" class="form-control" name="who_we_are3_prefix" placeholder="R$" value="<?php echo isset($object->id) ? $object->who_we_are3_prefix : ''; ?>">
											</div>
										</div>
										<div class="col-xs-3">
											<div class="form-group">
												<label>Valor</label>
												<input type="number" step="0.01" class="form-control" name="who_we_are3_value" placeholder="00" value="<?php echo isset($object->id) ? $object->who_we_are3_value : ''; ?>">
											</div>
										</div>
										<div class="col-xs-3">
											<div class="form-group">
												<label>Unidade</label>
												<input type="text" class="form-control" name="who_we_are3_unit" placeholder="%" value="<?php echo isset($object->id) ? $object->who_we_are3_unit : ''; ?>">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto rodapé</label>
												<input type="text" class="form-control" name="who_we_are3_box_text" value="<?php echo isset($object->id) ? $object->who_we_are3_box_text : ''; ?>">
											</div>
										</div>
									</div>


									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>

								</form>
							</div>
						</div>

						<div class="admingrid-modal" data-modal="quemsomosbox4">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Título</label>
												<input type="text" class="form-control" name="who_we_are4_title" value="<?php echo isset($object->id) ? $object->who_we_are4_title : ''; ?>">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-3">
											<div class="form-group">
												<label>Prefixo</label>
												<input type="text" class="form-control" name="who_we_are4_prefix" placeholder="R$" value="<?php echo isset($object->id) ? $object->who_we_are4_prefix : ''; ?>">
											</div>
										</div>
										<div class="col-xs-3">
											<div class="form-group">
												<label>Valor</label>
												<input type="number" step="0.01" class="form-control" name="who_we_are4_value" placeholder="00" value="<?php echo isset($object->id) ? $object->who_we_are4_value : ''; ?>">
											</div>
										</div>
										<div class="col-xs-3">
											<div class="form-group">
												<label>Unidade</label>
												<input type="text" class="form-control" name="who_we_are4_unit" placeholder="%" value="<?php echo isset($object->id) ? $object->who_we_are4_unit : ''; ?>">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto rodapé</label>
												<input type="text" class="form-control" name="who_we_are4_box_text" value="<?php echo isset($object->id) ? $object->who_we_are4_box_text : ''; ?>">
											</div>
										</div>
									</div>


									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>

								</form>
							</div>
						</div>


						<div class="admingrid-modal" data-modal="item4">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->social_responsability_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->social_responsability_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="social_responsability_image" placeholder="Imagem">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Horizontal</label><br/>
												<label style="margin-right: 10px;">
													<input type="radio" name="social_responsability_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->social_responsability_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px;">
													<input type="radio" name="social_responsability_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->social_responsability_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
												</label>
												<label>
													<input type="radio" name="social_responsability_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->social_responsability_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Vertical</label><br/>
												<label style="margin-right: 10px">
													<input type="radio" name="social_responsability_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->social_responsability_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px">
													<input type="radio" name="social_responsability_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->social_responsability_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
												</label>
												<label>
													<input type="radio" name="social_responsability_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->social_responsability_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
												</label>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->social_responsability_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->social_responsability_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="social_responsability_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->social_responsability_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->social_responsability_image_tablet); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="social_responsability_image_tablet" placeholder="Imagem Tablet">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Título</label>
												<input type="text" class="form-control" name="social_responsability_title" value="<?php echo isset($object->id) ? $object->social_responsability_title : ''; ?>">
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto</label>
												<textarea class="form-control" name="social_responsability_text"><?php echo isset($object->id) ? strip_tags($object->social_responsability_text) : ''; ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Botão texto</label>
												<input type="text" class="form-control" name="social_responsability_button_text" value="<?php echo isset($object->id) ? $object->social_responsability_button_text : ''; ?>">
											</div>
										</div>
									</div>


									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>


								</form>
							</div>
						</div>


						<div class="admingrid-modal" data-modal="item5">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->assistance_programs_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->assistance_programs_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="assistance_programs_image" placeholder="Imagem">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Horizontal</label><br/>
												<label style="margin-right: 10px;">
													<input type="radio" name="assistance_programs_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->assistance_programs_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px;">
													<input type="radio" name="assistance_programs_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->assistance_programs_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
												</label>
												<label>
													<input type="radio" name="assistance_programs_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->assistance_programs_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Vertical</label><br/>
												<label style="margin-right: 10px">
													<input type="radio" name="assistance_programs_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->assistance_programs_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px">
													<input type="radio" name="assistance_programs_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->assistance_programs_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
												</label>
												<label>
													<input type="radio" name="assistance_programs_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->assistance_programs_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
												</label>
											</div>
										</div>
									</div>



									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->assistance_programs_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->assistance_programs_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="assistance_programs_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->assistance_programs_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->assistance_programs_image_tablet); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="assistance_programs_image_tablet" placeholder="Imagem Tablet">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Título</label>
												<input type="text" class="form-control" name="assistance_programs_title" value="<?php echo isset($object->id) ? $object->assistance_programs_title : ''; ?>">
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto</label>
												<textarea class="form-control" name="assistance_programs_text"><?php echo isset($object->id) ? strip_tags($object->assistance_programs_text) : ''; ?></textarea>
											</div>
										</div>
									</div>


									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>


								</form>
							</div>
						</div>


						<div class="admingrid-modal" data-modal="item6">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->our_history_programs_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->our_history_programs_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="our_history_programs_image" placeholder="Imagem">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Horizontal</label><br/>
												<label style="margin-right: 10px;">
													<input type="radio" name="our_history_programs_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->our_history_programs_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px;">
													<input type="radio" name="our_history_programs_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->our_history_programs_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
												</label>
												<label>
													<input type="radio" name="our_history_programs_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->our_history_programs_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Vertical</label><br/>
												<label style="margin-right: 10px">
													<input type="radio" name="our_history_programs_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->our_history_programs_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px">
													<input type="radio" name="our_history_programs_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->our_history_programs_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
												</label>
												<label>
													<input type="radio" name="our_history_programs_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->our_history_programs_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
												</label>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->our_history_programs_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->our_history_programs_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="our_history_programs_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->our_history_programs_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->our_history_programs_image_tablet); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="our_history_programs_image_tablet" placeholder="Imagem Tablet">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Título</label>
												<input type="text" class="form-control" name="our_history_programs_title" value="<?php echo isset($object->id) ? $object->our_history_programs_title : ''; ?>">
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto</label>
												<textarea class="form-control" name="our_history_programs_text"><?php echo isset($object->id) ? strip_tags($object->our_history_programs_text) : ''; ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Botão texto</label>
												<input type="text" class="form-control" name="our_history_button_text" value="<?php echo isset($object->id) ? $object->our_history_button_text : ''; ?>">
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto rodapé</label>
												<input type="text" class="form-control" name="our_history_low_title" value="<?php echo isset($object->id) ? $object->our_history_low_title : ''; ?>">
											</div>
										</div>
									</div>


									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>


								</form>
							</div>
						</div>


						<div class="admingrid-modal" data-modal="item7">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->our_products_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->our_products_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="our_products_image" placeholder="Imagem">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Horizontal</label><br/>
												<label style="margin-right: 10px;">
													<input type="radio" name="our_products_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->our_products_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px;">
													<input type="radio" name="our_products_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->our_products_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
												</label>
												<label>
													<input type="radio" name="our_products_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->our_products_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Vertical</label><br/>
												<label style="margin-right: 10px">
													<input type="radio" name="our_products_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->our_products_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px">
													<input type="radio" name="our_products_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->our_products_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
												</label>
												<label>
													<input type="radio" name="our_products_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->our_products_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
												</label>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->our_products_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->our_products_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="our_products_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('about', $object->our_products_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('about', $object->our_products_image_tablet); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="our_products_image_tablet" placeholder="Imagem Tablet">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Título</label>
												<input type="text" class="form-control" name="our_products_title" value="<?php echo isset($object->id) ? $object->our_products_title : ''; ?>">
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto</label>
												<textarea class="form-control" name="our_products_text"><?php echo isset($object->id) ? strip_tags($object->our_products_text) : ''; ?></textarea>
											</div>
										</div>
									</div>

									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>


								</form>
							</div>
						</div>



						<div class="admingrid-modal" data-modal="marjanmore">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">

										<div class="col-xs-6">
											<div class="form-group">
												<label>Título</label>
												<input type="text" class="form-control" name="know_more_section_title" value="<?php echo isset($object->id) ? $object->our_products_title : ''; ?>">
											</div>
										</div>

									</div>


									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>


								</form>
							</div>
						</div>

						<!--
						<?php for($i = 0; $i < 4; $i++) { ?>
							<div class="admingrid-modal" data-modal="marjanmore<?php echo $i+1; ?>">
								<div class="admingrid-modal-wrapper">
									<button class="admingrid-modal-close__btn">Fechar</button>
									<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

										<div class="row">
											<div class="col-xs-6">
												<div class="form-group">
													<label>Imagem</label>
													<input type="file" class="form-control" name="know_more<?php echo $i+1; ?>_image" placeholder="Imagem">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-6">
												<div class="form-group">
													<label>Imagem Mobile</label>
													<input type="file" class="form-control" name="know_more<?php echo $i+1; ?>_image_mobile" placeholder="Imagem Mobile">
												</div>
											</div>

											<div class="col-xs-6">
												<div class="form-group">
													<label>Imagem Tablet</label>
													<input type="file" class="form-control" name="know_more<?php echo $i+1; ?>_image_tablet" placeholder="Imagem Tablet">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-6">
												<div class="form-group">
													<label>Título</label>
													<input type="text" class="form-control" name="know_more<?php echo $i+1; ?>_title">
												</div>
											</div>
										</div>


										<div class="box-footer text-center">
											<button type="submit" class="btn btn-primary margin">Salvar</button>
										</div>


									</form>
								</div>
							</div>
						<?php } ?>
						-->

						<!-- FIM MODALS -->




					</section>



				</div><!-- /.box-body -->

			 </div><!-- /.box -->

		</div> <!-- /.col -->
	</div> <!-- /.row -->
</section> <!-- /.content -->