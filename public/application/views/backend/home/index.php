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

						<div class="admingrid-fullbanner admingrid-box">
							<div class="admingrid-fullbanner-items owl-carousel">

								<!-- SLIDE 1 -->
								<?php if(isset($object->id)){ ?>

									<div class="admingrid-fullbanner-item" data-thumb-image="<?php echo MY_Controller_CMS::get_path_file('home', $object->slide1_thumb);; ?>">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner1">
											<span>Clique para editar esse conteúdo</span>
										</a>

										<?php $bandImg = MY_Controller_CMS::get_path_file('home', $object->slide1_band); ?>

										<header class="admingrid-fullbanner-item-header"<?php if(isset($bandImg) && !empty($bandImg)) { ?> style="background-image: url(<?php echo $bandImg; ?>);"<?php }?>>
											<h2><?php echo !empty($object->slide1_title) ? $object->slide1_title : 'Título aqui'; ?></h2>
											<h3><?php echo !empty($object->slide1_subtitle) ? $object->slide1_subtitle : 'Subtítulo aqui'; ?></h3>
										</header>

										<?php if (MY_Controller_CMS::get_path_file('home', $object->slide1_image)) { ?>
											<img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide1_image); ?>'>
										<?php } ?>

									</div>

								<?php }else{ ?>

									<div class="admingrid-fullbanner-item" data-thumb-image="">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner1">
											<span>Clique para editar esse conteúdo</span>
										</a>

										<header class="admingrid-fullbanner-item-header">
											<h2>Título aqui</h2>
											<h3>Subtítulo aqui</h3>
										</header>

										<img src=''>

									</div>


								<?php } ?>

								<!-- SLIDE 2 -->
								<?php if(isset($object->id)){ ?>

									<div class="admingrid-fullbanner-item" data-thumb-image="<?php echo MY_Controller_CMS::get_path_file('home', $object->slide2_thumb);; ?>">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner2">
											<span>Clique para editar esse conteúdo</span>
										</a>

										<?php $bandImg = MY_Controller_CMS::get_path_file('home', $object->slide2_band); ?>

										<header class="admingrid-fullbanner-item-header"<?php if(isset($bandImg) && !empty($bandImg)) { ?> style="background-image: url(<?php echo $bandImg; ?>);"<?php }?>>
											<h2><?php echo !empty($object->slide2_title) ? $object->slide2_title : 'Título aqui'; ?></h2>
											<h3><?php echo !empty($object->slide2_subtitle) ? $object->slide2_subtitle : 'Subtítulo aqui'; ?></h3>
										</header>

										<?php if (!empty(MY_Controller_CMS::get_path_file('home', $object->slide2_image))) { ?>
											<img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide2_image); ?>'>
										<?php } ?>

									</div>

								<?php }else{ ?>

									<div class="admingrid-fullbanner-item" data-thumb-image="">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner2">
											<span>Clique para editar esse conteúdo</span>
										</a>

										<header class="admingrid-fullbanner-item-header">
											<h2>Título aqui</h2>
											<h3>Subtítulo aqui</h3>
										</header>

										<img src=''>

									</div>


								<?php } ?>

								<!-- SLIDE 3 -->
								<?php if(isset($object->id)){ ?>

									<div class="admingrid-fullbanner-item" data-thumb-image="<?php echo MY_Controller_CMS::get_path_file('home', $object->slide3_thumb);; ?>">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner3">
											<span>Clique para editar esse conteúdo</span>
										</a>

										<?php $bandImg = MY_Controller_CMS::get_path_file('home', $object->slide3_band); ?>

										<header class="admingrid-fullbanner-item-header"<?php if(isset($bandImg) && !empty($bandImg)) { ?> style="background-image: url(<?php echo $bandImg; ?>);"<?php }?>>
											<h2><?php echo !empty($object->slide3_title) ? $object->slide3_title : 'Título aqui'; ?></h2>
											<h3><?php echo !empty($object->slide3_subtitle) ? $object->slide3_subtitle : 'Subtítulo aqui'; ?></h3>
										</header>

										<?php if (!empty(MY_Controller_CMS::get_path_file('home', $object->slide3_image))) { ?>
											<img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide3_image); ?>' width='3370' height='630'>
										<?php } ?>

									</div>

								<?php }else{ ?>

									<div class="admingrid-fullbanner-item" data-thumb-image="">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner3">
											<span>Clique para editar esse conteúdo</span>
										</a>

										<header class="admingrid-fullbanner-item-header">
											<h2>Título aqui</h2>
											<h3>Subtítulo aqui</h3>
										</header>

										<img src=''>

									</div>


								<?php } ?>

								<!-- SLIDE 4 -->

								<?php if(isset($object->id)){ ?>

									<div class="admingrid-fullbanner-item" data-thumb-image="<?php echo MY_Controller_CMS::get_path_file('home', $object->slide4_thumb);; ?>">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner4">
											<span>Clique para editar esse conteúdo</span>
										</a>

										<?php $bandImg = MY_Controller_CMS::get_path_file('home', $object->slide4_band); ?>

										<header class="admingrid-fullbanner-item-header"<?php if(isset($bandImg) && !empty($bandImg)) { ?> style="background-image: url(<?php echo $bandImg; ?>);"<?php }?>>
											<h2><?php echo !empty($object->slide4_title) ? $object->slide4_title : 'Título aqui'; ?></h2>
											<h3><?php echo !empty($object->slide4_subtitle) ? $object->slide4_subtitle : 'Subtítulo aqui'; ?></h3>
										</header>

										<?php if (!empty(MY_Controller_CMS::get_path_file('home', $object->slide4_image))) { ?>
											<img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide4_image); ?>' width='1170' height='630'>
										<?php } ?>

									</div>

								<?php }else{ ?>

									<div class="admingrid-fullbanner-item" data-thumb-image="">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner4">
											<span>Clique para editar esse conteúdo</span>
										</a>

										<header class="admingrid-fullbanner-item-header">
											<h2>Título aqui</h2>
											<h3>Subtítulo aqui</h3>
										</header>

										<img src=''>

									</div>


								<?php } ?>

								<!-- SLIDE 5 -->

								<?php if(isset($object->id)){ ?>

									<div class="admingrid-fullbanner-item" data-thumb-image="<?php echo MY_Controller_CMS::get_path_file('home', $object->slide5_thumb);; ?>">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner5">
											<span>Clique para editar esse conteúdo</span>
										</a>

										<?php $bandImg = MY_Controller_CMS::get_path_file('home', $object->slide5_band); ?>

										<header class="admingrid-fullbanner-item-header"<?php if(isset($bandImg) && !empty($bandImg)) { ?> style="background-image: url(<?php echo $bandImg; ?>);"<?php }?>>
											<h2><?php echo !empty($object->slide5_title) ? $object->slide5_title : 'Título aqui'; ?></h2>
											<h3><?php echo !empty($object->slide5_subtitle) ? $object->slide5_subtitle : 'Subtítulo aqui'; ?></h3>
										</header>

										<?php if (!empty(MY_Controller_CMS::get_path_file('home', $object->slide5_image))) { ?>
											<img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide5_image); ?>' width='1170' height='630'>
										<?php } ?>

									</div>

								<?php }else{ ?>

									<div class="admingrid-fullbanner-item" data-thumb-image="">
										<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner5">
											<span>Clique para editar esse conteúdo</span>
										</a>

										<header class="admingrid-fullbanner-item-header">
											<h2>Título aqui</h2>
											<h3>Subtítulo aqui</h3>
										</header>

										<img src=''>

									</div>


								<?php } ?>

							</div>
						</div> <!-- /fullbanner -->

						<!-- MODALS -->

						<div class="admingrid-modal" data-modal="fullbanner1">
							<div class="admingrid-modal-wrapper">
								<div class="admingrid-modal-scroll">

									<button class="admingrid-modal-close__btn">Fechar</button>
									<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

										<div class="row">
											<div class="col-xs-6">
												<div class="form-group">
													<label>Título</label>
													<textarea class="form-control" name="slide1_title" placeholder="...."><?php echo isset($object->id) && $object->slide1_title ? strip_tags($object->slide1_title) : '' ?></textarea>
												</div>
											</div>
											<div class="col-xs-6">
												<div class="form-group">
													<label>Subtítulo</label>
													<textarea class="form-control" name="slide1_subtitle" placeholder="...."><?php echo isset($object->id) && $object->slide1_subtitle ? strip_tags($object->slide1_subtitle) : '' ?></textarea>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-6">
												<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide1_thumb)){ ?>
													<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide1_thumb); ?>' width='50' alt=''><button type="button" class="btn-delete-img-modal" data-url="">Deletar</button></span>
												<?php }else{ ?>
													<span><img src='https://dummyimage.com/50x50' alt=''></span>
												<?php } ?>
												<div class="form-group">
													<label>Thumb</label>
													<input type="file" class="form-control" name="slide1_thumb" placeholder="Thumb">
												</div>
											</div>
										</div>

										<div class="row">

											<div class="col-xs-6">
												<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide1_image)){ ?>
													<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide1_image); ?>' width='50' alt=''><button type="button" class="btn-delete-img-modal" data-url="">Deletar</button></span>
												<?php }else{ ?>
													<span><img src='https://dummyimage.com/50x50' alt=''></span>
												<?php } ?>
												<div class="form-group">
													<label>Imagem</label>
													<input type="file" class="form-control" name="slide1_image" placeholder="Image">
												</div>
											</div>


											<div class="col-xs-6">

												<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide1_video)){ ?>
													<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide1_video); ?>' width='50' alt=''><button type="button" class="btn-delete-img-modal" data-url="">Deletar</button></span>
												<?php }else if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide1_image)){ ?>
													<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide1_image); ?>' width='50' alt=''><button type="button" class="btn-delete-img-modal" data-url="">Deletar</button></span>
												<?php }else{ ?>
													<span><img src='https://dummyimage.com/50x50' alt=''></span>
												<?php } ?>

												<div class="form-group">

													<div class="gallery-container" data-url-upload="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/upload_file/video'); ?>" data-input-hidden-name="arquivoGaleria">

														<label>Vídeo</label>
														<input type="file" class="form-control file-upload" name="slide1_video" placeholder="Vídeo">

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
														<input type="radio" name="slide1_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->slide1_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
													</label>
													<label style="margin-right: 10px;">
														<input type="radio" name="slide1_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->slide1_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
													</label>
													<label>
														<input type="radio" name="slide1_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->slide1_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
													</label>
												</div>
											</div>
											<div class="col-xs-6">
												<div class="form-group">
													<label>Alinhamento Vertical</label><br/>
													<label style="margin-right: 10px">
														<input type="radio" name="slide1_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->slide1_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
													</label>
													<label style="margin-right: 10px">
														<input type="radio" name="slide1_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->slide1_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
													</label>
													<label>
														<input type="radio" name="slide1_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->slide1_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
													</label>
												</div>
											</div>
										</div>

										<div class="row">

											<div class="col-xs-6">
												<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide1_image_mobile)){ ?>
													<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide1_image_mobile); ?>' width='50' alt=''><button type="button" class="btn-delete-img-modal" data-url="">Deletar</button></span>
												<?php }else{ ?>
													<span><img src='https://dummyimage.com/50x50' alt=''></span>
												<?php } ?>
												<div class="form-group">
													<label>Imagem Mobile</label>
													<input type="file" class="form-control" name="slide1_image_mobile" placeholder="Imagem Mobile">
												</div>
											</div>

											<div class="col-xs-6">
												<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide1_image_tablet)){ ?>
													<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide1_image_tablet); ?>' width='50' alt=''><button type="button" class="btn-delete-img-modal" data-url="">Deletar</button></span>
												<?php }else{ ?>
													<span><img src='https://dummyimage.com/50x50' alt=''></span>
												<?php } ?>
												<div class="form-group">
													<label>Imagem Tablet</label>
													<input type="file" class="form-control" name="slide1_image_tablet" placeholder="Imagem Tablet">
												</div>
											</div>

										</div>

										<div class="row">
											<div class="col-xs-6">
												<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide1_band)){ ?>
													<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide1_band); ?>' width='50' alt=''><button type="button" class="btn-delete-img-modal" data-url="">Deletar</button></span>
												<?php }else{ ?>
													<span><img src='https://dummyimage.com/50x50' alt=''></span>
												<?php } ?>
												<div class="form-group">
													<label>Imagem da faixa do título e subtitulo</label>
													<input type="file" class="form-control" name="slide1_band" placeholder="Imagem da faixa do título e subtitulo">
												</div>
											</div>
										</div>

										<div class="box-footer text-center">
											<button type="submit" class="btn btn-primary margin">Salvar</button>
										</div>

									</form>
								</div>
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
												<textarea class="form-control" name="slide2_title" placeholder="...."><?php echo isset($object->id) && $object->slide2_title ? strip_tags($object->slide2_title) : '' ?></textarea>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Subtítulo</label>
												<textarea class="form-control" name="slide2_subtitle" placeholder="...."><?php echo isset($object->id) && $object->slide2_subtitle ? strip_tags($object->slide2_subtitle) : '' ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide2_thumb)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide2_thumb); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Thumb</label>
												<input type="file" class="form-control" name="slide2_thumb" placeholder="Thumb">
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide2_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide2_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="slide2_image" placeholder="Image">
											</div>
										</div>

										<div class="col-xs-6">

											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide2_video)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide2_video); ?>' width='50' alt=''></span>
											<?php }else if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide2_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide2_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Vídeo</label>
												<input type="file" class="form-control" name="slide2_video" placeholder="Vídeo">
											</div>

										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Horizontal</label><br/>
												<label style="margin-right: 10px;">
													<input type="radio" name="slide2_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->slide2_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px;">
													<input type="radio" name="slide2_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->slide2_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
												</label>
												<label>
													<input type="radio" name="slide2_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->slide2_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Vertical</label><br/>
												<label style="margin-right: 10px">
													<input type="radio" name="slide2_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->slide2_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px">
													<input type="radio" name="slide2_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->slide2_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
												</label>
												<label>
													<input type="radio" name="slide2_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->slide2_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
												</label>
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide2_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide2_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="slide2_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide2_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide2_image_tablet); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="slide2_image_tablet" placeholder="Imagem Tablet">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide2_band)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide2_band); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem da faixa do título e subtitulo</label>
												<input type="file" class="form-control" name="slide2_band" placeholder="Imagem da faixa do título e subtitulo">
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
												<textarea class="form-control" name="slide3_title" placeholder="...."><?php echo isset($object->id) && $object->slide3_title ? strip_tags($object->slide3_title) : '' ?></textarea>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Subtítulo</label>
												<textarea class="form-control" name="slide3_subtitle" placeholder="...."><?php echo isset($object->id) && $object->slide3_subtitle ? strip_tags($object->slide3_subtitle) : '' ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide3_thumb)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide3_thumb); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Thumb</label>
												<input type="file" class="form-control" name="slide3_thumb" placeholder="Thumb">
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide3_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide3_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="slide3_image" placeholder="Image">
											</div>
										</div>

										<div class="col-xs-6">

											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide3_video)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide3_video); ?>' width='50' alt=''></span>
											<?php }else if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide3_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide3_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Vídeo</label>
												<input type="file" class="form-control" name="slide3_video" placeholder="Vídeo">
											</div>

										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Horizontal</label><br/>
												<label style="margin-right: 10px;">
													<input type="radio" name="slide3_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->slide3_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px;">
													<input type="radio" name="slide3_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->slide3_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
												</label>
												<label>
													<input type="radio" name="slide3_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->slide3_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Vertical</label><br/>
												<label style="margin-right: 10px">
													<input type="radio" name="slide3_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->slide3_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px">
													<input type="radio" name="slide3_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->slide3_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
												</label>
												<label>
													<input type="radio" name="slide3_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->slide3_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
												</label>
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide3_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide3_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="slide3_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide3_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide3_image_tablet); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="slide3_image_tablet" placeholder="Imagem Tablet">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide3_band)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide3_band); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem da faixa do título e subtitulo</label>
												<input type="file" class="form-control" name="slide3_band" placeholder="Imagem da faixa do título e subtitulo">
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
											<div class="form-group">
												<label>Título</label>
												<textarea class="form-control" name="slide4_title" placeholder="...."><?php echo isset($object->id) && $object->slide4_title ? strip_tags($object->slide4_title) : '' ?></textarea>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Subtítulo</label>
												<textarea class="form-control" name="slide4_subtitle" placeholder="...."><?php echo isset($object->id) && $object->slide4_subtitle ? strip_tags($object->slide4_subtitle) : '' ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide4_thumb)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide4_thumb); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Thumb</label>
												<input type="file" class="form-control" name="slide4_thumb" placeholder="Thumb">
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide4_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide4_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="slide4_image" placeholder="Image">
											</div>
										</div>

										<div class="col-xs-6">

											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide4_video)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide4_video); ?>' width='50' alt=''></span>
											<?php }else if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide4_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide4_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Vídeo</label>
												<input type="file" class="form-control" name="slide4_video" placeholder="Vídeo">
											</div>

										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Horizontal</label><br/>
												<label style="margin-right: 10px;">
													<input type="radio" name="slide4_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->slide4_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px;">
													<input type="radio" name="slide4_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->slide4_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
												</label>
												<label>
													<input type="radio" name="slide4_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->slide4_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Vertical</label><br/>
												<label style="margin-right: 10px">
													<input type="radio" name="slide4_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->slide4_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px">
													<input type="radio" name="slide4_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->slide4_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
												</label>
												<label>
													<input type="radio" name="slide4_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->slide4_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
												</label>
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide4_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide4_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="slide4_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide4_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide4_image_tablet); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="slide4_image_tablet" placeholder="Imagem Tablet">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide4_band)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide4_band); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem da faixa do título e subtitulo</label>
												<input type="file" class="form-control" name="slide4_band" placeholder="Imagem da faixa do título e subtitulo">
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
											<div class="form-group">
												<label>Título</label>
												<textarea class="form-control" name="slide5_title" placeholder="...."><?php echo isset($object->id) && $object->slide5_title ? strip_tags($object->slide5_title) : '' ?></textarea>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Subtítulo</label>
												<textarea class="form-control" name="slide5_subtitle" placeholder="...."><?php echo isset($object->id) && $object->slide5_subtitle ? strip_tags($object->slide5_subtitle) : '' ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide5_thumb)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide5_thumb); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Thumb</label>
												<input type="file" class="form-control" name="slide5_thumb" placeholder="Thumb">
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide5_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide5_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="slide5_image" placeholder="Image">
											</div>
										</div>

										<div class="col-xs-6">

											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide5_video)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide5_video); ?>' width='50' alt=''></span>
											<?php }else if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide5_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide5_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Vídeo</label>
												<input type="file" class="form-control" name="slide5_video" placeholder="Vídeo">
											</div>

										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Horizontal</label><br/>
												<label style="margin-right: 10px;">
													<input type="radio" name="slide5_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->slide5_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px;">
													<input type="radio" name="slide5_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->slide5_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
												</label>
												<label>
													<input type="radio" name="slide5_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->slide5_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Vertical</label><br/>
												<label style="margin-right: 10px">
													<input type="radio" name="slide5_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->slide5_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px">
													<input type="radio" name="slide5_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->slide5_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
												</label>
												<label>
													<input type="radio" name="slide5_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->slide5_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
												</label>
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide5_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide5_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="slide5_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide5_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide5_image_tablet); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="slide5_image_tablet" placeholder="Imagem Tablet">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('home', $object->slide5_band)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('home', $object->slide5_band); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem da faixa do título e subtitulo</label>
												<input type="file" class="form-control" name="slide5_band" placeholder="Imagem da faixa do título e subtitulo">
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


					</section> <!-- /admingrid -->


				</div><!-- /.box-body -->

			 </div><!-- /.box -->

		</div> <!-- /.col -->
	</div> <!-- /.row -->
</section> <!-- /.content -->