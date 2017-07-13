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

					<?php echo form_open_multipart();?>

						<div class="nav-tabs-custom">

							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab_1" data-toggle="tab">DADOS DA MARJAN</a></li>
								<li><a href="#tab_2" data-toggle="tab">REDES SOCIAIS DA MARJAN</a></li>
								<li><a href="#tab_5" data-toggle="tab">SAIBA MAIS SOBRE A MARJAN</a></li>
								<li><a href="#tab_3" data-toggle="tab">FOOTER DAS PÁGINAS</a></li>
								<li><a href="#tab_4" data-toggle="tab">FOOTER DO SITE</a></li>
							</ul>

							<div class="tab-content">

								<div class="tab-pane active" id="tab_1">

									<div class="row">

										<div class="col-md-5">
											<div class="form-group">
												<label for="name">Nome</label>
												<input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo isset($object->id) ? $object->name : set_value('name'); ?>">
											</div>
										</div>

										<div class="col-md-5">
											<div class="form-group">
												<label for="social_name">Razão Social</label>
												<input type="text" class="form-control" id="social_name" name="social_name" placeholder="" value="<?php echo isset($object->id) ? $object->social_name : set_value('social_name'); ?>">
											</div>
										</div>

					               	</div>

					               	<div class="row">

										<div class="col-md-5">
											<?php if (isset($object->id) && MY_Controller_CMS::get_path_file('general_settings', $object->logo)) { ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('general_settings', $object->logo); ?>' width='100' height='100'></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/100x100' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label for="logo">Logo</label>
												<input type="file" class="form-control" id="logo" name="logo" placeholder="">
											</div>
										</div>

										<div class="col-md-5">
											<?php if (isset($object->id) && MY_Controller_CMS::get_path_file('general_settings', $object->logo_retina)) { ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('general_settings', $object->logo_retina); ?>' width='100' height='100'></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/100x100' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label for="logo_retina">Logo Retina</label>
												<input type="file" class="form-control" id="logo_retina" name="logo_retina" placeholder="">
											</div>
										</div>

					               	</div>

					               	<div class="row">

										<div class="col-md-5">
											<div class="form-group">
												<label for="name">Endereço</label>
												<input type="text" class="form-control" id="public_place" name="public_place" placeholder="" value="<?php echo isset($object->id) ? $object->public_place : set_value('public_place'); ?>">
											</div>
										</div>

										<div class="col-md-5">
											<div class="form-group">
												<label for="number">Número</label>
												<input type="text" class="form-control" id="number" name="number" placeholder="" value="<?php echo isset($object->id) ? $object->number : set_value('number'); ?>">
											</div>
										</div>

					               	</div>

					               	<div class="row">

										<div class="col-md-5">
											<div class="form-group">
												<label for="name">Complemento</label>
												<input type="text" class="form-control" id="complement" name="complement" placeholder="" value="<?php echo isset($object->id) ? $object->complement : set_value('complement'); ?>">
											</div>
										</div>

					               	</div>

					               	<div class="row">

										<div class="col-md-5">
											<div class="form-group">
												<label for="city">Cidade</label>
												<input type="text" class="form-control" id="city" name="city" placeholder="" value="<?php echo isset($object->id) ? $object->city : set_value('city'); ?>">
											</div>
										</div>


										<div class="col-md-5">
											<div class="form-group">
												<label for="state">Estado</label>
												<input type="text" class="form-control" id="state" name="state" placeholder="" value="<?php echo isset($object->id) ? $object->state : set_value('state'); ?>">
											</div>
										</div>

					               	</div>

					               	<div class="row">

										<div class="col-md-5">
											<div class="form-group">
												<label for="zip_code">CEP</label>
												<input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="" value="<?php echo isset($object->id) ? $object->zip_code : set_value('zip_code'); ?>">
											</div>
										</div>

					               	</div>

					               	<div class="row">

										<div class="col-md-5">
											<div class="form-group">
												<label for="phone1">Telefone 1</label>
												<input type="text" class="form-control" id="phone1" name="phone1" placeholder="" value="<?php echo isset($object->id) ? $object->phone1 : set_value('phone1'); ?>">
											</div>
										</div>

										<div class="col-md-5">
											<div class="form-group">
												<label for="phone2">Telefone 2</label>
												<input type="text" class="form-control" id="phone2" name="phone2" placeholder="" value="<?php echo isset($object->id) ? $object->phone2 : set_value('phone2'); ?>">
											</div>
										</div>

					               	</div>

					               	<div class="row">

										<div class="col-md-5">
											<div class="form-group">
												<label for="email_contact">Email contato</label>
												<input type="text" class="form-control" id="email_contact" name="email_contact" placeholder="" value="<?php echo isset($object->id) ? $object->email_contact : set_value('email_contact'); ?>">
											</div>
										</div>

										<div class="col-md-5">
											<div class="form-group">
												<label for="email_alternative">Email alternativo</label>
												<input type="text" class="form-control" id="email_alternative" name="email_alternative" placeholder="" value="<?php echo isset($object->id) ? $object->email_alternative : set_value('email_alternative'); ?>">
											</div>
										</div>

					               	</div>

								</div>

								<div class="tab-pane" id="tab_2">

									<div class="row">

										<div class="col-md-5">
											<div class="form-group">
												<label for="facebook">Facebook</label>
												<input type="text" class="form-control" id="facebook" name="facebook" placeholder="" value="<?php echo isset($object->id) ? $object->facebook : set_value('facebook'); ?>">
											</div>
										</div>

										<div class="col-md-5">
											<div class="form-group">
												<label for="instagram">Instagram</label>
												<input type="text" class="form-control" id="instagram" name="instagram" placeholder="" value="<?php echo isset($object->id) ? $object->instagram : set_value('instagram'); ?>">
											</div>
										</div>

					               	</div>

					               	<div class="row">

										<div class="col-md-5">
											<div class="form-group">
												<label for="youtube">Youtube</label>
												<input type="text" class="form-control" id="youtube" name="youtube" placeholder="" value="<?php echo isset($object->id) ? $object->youtube : set_value('youtube'); ?>">
											</div>
										</div>

										<div class="col-md-5">
											<div class="form-group">
												<label for="linkedin">Linkedin</label>
												<input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="" value="<?php echo isset($object->id) ? $object->linkedin : set_value('linkedin'); ?>">
											</div>
										</div>

					               	</div>


								</div>

								<div class="tab-pane" id="tab_3">


									<div class="row">

										<div class="col-md-5">
											<div class="form-group">
												<label for="common_page_title">Título</label>
												<input type="text" class="form-control" id="common_page_title" name="common_page_title" placeholder="" value="<?php echo isset($object->id) ? $object->common_page_title : set_value('common_page_title'); ?>">
											</div>
										</div>

										<div class="col-md-5">
											<div class="form-group">
												<label for="common_page_text">Texto</label>
												<textarea class="form-control" name="common_page_text" placeholder="Texto esquerda"><?php echo isset($object->id) ? MY_Controller_CMS::nl2br_str_decode($object->common_page_text) : ''; ?></textarea>
											</div>
										</div>

					               	</div>

								</div>

								<div class="tab-pane" id="tab_4">


									<div class="row">

										<div class="col-md-5">
											<div class="form-group">
												<label for="footer_copyright_text">Texto Copyright</label>
												<input type="text" class="form-control" id="footer_copyright_text" name="footer_copyright_text" placeholder="" value="<?php echo isset($object->id) ? $object->footer_copyright_text : set_value('footer_copyright_text'); ?>">
											</div>
										</div>


					               	</div>

					               	<div class="row">

										<div class="col-md-5">
											<div class="form-group">
												<label for="footer_terms_text">Texto Política de Privacidade</label>
												<input type="text" class="form-control" id="footer_terms_text" name="footer_terms_text" placeholder="" value="<?php echo isset($object->id) ? $object->footer_terms_text : set_value('footer_terms_text'); ?>">
											</div>
										</div>

										<div class="col-md-5">
											<div class="form-group">
												<label for="footer_terms_link">Link Política de Privacidade</label>
												<input type="text" class="form-control" id="footer_terms_link" name="footer_terms_link" placeholder="" value="<?php echo isset($object->id) ? $object->footer_terms_link : set_value('footer_terms_link'); ?>">
											</div>
										</div>

					               	</div>

					               	<div class="row">

										<div class="col-md-5">
											<div class="form-group">
												<label for="phone_sac">Telefone SAC</label>
												<input type="text" class="form-control" id="phone_sac" name="phone_sac" placeholder="" value="<?php echo isset($object->id) ? $object->phone_sac : set_value('phone_sac'); ?>">
											</div>
										</div>

										<div class="col-md-5">
											<div class="form-group">
												<label for="email_sac">Email SAC</label>
												<input type="text" class="form-control" id="email_sac" name="email_sac" placeholder="" value="<?php echo isset($object->id) ? $object->email_sac : set_value('email_sac'); ?>">
											</div>
										</div>

					               	</div>

				               		<div class="row">

										<div class="col-md-5">
											<div class="form-group">
												<label for="footer_sac_text">Texto SAC</label>
												<input type="text" class="form-control" id="footer_sac_text" name="footer_sac_text" placeholder="" value="<?php echo isset($object->id) ? $object->footer_sac_text : set_value('footer_sac_text'); ?>">
											</div>
										</div>


					               	</div>

								</div>

								<div class="tab-pane" id="tab_5">

									<div class="row">

										<div class="col-md-5">
											<div class="form-group">
												<label for="know_more_section_title">Título da seção</label>
												<input type="text" class="form-control" id="know_more_section_title" name="know_more_section_title" placeholder="" value="<?php echo isset($object->id) ? $object->know_more_section_title : set_value('know_more_section_title'); ?>">
											</div>
										</div>

					               	</div>

					               	<div class="row">

					               		<div class="col-md-5">
											<div class="form-group">
												<label for="know_more1_title">Destaque 1</label>
												<input type="text" class="form-control" id="know_more1_title" name="know_more1_title" placeholder="" value="<?php echo isset($object->id) ? $object->know_more1_title : set_value('know_more1_title'); ?>">
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-md-5">
											<?php if (isset($object->id) && MY_Controller_CMS::get_path_file('general_settings', $object->know_more1_img)) { ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('general_settings', $object->know_more1_img); ?>' width='100' height='100'></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/100x100' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label for="know_more1_img">Imagem Destaque 1</label>
												<input type="file" class="form-control" id="know_more1_img" name="know_more1_img" placeholder="">
											</div>
										</div>

					               	</div>

					               	<div class="row">

					               		<div class="col-md-5">
											<div class="form-group">
												<label for="know_more2_title">Destaque 2</label>
												<input type="text" class="form-control" id="know_more2_title" name="know_more2_title" placeholder="" value="<?php echo isset($object->id) ? $object->know_more2_title : set_value('know_more2_title'); ?>">
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-md-5">
											<?php if (isset($object->id) && MY_Controller_CMS::get_path_file('general_settings', $object->know_more2_img)) { ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('general_settings', $object->know_more2_img); ?>' width='100' height='100'></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/100x100' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label for="know_more2_img">Imagem Destaque 2</label>
												<input type="file" class="form-control" id="know_more2_img" name="know_more2_img" placeholder="">
											</div>
										</div>

					               	</div>

					               	<div class="row">

					               		<div class="col-md-5">
											<div class="form-group">
												<label for="know_more3_title">Destaque 3</label>
												<input type="text" class="form-control" id="know_more3_title" name="know_more3_title" placeholder="" value="<?php echo isset($object->id) ? $object->know_more3_title : set_value('know_more3_title'); ?>">
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-md-5">
											<?php if (isset($object->id) && MY_Controller_CMS::get_path_file('general_settings', $object->know_more3_img)) { ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('general_settings', $object->know_more3_img); ?>' width='100' height='100'></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/100x100' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label for="know_more3_img">Imagem Destaque 3</label>
												<input type="file" class="form-control" id="know_more3_img" name="know_more3_img" placeholder="">
											</div>
										</div>

					               	</div>

					               	<div class="row">

					               		<div class="col-md-5">
											<div class="form-group">
												<label for="know_more4_title">Destaque 4</label>
												<input type="text" class="form-control" id="know_more4_title" name="know_more4_title" placeholder="" value="<?php echo isset($object->id) ? $object->know_more4_title : set_value('know_more4_title'); ?>">
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-md-5">
											<?php if (isset($object->id) && MY_Controller_CMS::get_path_file('general_settings', $object->know_more4_img)) { ?>
												<span><img src='<?php echo MY_Controller_CMS::get_path_file('general_settings', $object->know_more4_img); ?>' width='100' height='100'></span>
											<?php }else{ ?>
												<span><img src='https://dummyimage.com/100x100' alt=''></span>
											<?php } ?>
											<div class="form-group">
												<label for="know_more4_img">Imagem Destaque 4</label>
												<input type="file" class="form-control" id="know_more4_img" name="know_more4_img" placeholder="">
											</div>
										</div>

					               	</div>

								</div>

							</div>

						</div>

						<div class="box-footer text-center">
							<button type="submit" class="btn btn-primary margin">Salvar</button>
						</div>

					<?php echo form_close();?>

				</div>
			</div>

		</div>

	</div>

</section> <!-- /.content -->