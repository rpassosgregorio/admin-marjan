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

						<?php if(isset($object->id) && My_Controller_CMS::get_path_file('products/home', $object->principal_image)){ ?>

							<div class="admingrid-item admingrid-item--0" style="background-image: url(<?php echo My_Controller_CMS::get_path_file('products/home', $object->principal_image) ?>)">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item0">
								<span>Clique para editar esse conteúdo</span>
								</a>
							</div>

						<?php }else{ ?>

							<div class="admingrid-item admingrid-item--0">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item0">
									<span>Clique para editar esse conteúdo</span>
								</a>
							</div>

						<?php } ?>

						<?php if(isset($object->id) && My_Controller_CMS::get_path_file('products/home', $object->calltonext_section_image)){ ?>

							<div class="admingrid-item admingrid-item--1" style="background-image: url(<?php echo My_Controller_CMS::get_path_file('products/home', $object->calltonext_section_image) ?>)">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item1">
								<span>Clique para editar esse conteúdo</span>
								</a>
							</div>

						<?php }else{ ?>

							<div class="admingrid-item admingrid-item--1">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item1">
									<span>Clique para editar esse conteúdo</span>
								</a>
							</div>

						<?php } ?>

						<div class="admingrid-item admingrid-item--2">
							<a href="#" class="admingrid-edit-btn" data-open-modal="#item2">
								<span>Clique para editar esse conteúdo</span>
							</a>
							<div class="admingrid-item-info">
								<p><?php echo isset($object->id) && $object->products_text ? $object->products_text : 'Possimus corporis error laboriosam reprehenderit, nihil, a, doloribus voluptate obcaecati ad, enim architecto quod molestiae dolore odit eos.' ?></p>
							</div>
						</div>




						<div class="admingrid-item admingrid-item--3">
							<a href="#" class="admingrid-edit-btn" data-open-modal="#item3">
								<span>Clique para editar esse conteúdo</span>
							</a>
							<p><?php echo isset($object->id) && $object->search_indicator ? $object->search_indicator : 'Lorem ipsum dolor sit amet...' ?></p>
							<p>Search</p>
						</div>


						<div class="admingrid-item admingrid-item--4">
							<a href="#" class="admingrid-edit-btn" data-open-modal="#item4">
								<span>Clique para editar esse conteúdoas</span>
							</a>
							<p><?php echo isset($object->id) && $object->healthcare_professional_text ? $object->healthcare_professional_text : 'Lorem ipsum dolor sit amet...' ?></p>
						</div>

						<div class="admingrid-clear"></div>


						<div class="admingrid-item admingrid-item--5">
							<a href="#" class="admingrid-edit-btn" data-open-modal="#item5">
								<span>Clique para editar esse conteúdo</span>
							</a>
							<p><?php echo isset($object->id) && $object->filter_atoz_text ? $object->filter_atoz_text : 'Lorem ipsum dolor sit amet...' ?></p>
						</div>


						<?php if(isset($object->id) && My_Controller_CMS::get_path_file('products/home', $object->filter_under_prescription_image)){ ?>

							<div class="admingrid-item admingrid-item--6">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item6">
									<span>Clique para editar esse conteúdo</span>
								</a>
								<p><?php echo isset($object->id) && $object->filter_under_prescription_text ? $object->filter_under_prescription_text : 'Lorem ipsum dolor sit amet...' ?></p>

								<img src="<?php echo My_Controller_CMS::get_path_file('products/home', $object->filter_under_prescription_image) ?>" alt="">
							</div>

						<?php }else{ ?>

							<div class="admingrid-item admingrid-item--6">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item6">
									<span>Clique para editar esse conteúdo</span>
								</a>
								<p><?php echo isset($object->id) && $object->filter_under_prescription_text ? $object->filter_under_prescription_text : 'Lorem ipsum dolor sit amet...' ?></p>
							</div>


						<?php } ?>


						<?php if(isset($object->id) && My_Controller_CMS::get_path_file('products/home', $object->filter_no_prescription_image)){ ?>

							<div class="admingrid-item admingrid-item--7">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item7">
									<span>Clique para editar esse conteúdo</span>
								</a>
								<p><?php echo isset($object->id) && $object->filter_no_prescription_text ? $object->filter_no_prescription_text : 'Lorem ipsum dolor sit amet...' ?></p>

								<img src="<?php echo My_Controller_CMS::get_path_file('products/home', $object->filter_no_prescription_image) ?>" alt="">
							</div>

						<?php }else{ ?>

							<div class="admingrid-item admingrid-item--7">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item7">
									<span>Clique para editar esse conteúdo</span>
								</a>
								<p><?php echo isset($object->id) && $object->filter_no_prescription_text ? $object->filter_no_prescription_text : 'Lorem ipsum dolor sit amet...' ?></p>
							</div>


						<?php } ?>


						<?php if(isset($object->id) && My_Controller_CMS::get_path_file('products/home', $object->filter_foods_image)){ ?>

							<div class="admingrid-item admingrid-item--8">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item8">
									<span>Clique para editar esse conteúdo</span>
								</a>
								<p><?php echo isset($object->id) && $object->filter_foods_text ? $object->filter_foods_text : 'Lorem ipsum dolor sit amet...' ?></p>
								<img src="<?php echo My_Controller_CMS::get_path_file('products/home', $object->filter_foods_image) ?>" alt="">
							</div>

						<?php }else{ ?>

							<div class="admingrid-item admingrid-item--8">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item8">
									<span>Clique para editar esse conteúdo</span>
								</a>
								<p><?php echo isset($object->id) && $object->filter_foods_text ? $object->filter_foods_text : 'Lorem ipsum dolor sit amet...' ?></p>
							</div>


						<?php } ?>

						<div class="admingrid-clear"></div>

						<div class="admingrid-item admingrid-item--9">
							<div class="admingrid-edit-btn">
								<span>AREA NAO EDITAVEL</span>
							</div>
						</div>

						<?php if(isset($object->id) && My_Controller_CMS::get_path_file('products/home', $object->healthcare_professional_box_side_image)){ ?>

							<div class="admingrid-item admingrid-item--10">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item10">
									<span>Clique para editar esse conteúdo</span>
								</a>
								<div class="admingrid-item-bg" style="background-image: url(<?php echo My_Controller_CMS::get_path_file('products/home', $object->healthcare_professional_box_side_image); ?>)"></div>
								<div class="admingrid-item-col">
									<div class="admingrid-item-info">
										<h3><?php echo isset($object->id) && $object->healthcare_professional_box_title ? $object->healthcare_professional_box_title : 'Lorem ipsum dolor sit amet...'; ?></h3>
										<p><?php echo isset($object->id) && $object->healthcare_professional_box_subtitle ? $object->healthcare_professional_box_subtitle : 'Lorem ipsum dolor sit amet...'; ?></p>
										<button class="admingrid-btn"><?php echo isset($object->id) && $object->healthcare_professional_box_btn_text ? $object->healthcare_professional_box_btn_text : 'Lorem ipsum dolor sit amet...'; ?></button>
									</div>
								</div>
							</div>

						<?php }else{ ?>

							<div class="admingrid-item admingrid-item--10">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#item10">
									<span>Clique para editar esse conteúdo</span>
								</a>
								<div class="admingrid-item-bg"></div>
								<div class="admingrid-item-col">
									<div class="admingrid-item-info">
										<h3>Lorem ipsum dolor sit amet</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										<button class="admingrid-btn">Lorem ipsum dolor</button>
									</div>
								</div>
							</div>

						<?php } ?>

						<!-- MODAIS -->
						<div class="admingrid-modal" data-modal="item0">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && My_Controller_CMS::get_path_file('products/home', $object->principal_image)){ ?>
												<span><img src='<?php echo My_Controller_CMS::get_path_file('products/home', $object->principal_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/100x100' alt=''></span>
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
											<?php if(isset($object->id) && My_Controller_CMS::get_path_file('products/home', $object->principal_image_mobile)){ ?>
												<span><img src='<?php echo My_Controller_CMS::get_path_file('products/home', $object->principal_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/100x100' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="principal_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && My_Controller_CMS::get_path_file('products/home', $object->principal_image_tablet)){ ?>
												<span><img src='<?php echo My_Controller_CMS::get_path_file('products/home', $object->principal_image_tablet); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/100x100' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="principal_image_tablet" placeholder="Imagem Tablet">
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
										<?php if(isset($object->id) && My_Controller_CMS::get_path_file('products/home', $object->calltonext_section_image)){ ?>
											<span><img src='<?php echo My_Controller_CMS::get_path_file('products/home', $object->calltonext_section_image); ?>' width='50' alt=''></span>
										<?php }else{ ?>
											<span><img src='https://dummyimage.com/100x100' alt=''></span>
										<?php } ?>
										<div class="form-group">
											<label>Imagem</label>
											<input type="file" class="form-control" name="calltonext_section_image" placeholder="Imagem">
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

										<div class="form-group">
											<label>Texto</label>
											<textarea class="form-control" name="products_text" placeholder="...."><?php echo isset($object->id) && $object->products_text ? strip_tags($object->products_text) : '' ?></textarea>
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

										<div class="form-group">
											<label>Texto</label>
											<textarea class="form-control" name="search_indicator" placeholder="...."><?php echo isset($object->id) && $object->search_indicator ? strip_tags($object->search_indicator) : '' ?></textarea>
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

										<div class="form-group">
											<label>Texto</label>
											<textarea class="form-control" name="healthcare_professional_text" placeholder="...."><?php echo isset($object->id) && $object->healthcare_professional_text ? strip_tags($object->healthcare_professional_text) : '' ?></textarea>
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
											<div class="form-group">
												<label>Texto</label>
												<textarea class="form-control" name="filter_atoz_text" placeholder="...."><?php echo isset($object->id) && $object->filter_atoz_text ? $object->filter_atoz_text : '' ?></textarea>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Link</label>
												<input type="text" class="form-control" name="filter_atoz_text_link" placeholder="..." value="<?php echo isset($object->id) && $object->filter_atoz_text_link ? $object->filter_atoz_text_link : '' ?>">
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
											<div class="form-group">
												<label>Texto</label>
												<textarea class="form-control" name="filter_under_prescription_text" placeholder="...."><?php echo isset($object->id) && $object->filter_under_prescription_text ? strip_tags($object->filter_under_prescription_text) : '' ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && My_Controller_CMS::get_path_file('products/home', $object->filter_under_prescription_image)){ ?>
												<span><img src='<?php echo My_Controller_CMS::get_path_file('products/home', $object->filter_under_prescription_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/100x100' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="filter_under_prescription_image" placeholder="...">
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
											<div class="form-group">
												<label>Texto</label>
												<textarea class="form-control" name="filter_no_prescription_text" placeholder="...."><?php echo isset($object->id) && $object->filter_no_prescription_text ? strip_tags($object->filter_no_prescription_text) : '' ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && My_Controller_CMS::get_path_file('products/home', $object->filter_no_prescription_image)){ ?>
												<span><img src='<?php echo My_Controller_CMS::get_path_file('products/home', $object->filter_no_prescription_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/100x100' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="filter_no_prescription_image" placeholder="...">
											</div>
										</div>

									</div>

									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>


								</form>
							</div>
						</div>

						<div class="admingrid-modal" data-modal="item8">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto</label>
												<textarea class="form-control" name="filter_foods_text" placeholder="...."><?php echo isset($object->id) && $object->filter_foods_text ? strip_tags($object->filter_foods_text) : '' ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && My_Controller_CMS::get_path_file('products/home', $object->filter_foods_image)){ ?>
												<span><img src='<?php echo My_Controller_CMS::get_path_file('products/home', $object->filter_foods_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/100x100' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="filter_foods_image" placeholder="...">
											</div>
										</div>


									</div>

									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>


								</form>
							</div>
						</div>


						<div class="admingrid-modal" data-modal="item10">
							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Título</label>
												<textarea class="form-control" name="healthcare_professional_box_title" placeholder="...."><?php echo isset($object->id) && $object->healthcare_professional_box_title ? strip_tags($object->healthcare_professional_box_title) : '' ?></textarea>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="form-group">
												<label>Subtítulo</label>
												<textarea class="form-control" name="healthcare_professional_box_subtitle" placeholder="...."><?php echo isset($object->id) && $object->healthcare_professional_box_subtitle ? strip_tags($object->healthcare_professional_box_subtitle) : '' ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto do botão</label>
												<textarea class="form-control" name="healthcare_professional_box_btn_text" placeholder="...."><?php echo isset($object->id) && $object->healthcare_professional_box_btn_text ? strip_tags($object->healthcare_professional_box_btn_text) : '' ?></textarea>
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && My_Controller_CMS::get_path_file('products/home', $object->healthcare_professional_box_side_image)){ ?>
												<span><img src='<?php echo My_Controller_CMS::get_path_file('products/home', $object->healthcare_professional_box_side_image); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/100x100' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem</label>
												<input type="file" class="form-control" name="healthcare_professional_box_side_image" placeholder="Imagem">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Horizontal</label><br/>
												<label style="margin-right: 10px;">
													<input type="radio" name="healthcare_professional_box_side_image_horizontal_align" class="minimal" value="center" <?php if(isset($object->id) && $object->healthcare_professional_box_side_image_horizontal_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px;">
													<input type="radio" name="healthcare_professional_box_side_image_horizontal_align" class="minimal" value="left" <?php if(isset($object->id) && $object->healthcare_professional_box_side_image_horizontal_align == 'left'){ ?> checked <?php } ?>> Left
												</label>
												<label>
													<input type="radio" name="healthcare_professional_box_side_image_horizontal_align" class="minimal" value="right" <?php if(isset($object->id) && $object->healthcare_professional_box_side_image_horizontal_align == 'right'){ ?> checked <?php } ?>> Right
												</label>
											</div>
										</div>

										<div class="col-xs-6">
											<div class="form-group">
												<label>Alinhamento Vertical</label><br/>
												<label style="margin-right: 10px">
													<input type="radio" name="healthcare_professional_box_side_image_vertical_align" class="minimal" value="center" <?php if(isset($object->id) && $object->healthcare_professional_box_side_image_vertical_align == 'center'){ ?> checked <?php } ?>> Center
												</label>
												<label style="margin-right: 10px">
													<input type="radio" name="healthcare_professional_box_side_image_vertical_align" class="minimal" value="top" <?php if(isset($object->id) && $object->healthcare_professional_box_side_image_vertical_align == 'top'){ ?> checked <?php } ?>> Top
												</label>
												<label>
													<input type="radio" name="healthcare_professional_box_side_image_vertical_align" class="minimal" value="bottom" <?php if(isset($object->id) && $object->healthcare_professional_box_side_image_vertical_align == 'bottom'){ ?> checked <?php } ?>> Bottom
												</label>
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && My_Controller_CMS::get_path_file('products/home', $object->healthcare_professional_box_side_image_mobile)){ ?>
												<span><img src='<?php echo My_Controller_CMS::get_path_file('products/home', $object->healthcare_professional_box_side_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/100x100' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="healthcare_professional_box_side_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && My_Controller_CMS::get_path_file('products/home', $object->healthcare_professional_box_side_image_tablet)){ ?>
												<span><img src='<?php echo My_Controller_CMS::get_path_file('products/home', $object->healthcare_professional_box_side_image_tablet); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/100x100' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Tablet</label>
												<input type="file" class="form-control" name="healthcare_professional_box_side_image_tablet" placeholder="Imagem Tablet">
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



				</div><!-- /.box-body -->

			 </div><!-- /.box -->

		</div> <!-- /.col -->
	</div> <!-- /.row -->
</section> <!-- /.content -->