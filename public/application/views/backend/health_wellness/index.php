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

							<article class="admingrid-item admingrid-item--0" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->principal_image); ?> )">

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

							<article class="admingrid-item admingrid-item--1" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->calltonext_section_image); ?> )">
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
									<span>Clique aqui para editar esse conteúdo</span>
								</a>

								<p><?php echo !empty($object->call_text_secion) ? $object->call_text_secion : 'Lorem ipsum dolor sit amet'; ?></p>
							</article>


						<?php }else{ ?>

							<article class="admingrid-item admingrid-item--2">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item2">
									<span>Clique aqui para editar esse conteúdo</span>
								</a>

								<p>Lorem ipsum dolor sit amet...</p>
							</article>


						<?php }?>


						<?php if(isset($object->id)){ ?>


							<article class="admingrid-item admingrid-item--fullbanner admingrid-item--fullbanner1" >
								<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner1">
									<span>Clique aqui para editar esse conteúdo</span>
								</a>

								<div class="admingrid-item-col">
									<div class="admingrid-item-col-wrapper">
										<div class="admingrid-item-text">
											<h2><?php echo !empty($object->section1_title) ? $object->section1_title : 'lorem ipsum'; ?></h2>
											<p><?php echo !empty($object->section1_short_text) ? $object->section1_short_text : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores unde assumenda tenetur nisi quisquam aspernatur eveniet error architecto doloremque blanditiis?'; ?></p>
										</div>
										<img src="<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section1_campaign_logo); ?>" width='50' alt="">
									</div>
								</div>

								<div class="admingrid-item-image" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section1_image); ?> )">
									<p class="admingrid-item-toplink"><?php echo !empty($object->section1_text_link) ? $object->section1_text_link : 'www.loremipsum.com.br' ?></p>
									<div class="admingrid-item-links">
										<div class="admingrid-item-link admingrid-item-link--0">
											<p>
												<img src="<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section1_social_media1_icon); ?>" width="30" heigth="30" alt=""> <?php echo !empty($object->section1_social_media1_text_link) ? $object->section1_social_media1_text_link : 'lorem ipsum dolor' ?>
											</p>
										</div>
										<div class="admingrid-item-link admingrid-item-link--1">
											<p>
												<img src="<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section1_social_media2_icon); ?>" width="30" heigth="30" alt=""> <?php echo !empty($object->section1_social_media2_text_link) ? $object->section1_social_media2_text_link : 'lorem ipsum dolor' ?>
											</p>
										</div>
									</div>
								</div>

								<div class="admingrid-clear"></div>

							</article>

						<?php }else{ ?>

							<article class="admingrid-item admingrid-item--fullbanner admingrid-item--fullbanner1" >
								<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner1">
									<span>Clique aqui para editar esse conteúdo</span>
								</a>

								<div class="admingrid-item-col">
									<div class="admingrid-item-col-wrapper">
										<div class="admingrid-item-text">
											<h2>lorem ipsum</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos quia nihil eligendi vel laboriosam non, minima praesentium debitis animi enim.</p>
										</div>
										<img src="http://i.imgur.com/ZdJ1pMy.jpg" alt="">
									</div>
								</div>

								<div class="admingrid-item-image" style="background-image: url(URL_AQUI)">
									<p class="admingrid-item-toplink">www.loremipsum.com.br</p>
									<div class="admingrid-item-links">
										<div class="admingrid-item-link admingrid-item-link--0">
											<p>
												<img src="" alt=""> lorem ipsum dolor
											</p>
										</div>
										<div class="admingrid-item-link admingrid-item-link--1">
											<p>
												<img src="" alt=""> lorem ipsum dolor
											</p>
										</div>
									</div>
								</div>

								<div class="admingrid-clear"></div>

							</article>


						<?php } ?>


						<?php if(isset($object->id)){ ?>

							<article class="admingrid-item admingrid-item--fullbanner admingrid-item--fullbanner2" >
								<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner2">
									<span>Clique aqui para editar esse conteúdo</span>
								</a>

								<div class="admingrid-item-image" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section2_image); ?> )">
									<p class="admingrid-item-toplink"><?php echo !empty($object->section2_text_link) ? $object->section2_text_link : 'www.loremipsum.com.br' ?></p>
									<div class="admingrid-item-links">
										<div class="admingrid-item-link admingrid-item-link--0">
											<p>
												<img src="<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section2_social_media1_icon); ?>" width="30" heigth="30" alt=""> <?php echo !empty($object->section2_social_media1_text_link) ? $object->section2_social_media1_text_link : 'lorem ipsum dolor' ?>
											</p>
										</div>
										<div class="admingrid-item-link admingrid-item-link--1">
											<p>
												<img src="<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section2_social_media2_icon); ?>" width="30" heigth="30" alt=""> <?php echo !empty($object->section2_social_media2_text_link) ? $object->section2_social_media2_text_link : 'lorem ipsum dolor' ?>
											</p>
										</div>
									</div>
								</div>
								<div class="admingrid-item-col">
									<div class="admingrid-item-col-wrapper">
										<div class="admingrid-item-text">
											<h2><?php echo !empty($object->section2_title) ? $object->section2_title : 'lorem ipsum'; ?></h2>
											<p><?php echo !empty($object->section2_short_text) ? $object->section2_short_text : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores unde assumenda tenetur nisi quisquam aspernatur eveniet error architecto doloremque blanditiis?'; ?></p>
										</div>
										<img src="<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section2_campaign_logo); ?>" width="100" alt="">
									</div>
								</div>

								<div class="admingrid-clear"></div>

							</article>

						<?php }else{ ?>

							<article class="admingrid-item admingrid-item--fullbanner admingrid-item--fullbanner2" >
								<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner2">
									<span>Clique aqui para editar esse conteúdo</span>
								</a>

								<div class="admingrid-item-image" style="background-image: url(URL_AQUI)">
									<p class="admingrid-item-toplink">www.loremipsum.com.br</p>
									<div class="admingrid-item-links">
										<div class="admingrid-item-link admingrid-item-link--0">
											<p>
												<img src="" alt=""> lorem ipsum dolor
											</p>
										</div>
										<div class="admingrid-item-link admingrid-item-link--1">
											<p>
												<img src="" alt=""> lorem ipsum dolor
											</p>
										</div>
									</div>
								</div>
								<div class="admingrid-item-col">
									<div class="admingrid-item-col-wrapper">
										<div class="admingrid-item-text">
											<h2>lorem ipsum</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos quia nihil eligendi vel laboriosam non, minima praesentium debitis animi enim.</p>
										</div>
										<img src="http://i.imgur.com/ZdJ1pMy.jpg" alt="">
									</div>
								</div>

								<div class="admingrid-clear"></div>

							</article>

						<?php } ?>

						<?php if(isset($object->id)){ ?>


							<article class="admingrid-item admingrid-item--fullbanner admingrid-item--fullbanner3" >
								<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner3">
									<span>Clique aqui para editar esse conteúdo</span>
								</a>

								<div class="admingrid-item-col">
									<div class="admingrid-item-col-wrapper">
										<div class="admingrid-item-text">
											<h2><?php echo !empty($object->section3_title) ? $object->section3_title : 'lorem ipsum'; ?></h2>
											<p><?php echo !empty($object->section3_short_text) ? $object->section3_short_text : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores unde assumenda tenetur nisi quisquam aspernatur eveniet error architecto doloremque blanditiis?'; ?></p>
										</div>
										<img src="<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section3_campaign_logo); ?>" width='50' alt="">
									</div>
								</div>

								<div class="admingrid-item-image" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section3_image); ?> )">
									<p class="admingrid-item-toplink"><?php echo !empty($object->section3_text_link) ? $object->section3_text_link : 'www.loremipsum.com.br' ?></p>
									<div class="admingrid-item-links">
										<div class="admingrid-item-link admingrid-item-link--0">
											<p>
												<img src="<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section3_social_media1_icon); ?>" width="30" heigth="30" alt=""> <?php echo !empty($object->section3_social_media1_text_link) ? $object->section3_social_media1_text_link : 'lorem ipsum dolor' ?>
											</p>
										</div>
										<div class="admingrid-item-link admingrid-item-link--1">
											<p>
												<img src="<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section3_social_media2_icon); ?>" width="30" heigth="30" alt=""> <?php echo !empty($object->section3_social_media2_text_link) ? $object->section3_social_media2_text_link : 'lorem ipsum dolor' ?>
											</p>
										</div>
									</div>
								</div>

								<div class="admingrid-clear"></div>

							</article>

						<?php }else{ ?>

							<article class="admingrid-item admingrid-item--fullbanner admingrid-item--fullbanner3" >
								<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner3">
									<span>Clique aqui para editar esse conteúdo</span>
								</a>

								<div class="admingrid-item-col">
									<div class="admingrid-item-col-wrapper">
										<div class="admingrid-item-text">
											<h2>lorem ipsum</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos quia nihil eligendi vel laboriosam non, minima praesentium debitis animi enim.</p>
										</div>
										<img src="http://i.imgur.com/ZdJ3pMy.jpg" alt="">
									</div>
								</div>

								<div class="admingrid-item-image" style="background-image: url(URL_AQUI)">
									<p class="admingrid-item-toplink">www.loremipsum.com.br</p>
									<div class="admingrid-item-links">
										<div class="admingrid-item-link admingrid-item-link--0">
											<p>
												<img src="" alt=""> lorem ipsum dolor
											</p>
										</div>
										<div class="admingrid-item-link admingrid-item-link--1">
											<p>
												<img src="" alt=""> lorem ipsum dolor
											</p>
										</div>
									</div>
								</div>

								<div class="admingrid-clear"></div>

							</article>


						<?php } ?>


						<!-- MODALS -->
						<div class="admingrid-modal" data-modal="item0">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->principal_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->principal_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="principal_image" placeholder="Imagem">
											</div>
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
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->principal_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->principal_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="principal_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->principal_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->principal_image_tablet); ?>' width='50' alt=''></span>
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
												<textarea class="form-control" name="principal_left_text" placeholder="Texto esquerda"><?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->principal_left_text) : ''; ?></textarea>
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto direita</label>
												<textarea class="form-control" name="principal_right_text" placeholder="Texto direita"><?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->principal_right_text) : ''; ?></textarea>
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
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->calltonext_section_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->calltonext_section_image); ?>' width='50' alt=''></span>
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
										<div class="col-xs-12">
											<div class="form-group">
												<label>Texto</label>
												<textarea class="form-control" name="call_text_secion" placeholder="Missão Texto"><?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->call_text_secion) : ''; ?></textarea>
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
											<div class="form-group">
												<label>Título da Campnha</label>
												<input type="text" class="form-control" name="section1_title" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section1_title) : ''; ?>">
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section1_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section1_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="section1_image" placeholder="Imagem">
											</div>
										</div>

										<div class="col-xs-6">

											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability/video', $object->section1_video)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability/video', $object->section1_video); ?>' width='50' alt=''></span>
											<?php }else if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section1_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section1_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>

											<div class="form-group">

												<div class="gallery-container" data-url-upload="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/upload_file/video'); ?>" data-input-hidden-name="arquivoGaleria">

													<label>Vídeo</label>
													<input type="file" class="form-control file-upload" name="section1_video" placeholder="Vídeo">

													<div class="progress progress-sm active" style="top:60px">
														<div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
															<span class="sr-only"></span>
														</div>
													</div>
													<!-- /progress -->

													<!-- <div class="gallery clearfix">
														<ul>
															<li class="gallery-item" data-id="">
																<a href="#" class="btn btn-danger btn-sm btn-gallery-remove-item">Excluir</a>
																<input type="hidden" name="arquivoGaleria" value="1">
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
													<input type="radio" name="section1_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->section1_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px;">
													<input type="radio" name="section1_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->section1_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
												</label>
												<label>
													<input type="radio" name="section1_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->section1_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Vertical</label><br/>
												<label style="margin-right: 10px">
													<input type="radio" name="section1_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->section1_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px">
													<input type="radio" name="section1_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->section1_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
												</label>
												<label>
													<input type="radio" name="section1_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->section1_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
												</label>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section1_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section1_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="section1_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section1_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section1_image_tablet); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="section1_image_tablet" placeholder="Imagem Tablet">
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-12">
											<div class="form-group">
												<label>Texto</label>
												<textarea class="form-control" name="section1_short_text" placeholder="Texto esquerda"><?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section1_short_text) : ''; ?></textarea>
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto Link</label>
												<input type="text" class="form-control" name="section1_text_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section1_text_link) : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Link</label>
												<input type="text" class="form-control" name="section1_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section1_link) : ''; ?>">
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section1_campaign_logo)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section1_campaign_logo); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Logo da Campanha</label>
												<input type="file" class="form-control" name="section1_campaign_logo">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section1_social_media1_icon)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section1_social_media1_icon); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Ícone da Rede Social (1)</label>
												<input type="file" class="form-control" name="section1_social_media1_icon">
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto do Link da Rede Social (1)</label>
												<input type="text" class="form-control" name="section1_social_media1_text_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section1_social_media1_text_link) : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Link da Rede Social (1)</label>
												<input type="text" class="form-control" name="section1_social_media1_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section1_social_media1_link) : ''; ?>">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section1_social_media2_icon)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section1_social_media2_icon); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Ícone da Rede Social (2)</label>
												<input type="file" class="form-control" name="section1_social_media2_icon">
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto do Link da Rede Social (2)</label>
												<input type="text" class="form-control" name="section1_social_media2_text_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section1_social_media2_text_link) : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Link da Rede Social (2)</label>
												<input type="text" class="form-control" name="section1_social_media2_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section1_social_media2_link) : ''; ?>">
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
											<div class="form-group">
												<label>Título</label>
												<input type="text" class="form-control" name="section2_title" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section2_title) : ''; ?>">
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section2_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section2_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="section2_image" placeholder="Imagem">
											</div>
										</div>

										<div class="col-xs-6">

											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability/video', $object->section2_video)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability/video', $object->section2_video); ?>' width='50' alt=''></span>
											<?php }else if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section2_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section2_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>

											<div class="form-group">

												<div class="gallery-container" data-url-upload="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/upload_file/video'); ?>" data-input-hidden-name="arquivoGaleria">

													<label>Vídeo</label>
													<input type="file" class="form-control file-upload" name="section2_video" placeholder="Vídeo">

													<div class="progress progress-sm active" style="top:60px">
														<div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="200" style="width: 0%">
															<span class="sr-only"></span>
														</div>
													</div>
													<!-- /progress -->

													<!-- <div class="gallery clearfix">
														<ul>
															<li class="gallery-item" data-id="">
																<a href="#" class="btn btn-danger btn-sm btn-gallery-remove-item">Excluir</a>
																<input type="hidden" name="arquivoGaleria" value="2">
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
												<label style="margin-right: 20px;">
													<input type="radio" name="section2_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->section2_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 20px;">
													<input type="radio" name="section2_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->section2_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
												</label>
												<label>
													<input type="radio" name="section2_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->section2_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Vertical</label><br/>
												<label style="margin-right: 20px">
													<input type="radio" name="section2_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->section2_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 20px">
													<input type="radio" name="section2_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->section2_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
												</label>
												<label>
													<input type="radio" name="section2_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->section2_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
												</label>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section2_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section2_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="section2_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section2_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section2_image_tablet); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="section2_image_tablet" placeholder="Imagem Tablet">
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-12">
											<div class="form-group">
												<label>Texto</label>
												<textarea class="form-control" name="section2_short_text" placeholder="Texto esquerda"><?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section2_short_text) : ''; ?></textarea>
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto Link</label>
												<input type="text" class="form-control" name="section2_text_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section2_text_link) : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Link</label>
												<input type="text" class="form-control" name="section2_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section2_link) : ''; ?>">
											</div>
										</div>

									</div>


									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section2_campaign_logo)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section2_campaign_logo); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Logo da Campanha</label>
												<input type="file" class="form-control" name="section2_campaign_logo">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section2_social_media1_icon)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section2_social_media1_icon); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Ícone da Rede Social (1)</label>
												<input type="file" class="form-control" name="section2_social_media1_icon">
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto do Link da Rede Social (1)</label>
												<input type="text" class="form-control" name="section2_social_media1_text_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section2_social_media1_text_link) : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Link da Rede Social (1)</label>
												<input type="text" class="form-control" name="section2_social_media1_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section2_social_media1_link) : ''; ?>">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section2_social_media2_icon)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section2_social_media2_icon); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Ícone da Rede Social (2)</label>
												<input type="file" class="form-control" name="section2_social_media2_icon">
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto do Link da Rede Social (2)</label>
												<input type="text" class="form-control" name="section2_social_media2_text_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section2_social_media2_text_link) : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Link da Rede Social (2)</label>
												<input type="text" class="form-control" name="section2_social_media2_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section2_social_media2_link) : ''; ?>">
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
											<div class="form-group">
												<label>Título</label>
												<input type="text" class="form-control" name="section3_title" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section3_title) : ''; ?>">
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section3_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section3_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="section3_image" placeholder="Imagem">
											</div>
										</div>

										<div class="col-xs-6">

											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability/video', $object->section3_video)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability/video', $object->section3_video); ?>' width='50' alt=''></span>
											<?php }else if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section3_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section3_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>

											<div class="form-group">

												<div class="gallery-container" data-url-upload="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/upload_file/video'); ?>" data-input-hidden-name="arquivoGaleria">

													<label>Vídeo</label>
													<input type="file" class="form-control file-upload" name="section3_video" placeholder="Vídeo">

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
												<label style="margin-right: 30px;">
													<input type="radio" name="section3_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->section3_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 30px;">
													<input type="radio" name="section3_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->section3_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
												</label>
												<label>
													<input type="radio" name="section3_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->section3_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Vertical</label><br/>
												<label style="margin-right: 30px">
													<input type="radio" name="section3_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->section3_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 30px">
													<input type="radio" name="section3_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->section3_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
												</label>
												<label>
													<input type="radio" name="section3_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->section3_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
												</label>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section3_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section3_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="section3_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section3_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section3_image_tablet); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="section3_image_tablet" placeholder="Imagem Tablet">
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-12">
											<div class="form-group">
												<label>Texto</label>
												<textarea class="form-control" name="section3_short_text" placeholder="Texto esquerda"><?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section3_short_text) : ''; ?></textarea>
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto Link</label>
												<input type="text" class="form-control" name="section3_text_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section3_text_link) : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Link</label>
												<input type="text" class="form-control" name="section3_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section3_link) : ''; ?>">
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section3_campaign_logo)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section3_campaign_logo); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Logo da Campanha</label>
												<input type="file" class="form-control" name="section3_campaign_logo">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section3_social_media1_icon)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section3_social_media1_icon); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Ícone da Rede Social (1)</label>
												<input type="file" class="form-control" name="section3_social_media1_icon">
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto do Link da Rede Social (1)</label>
												<input type="text" class="form-control" name="section3_social_media1_text_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section3_social_media1_text_link) : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Link da Rede Social (1)</label>
												<input type="text" class="form-control" name="section3_social_media1_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section3_social_media1_link) : ''; ?>">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('social_responsability', $object->section3_social_media2_icon)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('social_responsability', $object->section3_social_media2_icon); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Ícone da Rede Social (2)</label>
												<input type="file" class="form-control" name="section3_social_media2_icon">
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto do Link da Rede Social (2)</label>
												<input type="text" class="form-control" name="section3_social_media2_text_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section3_social_media2_text_link) : ''; ?>">
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Link da Rede Social (2)</label>
												<input type="text" class="form-control" name="section3_social_media2_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section3_social_media2_link) : ''; ?>">
											</div>
										</div>

									</div>

									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>


								</form>
							</div>
						</div>

						<!-- /MODALS -->

					</section>


				</div><!-- /.box-body -->

			 </div><!-- /.box -->

		</div> <!-- /.col -->
	</div> <!-- /.row -->
</section> <!-- /.content -->