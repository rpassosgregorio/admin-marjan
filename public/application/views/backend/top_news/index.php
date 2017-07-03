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

							<article class="admingrid-item admingrid-item--0" style="background-image: url( <?php echo My_Controller_CMS::get_path_file('news/head', $object->principal_image); ?> )">

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

							<article class="admingrid-item admingrid-item--1" style="background-image: url( <?php echo My_Controller_CMS::get_path_file('news/head', $object->calltonext_section_image); ?> )">
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


							<article class="admingrid-item admingrid-item--newstitle">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#newstitle">
									<span>Clique aqui para editar esse conteúdo</span>
								</a>

								<h3><?php echo !empty($object->track_title) ? $object->track_title : 'Lorem ipsum dolor sit amet'; ?></h3>
							</article>

						<?php }else{ ?>

							<article class="admingrid-item admingrid-item--newstitle">
								<a href="#" class="admingrid-edit-btn" data-open-modal="#newstitle">
									<span>Clique aqui para editar esse conteúdo</span>
								</a>

								<h3>Lorem ipsum amet</h3>
							</article>

						<?php }?>


						<div class="admingrid-news">

							<?php for($i = 0; $i < 8; $i++){ var_dump($i); ?>

									<?php $flag = FALSE; ?>

									<?php for ($j=0; $j < count($top_news); $j++) {

											if($i == $top_news[$j]->position){ ?>

												<?php $flag = TRUE; ?>

												<article class="admingrid-news-item admingrid-news-item--<?php echo $top_news[$j]->position; ?>" style="background-image: url(<?php echo isset($top_news[$j]->image) ? My_Controller_CMS::get_path_file('news/featured', $top_news[$j]->image) : 'http://i.imgur.com/jZUFWcE.jpg' ?>)">
													<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner<?php echo $top_news[$j]->position; ?>">
														<span>Clique para editar esse conteúdo</span>
													</a>
													<img src="<?php echo isset($top_news[$j]->image) ? My_Controller_CMS::get_path_file('news/featured', $top_news[$j]->image) : 'http://i.imgur.com/jZUFWcE.jpg' ?>" alt="">
													<div class="admingrid-news-item-info">
														<h2><?php echo isset($top_news[$j]->news) ? $top_news[$j]->news->title : ''; ?></h2>
														<p><?php echo isset($top_news[$j]->news) ? $top_news[$j]->news->call_text : ''; ?></p>
													</div>
												</article>

											<?php }

									} ?>





									<?php if($flag === FALSE){ ?>

										<article class="admingrid-news-item admingrid-news-item--<?php echo $i; ?>" style="background-image: url('http://i.imgur.com/jZUFWcE.jpg')">
											<a href="#" class="admingrid-edit-btn" data-open-modal="#fullbanner<?php echo $i; ?>">
												<span>Clique para editar esse conteúdo</span>
											</a>
											<img src="http://i.imgur.com/jZUFWcE.jpg" alt="">
											<div class="admingrid-news-item-info">
												<h2>Lorem ipsum sum ipsum</h2>
												<p>Lorem ipsum sum ipsum. Lorem ipsum sum ipsum. Lorem ipsum sum ipsum</p>
											</div>
										</article>

									<?php } ?>

							<?php } ?>

							<div class="admingrid-news-col"><p>Não editável</p></div>

						</div>



						<!-- modals -->

						<div class="admingrid-modal" data-modal="item0">

							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save_featured'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

									<div class="row">

										<div class="col-xs-6">
											<?php if(isset($object->id) && My_Controller_CMS::get_path_file('news/head', $object->principal_image)){ ?>
												<span><img src='<?php echo My_Controller_CMS::get_path_file('news/head', $object->principal_image); ?>' width='50' alt=''></span>
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
											<?php if(isset($object->id) && My_Controller_CMS::get_path_file('news/head', $object->principal_image_mobile)){ ?>
												<span><img src='<?php echo My_Controller_CMS::get_path_file('news/head', $object->principal_image_mobile); ?>' width='50' alt=''></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/50x50' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label>Imagem Mobile</label>
												<input type="file" class="form-control" name="principal_image_mobile" placeholder="Imagem Mobile">
											</div>
										</div>

										<div class="col-xs-6">
											<?php if(isset($object->id) && My_Controller_CMS::get_path_file('news/head', $object->principal_image_tablet)){ ?>
												<span><img src='<?php echo My_Controller_CMS::get_path_file('news/head', $object->principal_image_tablet); ?>' width='50' alt=''></span>
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
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save_featured'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>


									<div class="row">
										<div class="col-xs-6">
											<?php if(isset($object->id) && My_Controller_CMS::get_path_file('news/head', $object->calltonext_section_image)){ ?>
												<span><img src='<?php echo My_Controller_CMS::get_path_file('news/head', $object->calltonext_section_image); ?>' width='50' alt=''></span>
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
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save_featured'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>


									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto</label>
												<textarea class="form-control" name="call_text_secion" placeholder="...."><?php echo isset($object->id) ? strip_tags($object->call_text_secion) : ''; ?></textarea>
											</div>
										</div>
									</div>

									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>

								</form>
							</div>

						</div>


						<div class="admingrid-modal" data-modal="newstitle">

							<div class="admingrid-modal-wrapper">
								<button class="admingrid-modal-close__btn">Fechar</button>
								<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save_featured'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>


									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Texto</label>
												<textarea class="form-control" name="track_title" placeholder=""><?php echo isset($object->id) ? strip_tags($object->track_title) : ''; ?></textarea>
											</div>
										</div>
									</div>

									<div class="box-footer text-center">
										<button type="submit" class="btn btn-primary margin">Salvar</button>
									</div>

								</form>
							</div>

						</div>


						<?php for($i = 0; $i < 8; $i++){ ?>

							<?php $flag = FALSE; ?>

							<?php for ($j=0; $j < count($top_news); $j++) {

									if($i == $top_news[$j]->position){ ?>

										<?php $flag = TRUE; ?>

										<div class="admingrid-modal" data-modal="fullbanner<?php echo $top_news[$j]->position; ?>">
											<div class="admingrid-modal-wrapper">
												<button class="admingrid-modal-close__btn">Fechar</button>
												<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

													<div class="row">

														<div class="col-md-6">
															<div class="form-group">
																<label>NOTÍCIA</label>
																<select class="form-control" name="id_news">

																	<option value="">SELECIONE</option>
																	<?php foreach ($news as $item): ?>
																		<option value="<?php echo $item->id.'|'.$top_news[$j]->position; ?>" <?php if($top_news[$j]->id_news == $item->id){ ?> selected="selected" <?php } ?>><?php echo $item->title; ?></option>
																	<?php endforeach ?>

																</select>
															</div>
														</div>

													</div>


													<div class="row">
														<div class="col-md-7">
															<span><img src="<?php echo My_Controller_CMS::get_path_file('news/featured', $top_news[$j]->image); ?>" width='50'></span>
															<div class="form-group">
																<label for="image">IMAGEM</label>
																<input type="file" class="form-control" id="image" name="image" placeholder="">
															</div>
														</div>
													</div>


													<div class="row">
														<div class="col-xs-6">
															<div class="form-group">
																<label>Alinhamento Horizontal</label><br/>
																<label style="margin-right: 10px;">
																	<input type="radio" name="image_horizontal_align" class="minimal"  <?php if($top_news[$j]->image_horizontal_align == 'center'){ ?> checked <?php } ?> value="center"> Center
																</label>
																<label style="margin-right: 10px;">
																	<input type="radio" name="image_horizontal_align" class="minimal" <?php if($top_news[$j]->image_horizontal_align == 'left'){ ?> checked <?php } ?> value="left"> Left
																</label>
																<label>
																	<input type="radio" name="image_horizontal_align" class="minimal" <?php if($top_news[$j]->image_horizontal_align == 'right'){ ?> checked <?php } ?> value="right"> Right
																</label>
															</div>
														</div>

														<div class="col-xs-6">
															<div class="form-group">
																<label>Alinhamento Vertical</label><br/>
																<label style="margin-right: 10px">
																	<input type="radio" name="image_vertical_align" class="minimal" <?php if($top_news[$j]->image_vertical_align == 'center'){ ?> checked <?php } ?> value="center"> Center
																</label>
																<label style="margin-right: 10px">
																	<input type="radio" name="image_vertical_align" class="minimal" <?php if($top_news[$j]->image_vertical_align == 'top'){ ?> checked <?php } ?> value="top"> Top
																</label>
																<label>
																	<input type="radio" name="image_vertical_align" class="minimal" <?php if($top_news[$j]->image_vertical_align == 'bottom'){ ?> checked <?php } ?> value="bottom"> Bottom
																</label>
															</div>
														</div>

													</div>

													<div class="box-footer text-center">
														<button type="submit" class="btn btn-primary margin">Salvar</button>
													</div>

												</form>
											</div>
										</div> <!-- /modal -->

								<?php } ?>

							<?php } ?>


							<?php if($flag === FALSE){ ?>

								<div class="admingrid-modal" data-modal="fullbanner<?php echo $i; ?>">
									<div class="admingrid-modal-wrapper">
										<button class="admingrid-modal-close__btn">Fechar</button>
										<form action="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/save'); ?>" method="post" role="form" class="admingrid-modal-form" enctype="multipart/form-data" data-parsley-validate>

											<div class="row">

												<div class="col-md-6">
													<div class="form-group">
														<label>NOTÍCIA</label>
														<select class="form-control" name="id_news">
															<option value="">SELECIONE</option>
															<?php foreach ($news as $item): ?>
																<option value="<?php echo $item->id.'|'.$i; ?>"><?php echo $item->title; ?></option>
															<?php endforeach ?>

														</select>
													</div>
												</div>

											</div>


											<div class="row">
												<div class="col-md-7">
													<div class="form-group">
														<label for="image">IMAGEM</label>
														<input type="file" class="form-control" id="image" name="image" placeholder="">
													</div>
												</div>
											</div>


											<div class="row">
												<div class="col-xs-6">
													<div class="form-group">
														<label>Alinhamento Horizontal</label><br/>
														<label style="margin-right: 10px;">
															<input type="radio" name="image_horizontal_align" class="minimal" value="center"> Center
														</label>
														<label style="margin-right: 10px;">
															<input type="radio" name="image_horizontal_align" class="minimal" value="left"> Left
														</label>
														<label>
															<input type="radio" name="image_horizontal_align" class="minimal" value="right"> Right
														</label>
													</div>
												</div>

												<div class="col-xs-6">
													<div class="form-group">
														<label>Alinhamento Vertical</label><br/>
														<label style="margin-right: 10px">
															<input type="radio" name="image_vertical_align" class="minimal" value="center"> Center
														</label>
														<label style="margin-right: 10px">
															<input type="radio" name="image_vertical_align" class="minimal" value="top"> Top
														</label>
														<label>
															<input type="radio" name="image_vertical_align" class="minimal" value="bottom"> Bottom
														</label>
													</div>
												</div>

											</div>

											<div class="box-footer text-center">
												<button type="submit" class="btn btn-primary margin">Salvar</button>
											</div>

										</form>
									</div>
								</div> <!-- /modal -->

							<?php } ?>

						<?php } ?>


					</section> <!-- /admingrid -->


				</div><!-- /.box-body -->

			 </div><!-- /.box -->

		</div> <!-- /.col -->
	</div> <!-- /.row -->
</section> <!-- /.content -->