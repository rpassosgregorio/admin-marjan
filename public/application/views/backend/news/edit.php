<section class="content-header">
	<h1>
		<?php echo $this->title_module; ?>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url($this->base_cms).'/'.$this->controller_module;?>"><?php echo $this->title_module;; ?></a></li>
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
									<label for="title">TÍTULO</label>
									<input type="text" class="form-control" id="title" name="title" placeholder="" value="<?php echo $object->title; ?>" data-id-slug-generator="slug" required>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="nome"><?php echo strtoupper(site_url('noticias/'));?></label>
									<input type="text" class="form-control" name="slug" placeholder="" id="slug" data-valid-input-backend="<?php echo base_url($this->base_cms.'/'.$this->controller_module.'/slug')?>" value="<?php echo $object->slug; ?>" required>
								</div>
							</div>

		               	</div>

		               	<div class="row">

							<div class="col-md-5">
								<div class="form-group">
									<label for="subtitle">SUBTÍTULO</label>
									<input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="" value="<?php echo $object->subtitle; ?>" required>
								</div>
							</div>

		               	</div>

		               	<div class="row">

							<div class="col-md-8">
								<div class="form-group">
									<label for="call_text">CHAMADA</label>
									<input type="text" class="form-control" id="call_text" name="call_text" placeholder="" value="<?php echo $object->call_text; ?>" required>
								</div>
							</div>

		               	</div>

		               	<div class="row">

							<div class="col-md-3 change-file-image">
								<?php if (!empty(My_Controller_CMS::get_path_file('news', $object->image))) { ?>
									<span><img src='<?php echo My_Controller_CMS::get_path_file('news', $object->image); ?>' width='200' height='200'></span>
								<?php } ?>
								<div class="form-group">
									<label for="image">IMAGEM</label>
									<input type="file" class="form-control" id="image" name="image" placeholder="" value="">
								</div>
							</div>

		               	</div>

		               	<div class="row">

							<div class="col-md-8">
								<div class="form-group">
									<label for="content">TEXTO</label>
									<textarea id="content" name="content" rows="10" cols="80" class="custom-editor"><?php echo $object->content; ?></textarea>
								</div>
							</div>

		               	</div>

		               	<div class="row">

		               		<div class="col-md-2">
			               		<div class="form-group">
									<label>DATA</label>
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
										<input type="date" name="date" class="form-control pull-right" value="<?php echo $object->date; ?>">
									</div>
								</div>
							</div>

							<div class="col-md-2">
			               		<div class="form-group">
									<label>HORA</label>
									<div class="input-group">
										<input type="time" name="hour" class="form-control pull-right" value="<?php echo $object->hour; ?>">
									</div>
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