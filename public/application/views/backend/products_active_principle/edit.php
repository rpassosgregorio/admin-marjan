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
									<input type="text" class="form-control" id="title" name="title" placeholder="" value="<?php echo $object->title; ?>" required>
								</div>
							</div>

		               	</div>

		               	<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label for="milligram_value">VALOR DA MILIGRAMAGEM</label>
									<input type="text" class="form-control" id="milligram_value" name="milligram_value" placeholder="" value="<?php echo $object->milligram_value; ?>" required>
								</div>
							</div>

		               	</div>

		               	<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label for="unit">UNIDADE (MG/G/ML)</label>
									<input type="text" class="form-control" id="unit" name="unit" placeholder="" value="<?php echo $object->unit; ?>" required>
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