<section class="content-header">
	<h1>
		<?php echo $this->title_module; ?>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url($this->base_cms).'/'.$this->controller_module;?>"><?php echo $this->title_module;; ?></a></li>
		<li class="active"><?php echo $this->lang->line('text_section_insert'); ?></li>
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
									<label for="name">Nome*</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="" required>
								</div>
							</div>
							
							<div class="col-md-5">	
								<div class="form-group">
				                    <label for="email">E-email*</label>
				                    <input type="email" class="form-control" id="email" name="email" placeholder="E-email" value="" required>
				                 </div>
			               	 </div>
		               	</div>
						
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label for="password">Senha*</label>
									<input type="password" class="form-control" name="password" id="senha" placeholder="Senha" required>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label for="conf_password">Confirme a senha*</label>
									<input type="password" class="form-control" name="conf_password" id="conf_password" placeholder="Confirme a senha" data-parsley-equalto="#senha" required>
								</div>
							</div>
						</div>
						
						<div class="form-group"> 
							<hr>
							<h3><?php echo $this->lang->line('text_allowed_sections'); ?></h3>
						</div>
						
						<table cellpadding="0" cellspacing="0" border="0" width="400" class="table-admin">
						
							<thead>
								<tr>
									<th class="colInput" width="50"><input type="checkbox" name="todosCheckbox" title="Selecionar todos" class="check-all" /></th>
									<th class="colText"><?php echo $this->lang->line('text_label_admin'); ?></th>
								</tr>
							</thead>
							
							<?php foreach($this->menu as $object_menu){ ?>
							
								<tbody>		
										
									<tr>
										<td class="colInput bdTop" class="title-acesso">&nbsp;</td>
										<td class="colText bdTop" class="title-acesso"><?php echo $object_menu['module']->title?></td>							
									</tr>
									
									<?php foreach($object_menu['submodules'] as $object_submodule){ ?>
									
										<tr class="itemAcesso">
											<td class="colInput"><input type="checkbox" name="id_submodule[]" id="check<?php echo $object_submodule->id?>" value="<?php echo $object_submodule->id?>" /></td>
											<td class="colSubText"><label for="check<?php echo $object_submodule->id?>"><i>&raquo; <?php echo $object_submodule->title?></i></label></td>
										</tr>
									
									<?php } ?>
									
								</tbody>
								
							
							<?php } ?>
							
						</table>
						
						
						<hr>
						
						<div class="form-group form-group--checkbox">
							<span><?php echo $this->lang->line('text_label_pusblished'); ?></span>
							<label>
								<input type="radio" name="status" value="ativo" checked="checked"> 
								<span class="btn btn-sm btn-success"><?php echo $this->lang->line('text_value_active_status'); ?></span>
							</label>
							<label>
								<input type="radio" name="status" value="inativo"> 
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