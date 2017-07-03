<?php echo validation_errors(); ?>

<?php if(!empty($feedback_success)){?> <h3><?php echo $feedback_success; ?></h3> <?php } ?>
<?php if(!empty($feedback_error)){?> <h3><?php echo $feedback_error; ?></h3> <?php } ?>

<section class="content-header">
	<h1>
		<?php echo $this->title_module;; ?>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url($this->base_cms).'/'.$this->controller_module;?>"><?php echo $this->title_module;; ?></a></li>
		<li class="active">Inserir</li>
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
									<label for="title">Responsável</label>
									<input type="text" class="form-control" id="title" name="title" placeholder="Título" value="<?php echo $object->responsible->name; ?>" required>
								</div>
							</div>
							
							<div class="col-md-5">
								<div class="form-group">
									<label for="title">Data</label>
									<input type="text" class="form-control" id="title" name="title" placeholder="Título" value="<?php echo $object->date_insertion != '0000-00-00 00:00:00' ? nice_date($object->date_insertion, 'd/m/Y H:i:s') : '0000-00-00 00:00:00'; ?>" required>
								</div>
							</div>
							
		               	</div>
		               	
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label for="title">Ação</label>
									<input type="text" class="form-control" id="title" name="title" placeholder="Título" value="<?php echo $object->action; ?>" required>
								</div>
							</div>
							
							<div class="col-md-5">
								<div class="form-group">
									<label for="title">Tabela</label>
									<input type="text" class="form-control" id="title" name="title" placeholder="Título" value="<?php echo $object->table; ?>" required>
								</div>
							</div>
							
		               	</div>
		               	
		               	
		               	<div class="row">
											
							<div class="col-xs-6">
								<div class="box">
									<div class="box-body">
										<label for="json"></label>
										<textarea rows="10" cols="80" class="custom-editor" name="json" id="json"><?php echo $object->json; ?></textarea>
									</div>
								</div>
							</div>
							
						</div>
						
						<hr>
						
						<div class="form-group form-group--checkbox">
							<span>Publicado</span>
							<label>
								<input type="radio" name="status" value="ativo" <?php if($object->active){?> checked="checked" <?php }?>> 
								<span class="btn btn-sm btn-success">Sim</span>
							</label>
							<label>
								<input type="radio" name="status" value="inativo" <?php if(!$object->active){?> checked="checked" <?php }?>> 
								<span class="btn btn-sm btn-danger">Não</span>
							</label>
						</div>
						
						 
						 
						<div class="box-footer text-center">
							<button type="submit" class="btn btn-primary margin">Salvar</button>
						</div>
						
					<?php echo form_close();?>
						
					
				</div> <!-- /.box-body -->
			</div> <!-- /.box -->
		
		</div>
		
		
	</div>
</section>