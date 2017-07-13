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

							<article class="admingrid-item admingrid-item--0" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('health_professionals', $object->principal_image); ?> )">

								<a href="#" class="admingrid-edit-btn" data-open-modal="#item0">
									<span>Clique aqui para editar esse conteúdo</span>
								</a>

								<!-- <span class="admingrid-btn">Lorem ipsum</span> -->

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

								<!-- <span class="admingrid-btn">Lorem ipsum</span> -->

								<div class="admingrid-item-textleft">
									<p>Lorem ipsum dolor sit amet</p>
								</div>
								<div class="admingrid-item-textright">
									<p>Lorem ipsum dolor sit amet</p>
								</div>

							</article>

						<?php } ?>

						<?php if(isset($object->id)){ ?>

							<article class="admingrid-item admingrid-item--1" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('health_professionals', $object->calltonext_section_image); ?> )">
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

								<div class="admingrid-item-image" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('health_professionals', $object->section1_image); ?> )"></div>

								<div class="admingrid-item-col">
									<div class="admingrid-item-col-wrapper">
										<div class="admingrid-item-text">
											<h4><?php echo !empty($object->section1_title) ? $object->section1_title : 'lorem ipsum'; ?></h4>
											<p><?php echo !empty($object->section1_text) ? $object->section1_text : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores unde assumenda tenetur nisi quisquam aspernatur eveniet error architecto doloremque blanditiis?'; ?></p>
											<span class="admingrid-item-btn">
												<?php echo !empty($object->section1_button_text) ? $object->section1_button_text : 'lorem ipsum'; ?>
											</span>
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

								<div class="admingrid-item-image" style="background-image: url(URL_AQUI)"></div>

								<div class="admingrid-item-col">
									<div class="admingrid-item-col-wrapper">
										<div class="admingrid-item-text">
											<h4>lorem ipsum</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores unde assumenda tenetur nisi quisquam aspernatur eveniet error architecto doloremque blanditiis</p>
											<span class="admingrid-item-btn">
												lorem ipsum
											</span>
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
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('health_professionals', $object->principal_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('health_professionals', $object->principal_image); ?>' width='50' alt=''></span>
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
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('health_professionals', $object->principal_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('health_professionals', $object->principal_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="principal_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('health_professionals', $object->principal_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('health_professionals', $object->principal_image_tablet); ?>' width='50' alt=''></span>
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
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('health_professionals', $object->calltonext_section_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('health_professionals', $object->calltonext_section_image); ?>' width='50' alt=''></span>
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
												<label>Título</label>
												<textarea class="form-control" name="section1_title" placeholder="Texto"><?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section1_title) : ''; ?></textarea>
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto</label>
												<textarea class="form-control" name="section1_text" placeholder="Texto"><?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section1_text) : ''; ?></textarea>
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('health_professionals', $object->section1_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('health_professionals', $object->section1_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="section1_image" placeholder="Imagem">
											</div>
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
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('health_professionals', $object->section1_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('health_professionals', $object->section1_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="section1_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('health_professionals', $object->section1_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('health_professionals', $object->section1_image_tablet); ?>' width='50' alt=''></span>
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

										<div class="col-xs-6">
											<div class="form-group">
												<label>Título do Botão</label>
												<textarea class="form-control" name="section1_button_text" placeholder="Texto esquerda"><?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section1_button_text) : ''; ?></textarea>
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Link do Botão</label>
												<input type="text" class="form-control" name="section1_button_link" value="<?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->section1_button_link) : ''; ?>">
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