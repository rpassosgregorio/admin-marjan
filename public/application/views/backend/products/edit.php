<section class="content-header">
	<h1>
		<?php echo $this->title_module; ?>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url($this->base_cms).'/'.$this->controller_module;?>"><?php echo $this->title_module; ?></a></li>
		<li class="active"><?php echo $this->lang->line('text_section_edit'); ?></li>
	</ol>
</section>

<section class="content">
	<div class="row">

		<div class="col-xs-12">

			<div class="box">
				<div class="box-body">

					<?php echo form_open_multipart();?>

						<div class="row">

							<div class="col-md-5">

								<div class="form-group">
									<label>CATEGORIA</label>
									<select class="form-control select2" name="id_category" required>

										<?php foreach ($categories as $category): ?>
											<option value="<?php echo $category->id; ?>" data-is-food="<?php echo $category->is_food ? 'true' : 'false'; ?>" <?php if($object->id_category == $category->id){ ?> selected="selected" <?php } ?>><?php echo $category->title; ?></option>
										<?php endforeach ?>

									</select>
								</div>

							</div>


		               		<div class="col-md-5">

		               			<div class="form-group">
									<label>ESPECIALIDADES</label>

									<select class="form-control select2" multiple="multiple" data-placeholder="SELECIONE" style="width: 100%;" name="specialties[]">

										<?php foreach ($specialties as $specialty): ?>
											<option value="<?php echo $specialty->id; ?>" <?php if(in_array($specialty->id, $related_specialties)){ ?> selected="selected" <?php } ?>><?php echo $specialty->title; ?></option>
										<?php endforeach ?>

									</select>

								</div>

		               		</div>

		               	</div>

		               	<div class="row">

		               		<div class="col-md-5">

		               			<div class="form-group">
									<label>APRESENTAÇÃO</label>

									<select class="form-control select2" multiple="multiple" data-placeholder="SELECIONE" style="width: 100%;" name="presentations[]">

										<?php foreach ($presentations as $presentation): ?>
											<option value="<?php echo $specialty->id; ?>" <?php if(in_array($presentation->id, $related_presentations)){ ?> selected="selected" <?php } ?>><?php echo $presentation->title; ?></option>
										<?php endforeach ?>

									</select>

								</div>

		               		</div>

		               		<div class="col-md-5">

		               			<div class="form-group">
									<label>PRINCÍPIO ATIVO</label>

									<select class="form-control select2" multiple="multiple" data-placeholder="SELECIONE" style="width: 100%;" name="active_principles[]">

										<?php foreach ($active_principles as $active_principle): ?>
											<option value="<?php echo $active_principle->id; ?>" <?php if(in_array($active_principle->id, $related_active_principles)){ ?> selected="selected" <?php } ?>><?php echo $active_principle->title.' ('.$active_principle->milligram_value.' '.$active_principle->unit.')'; ?>
										<?php endforeach ?>

									</select>

								</div>

		               		</div>

		               	</div>

						<div class="row">

							<div class="col-md-5">
								<div class="form-group">
									<label for="name">NOME DO PRODUTO</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo $object->name; ?>" data-id-slug-generator="slug" required>
								</div>
							</div>

							<div class="col-md-5">
								<div class="form-group">
									<label for="nome"><?php echo strtoupper(site_url('produto/'));?></label>
									<input type="text" class="form-control" name="slug" placeholder="" id="slug" value="<?php echo $object->slug; ?>" data-valid-input-backend="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/slug')?>" required>
								</div>
							</div>

		               	</div>

		               	<div class="row">

							<div class="col-md-5">
								<div class="form-group">
									<label for="cientific_name">NOME CIENTÍFICO</label>
									<input type="text" class="form-control" id="cientific_name" name="cientific_name" placeholder="" value="<?php echo $object->cientific_name; ?>" required>
								</div>
							</div>

		               	</div>

		               	<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label>
										OBRIGATÓRIO PRESCRIÇÃO / RECEITA MÉDICA ? &nbsp;
										<input type="checkbox" name="is_under_prescription" class="minimal" value="1" <?php if($object->is_under_prescription){ ?> checked <?php } ?>>
									</label>
								</div>

							</div>

		               	</div>

		               	<div class="row">

							<div class="col-md-8">
								<div class="form-group">
									<label for="indication">INDICAÇÃO</label>
									<textarea id="indication" name="indication" rows="10" cols="80" class="custom-editor"><?php echo $object->indication; ?></textarea>
								</div>
							</div>

		               	</div>

						<div class="row">

							<div class="col-md-8">
								<div class="form-group">
									<label for="therapeutic_class">CLASSE TERAPÊUTICA</label>
									<textarea id="therapeutic_class" name="therapeutic_class" rows="10" cols="80" class="custom-editor"><?php echo $object->therapeutic_class; ?></textarea>
								</div>
							</div>

		               	</div>

	               		<div class="row">

							<div class="col-md-8">
								<div class="form-group">
									<label for="product_info">INFORMAÇÃO DO PRODUTO</label>
									<textarea id="product_info" name="product_info" rows="10" cols="80" class="custom-editor"><?php echo $object->product_info; ?></textarea>
								</div>
							</div>

		               	</div>

		               	<div class="row">

							<div class="col-md-3 change-file-product_release_image">
								<?php if (!empty(My_Controller_CMS::get_path_file('products', $object->product_release_image))) { ?>
									<span><img src='<?php echo My_Controller_CMS::get_path_file('products', $object->product_release_image); ?>' width='200' height='200'></span>
								<?php } ?>
								<div class="form-group">
									<label for="product_release_image">IMAGEM RELEASE</label>
									<input type="file" class="form-control" id="product_release_image" accept=".jpg, .jpeg, .png" name="product_release_image" placeholder="" value="">
								</div>
							</div>

		               	</div>

		               	<div class="row">

							<div class="col-md-3 change-file-product_image">
								<?php if (!empty(My_Controller_CMS::get_path_file('products', $object->product_image))) { ?>
									<span><img src='<?php echo My_Controller_CMS::get_path_file('products', $object->product_image); ?>' width='200' height='200'></span>
								<?php } ?>
								<div class="form-group">
									<label for="product_image">IMAGEM</label>
									<input type="file" class="form-control" id="product_image" accept=".jpg, .jpeg, .png" name="product_image" placeholder="" value="">
								</div>
							</div>

							<div class="col-md-3 change-file-product_image_mobile">
								<?php if (!empty(My_Controller_CMS::get_path_file('products', $object->product_image_mobile))) { ?>
									<span><img src='<?php echo My_Controller_CMS::get_path_file('products', $object->product_image_mobile); ?>' width='200' height='200'></span>
								<?php } ?>
								<div class="form-group">
									<label for="product_image_mobile">IMAGEM (MOBILE)</label>
									<input type="file" class="form-control" id="product_image_mobile" accept=".jpg, .jpeg, .png" name="product_image_mobile" placeholder="" value="">
								</div>
							</div>

							<div class="col-md-3 change-file-product_image_tablet">
								<?php if (!empty(My_Controller_CMS::get_path_file('products', $object->product_image_tablet))) { ?>
									<span><img src='<?php echo My_Controller_CMS::get_path_file('products', $object->product_image_tablet); ?>' width='200' height='200'></span>
								<?php } ?>
								<div class="form-group">
									<label for="product_image_tablet">IMAGEM (TABLET)</label>
									<input type="file" class="form-control" id="product_image_tablet" accept=".jpg, .jpeg, .png" name="product_image_tablet" placeholder="" value="" >
								</div>
							</div>

		               	</div>

		               	<div class="row">
							<div class="col-xs-3">
								<div class="form-group">
									<label>ALINHAMENTO DA IMAGEM - HORIZONTAL</label><br/>
									<label style="margin-right: 10px;">
										<input type="radio" name="product_image_horizontal_align" class="minimal" <?php if($object->product_image_horizontal_align == 'center'){ ?> checked <?php } ?>  value="center"> Center
									</label>
									<label style="margin-right: 10px;">
										<input type="radio" name="product_image_horizontal_align" class="minimal" <?php if($object->product_image_horizontal_align == 'left'){ ?> checked <?php } ?> value="left"> Left
									</label>
									<label>
										<input type="radio" name="product_image_horizontal_align" class="minimal" <?php if($object->product_image_horizontal_align == 'right'){ ?> checked <?php } ?> value="right"> Right
									</label>
								</div>
							</div>

							<div class="col-xs-3">
								<div class="form-group">
									<label>ALINHAMENTO DA IAMGEM - VERTICAL</label><br/>
									<label style="margin-right: 10px">
										<input type="radio" name="product_image_vertical_align" class="minimal" <?php if($object->product_image_vertical_align == 'center'){ ?> checked <?php } ?> value="center"> Center
									</label>
									<label style="margin-right: 10px">
										<input type="radio" name="product_image_vertical_align" class="minimal" <?php if($object->product_image_vertical_align == 'top'){ ?> checked <?php } ?> value="top"> Top
									</label>
									<label>
										<input type="radio" name="product_image_vertical_align" class="minimal" <?php if($object->product_image_vertical_align == 'bottom'){ ?> checked <?php } ?> value="bottom"> Bottom
									</label>
								</div>
							</div>

						</div>

						<div class="row">

							<div class="col-md-3">
								<div class="form-group">
									<label for="drug_leaflet_patient_pdf">BULA - PACIENTE (PDF)</label>
									<input type="file" class="form-control" accept=".pdf" id="drug_leaflet_patient_pdf" name="drug_leaflet_patient_pdf" placeholder="" value="">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="drug_leaflet_healthcare_professional_pdf">BULA - PROFISSIONAL (PDF)</label>
									<input type="file" class="form-control" accept=".pdf" id="drug_leaflet_healthcare_professional_pdf" name="drug_leaflet_healthcare_professional_pdf" placeholder="" value="">
								</div>
							</div>

		               	</div>

						<div class="combo-container hidden" data-name="id_category" data-value="true">

							<div class="row">

								<div class="col-md-8">
									<div class="form-group">
										<label for="how_to_use">MODO DE USO</label>
										<textarea id="how_to_use" name="how_to_use" rows="10" cols="80" class="custom-editor"><?php echo $object->how_to_use; ?></textarea>
									</div>
								</div>

			               	</div>


			               	<div class="row">

								<div class="col-md-8">
									<div class="form-group">
										<label for="ingredients">INGREDIENTES</label>
										<textarea id="ingredients" name="ingredients" rows="10" cols="80" class="custom-editor"><?php echo $object->ingredients; ?></textarea>
									</div>
								</div>

			               	</div>

			               	<div class="row">

								<div class="col-md-3 change-file-nutritional_info">
									<?php if (!empty(My_Controller_CMS::get_path_file('products', $object->nutritional_info))) { ?>
										<span><img src='<?php echo My_Controller_CMS::get_path_file('products', $object->nutritional_info); ?>' width='200' height='200'></span>
									<?php } ?>
									<div class="form-group">
										<label for="nutritional_info">IMAGEM INFORMAÇÃO NUTRICIONAL</label>
										<input type="file" class="form-control" id="nutritional_info" accept=".jpg, .jpeg, .png" name="nutritional_info" placeholder="" value="">
									</div>
								</div>

			               	</div>


			               	<div class="row">

								<div class="col-md-8">
									<div class="form-group">
										<label for="nutritional_info_obs">INFORMAÇÃO NUTRICIONAL OBS</label>
										<textarea id="nutritional_info_obs" name="nutritional_info_obs" rows="10" cols="80" class="custom-editor"><?php echo $object->nutritional_info_obs; ?></textarea>
									</div>
								</div>

			               	</div>
						</div>

						<div class="row">

		               		<div class="col-md-8">

		               			<div class="form-group">
									<label>PALAVRAS-CHAVES / TAGS (pressione enter para confirmar)</label>
									<input name="product_keywords" class="tags-input" value="<?php echo $object->product_keywords; ?>" data-autocomplete-url="" />
								</div>

		               		</div>

		               	</div>


						<hr>

						<div class="form-group form-group--checkbox">
							<span><?php echo $this->lang->line('text_label_pusblished'); ?></span>
							<label>
								<input type="radio" name="active" value="1" <?php if($object->active){?> checked="checked" <?php }?>>
								<span class="btn btn-sm btn-success"><?php echo $this->lang->line('text_value_active_status'); ?></span>
							</label>
							<label>
								<input type="radio" name="active" value="0" <?php if(!$object->active){?> checked="checked" <?php }?>>
								<span class="btn btn-sm btn-danger"><?php echo $this->lang->line('text_value_inactive_status'); ?></span>
							</label>
						</div>



						<div class="box-footer text-center">
							<button type="submit" class="btn btn-primary margin"><?php echo $this->lang->line('text_button_save'); ?></button>
						</div>

					<?php echo form_close();?>


				</div> <!-- /.box-body -->
			</div> <!-- /.box -->

		</div>


	</div>
</section>