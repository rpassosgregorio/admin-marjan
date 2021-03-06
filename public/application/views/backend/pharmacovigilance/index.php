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

							<article class="admingrid-item admingrid-item--0" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('pharmacovigilance', $object->principal_image); ?> )">

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

							<article class="admingrid-item admingrid-item--1" style="background-image: url( <?php echo MY_Controller_CMS::get_path_file('pharmacovigilance', $object->calltonext_section_image); ?> )">
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


						<article class="admingrid-item admingrid-item--2">
							<a href="#" class="admingrid-edit-btn" data-open-modal="#item2">
								<span>Clique aqui para editar esse conteúdo</span>
							</a>

							<?php echo !empty($object->left_text) ? $object->left_text : '<h3>Dolor sit amet</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, numquam libero quas vitae consectetur esse rem quo soluta iure incidunt.</p>
							<h3>Lorem ipsum dolor sit amet.</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente libero, autem facere odio cum magnam fugiat, quidem necessitatibus recusandae animi perferendis, quasi inventore possimus nobis nostrum ab veritatis? Aliquam officiis, commodi doloribus nesciunt quos perspiciatis, illo eligendi unde quo recusandae!</p>'; ?>

						</article>

						<article class="admingrid-item admingrid-item--3">
							<a href="#" class="admingrid-edit-btn" data-open-modal="#item3">
								<span>Clique aqui para editar esse conteúdo</span>
							</a>

							<?php echo !empty($object->right_text) ? $object->right_text : '<h3>Dolor sit amet</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, numquam libero quas vitae consectetur esse rem quo soluta iure incidunt.</p>
							<h3>Lorem ipsum dolor sit amet.</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente libero, autem facere odio cum magnam fugiat, quidem necessitatibus recusandae animi perferendis, quasi inventore possimus nobis nostrum ab veritatis? Aliquam officiis, commodi doloribus nesciunt quos perspiciatis, illo eligendi unde quo recusandae!</p>'; ?>

							<button type="button"><?php echo !empty($object->button_text) ? $object->button_text : 'Lorem ipsum dolor sit amet'; ?></button>
						</article>

						<!-- modals -->

						<div class="admingrid-modal" data-modal="item0">

							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('pharmacovigilance', $object->principal_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('pharmacovigilance', $object->principal_image); ?>' width='50' alt=''></span>
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
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('pharmacovigilance', $object->principal_image_mobile)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('pharmacovigilance', $object->principal_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="principal_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('pharmacovigilance', $object->principal_image_tablet)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('pharmacovigilance', $object->principal_image_tablet); ?>' width='50' alt=''></span>
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
											<?php if(isset($object->id) && MY_Controller_CMS::get_path_file('pharmacovigilance', $object->calltonext_section_image)){ ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('pharmacovigilance', $object->calltonext_section_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="calltonext_section_image" placeholder="Imagem Background">
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
										<div class="col-xs-11">
											<div class="form-group">
											    <label>Texto esquerda</label>
												<textarea id="left_text" name="left_text" rows="10" cols="40" class="custom-editor" name="left_text" placeholder=""><?php echo isset($object->id) ? $object->left_text : ''; ?></textarea>
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
										<div class="col-xs-11">
											<div class="form-group">
												<label>Texto direita</label>
												<textarea id="right_text" name="right_text" rows="10" cols="40" class="custom-editor" name="right_text" placeholder=""><?php echo isset($object->id) ? $object->right_text : ''; ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Botão texto</label>
												<textarea class="form-control" name="button_text" placeholder=""><?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->button_text) : ''; ?></textarea>
											</div>
										</div>
									</div>

									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>

								</form>
							</div>

						</div>


					</section>


				</div>
			</div>

		</div>

	</div>

</section> <!-- /.content -->