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
				
					<div class='form-inline'>
						<label>
							Mostrar 
							<select name='updateTotalItemsPage' aria-controls='example1' class='form-control input-sm'>
								<option value='1' <?php if($this->count_pages_list == '1'){?> selected='selected' <?php }?>>1</option>
								<option value='10' <?php if($this->count_pages_list == '10'){?> selected='selected' <?php }?>>10</option>
								<option value='25' <?php if($this->count_pages_list == '25'){?> selected='selected' <?php }?>>25</option>
								<option value='50' <?php if($this->count_pages_list == '50'){?> selected='selected' <?php }?>>50</option>
								<option value='100' <?php if($this->count_pages_list == '100'){?> selected='selected' <?php }?>>100</option>
							</select> 
						itens
						</label>
					</div>
					
					<div class='pull-right'>
						<div class='has-feedback'>
							<form action='#' method='post' class='search-form'>
								<input type='text' class='form-control input-sm' placeholder='Procurar...' value='<?php echo empty($field_search) ? '' : $field_search?>'>
								<span class='glyphicon glyphicon-search form-control-feedback'></span>
							</form>
						</div>
					</div>
					
					<br><br> 
					
					<?php if(!empty($field_search)){?>
						<p class='text-right'>
							Você buscou por: <strong><?php echo $field_search?></strong> <a href='<?php echo base_url($this->base_cms).'/'.$this->controller_module?>'><i class='fa fa-times-circle'></i></a> 
						</p>
					<?php }?>
					
					<br/>
					
					
					<!--
					 // Para drag não funcionar usar a class 'no-drag'
					-->
					
					<table class='table table-bordered table-striped dataTable no-drag' data-order-field='<?php echo $order_field['field']; ?>' data-order-sort='<?php echo $order_field['order']; ?>'>

						<thead>
							<tr>
								<th align='center'><input type='checkbox' title='Marcar/Desmarcar todos' class='check-all' /></th>
								<th data-field='id' data-order-asc='<?php echo base_url($this->base_cms).'/'.$this->controller_module?>/order_field_grid/<?php echo $page_cur.'/id/asc'.$search_field_format; ?>' data-order-desc='<?php echo base_url($this->base_cms).'/'.$this->controller_module?>/order_field_grid/<?php echo $page_cur.'/id/desc'.$search_field_format; ?>'>ID</th>
								<th data-field='action' data-order-asc='<?php echo base_url($this->base_cms).'/'.$this->controller_module?>/order_field_grid/<?php echo $page_cur.'/action/asc'.$search_field_format; ?>' data-order-desc='<?php echo base_url($this->base_cms).'/'.$this->controller_module?>/order_field_grid/<?php echo $page_cur.'/action/desc'.$search_field_format; ?>'>Responsável</th>
								<th data-field='action' data-order-asc='<?php echo base_url($this->base_cms).'/'.$this->controller_module?>/order_field_grid/<?php echo $page_cur.'/action/asc'.$search_field_format; ?>' data-order-desc='<?php echo base_url($this->base_cms).'/'.$this->controller_module?>/order_field_grid/<?php echo $page_cur.'/action/desc'.$search_field_format; ?>'>Ação</th>
								<th data-field='action' data-order-asc='<?php echo base_url($this->base_cms).'/'.$this->controller_module?>/order_field_grid/<?php echo $page_cur.'/table/asc'.$search_field_format; ?>' data-order-desc='<?php echo base_url($this->base_cms).'/'.$this->controller_module?>/order_field_grid/<?php echo $page_cur.'/table/desc'.$search_field_format; ?>'>Tabela</th>
								<th data-field='action' data-order-asc='<?php echo base_url($this->base_cms).'/'.$this->controller_module?>/order_field_grid/<?php echo $page_cur.'/date_insertion/asc'.$search_field_format; ?>' data-order-desc='<?php echo base_url($this->base_cms).'/'.$this->controller_module?>/order_field_grid/<?php echo $page_cur.'/date_insertion/desc'.$search_field_format; ?>'>Data</th>
								<th data-field='active' data-order-asc='<?php echo base_url($this->base_cms).'/'.$this->controller_module?>/order_field_grid/<?php echo $page_cur.'/active/asc'.$search_field_format; ?>' data-order-desc='<?php echo base_url($this->base_cms).'/'.$this->controller_module?>/order_field_grid/<?php echo $page_cur.'/active/desc'.$search_field_format; ?>'>Publicado</th>
							</tr>
						</thead>

						<tbody>
							<?php if(!empty($list_objects)){?>
							
								<?php foreach($list_objects as $object){ ?>
								
									<tr data-status='<?php echo $object->active?>' data-id='<?php echo $object->id; ?>'>
										<td align='center'><input type='checkbox' name='id[]' /></td>
										<td><a href='<?php echo base_url($this->base_cms).'/'.$this->controller_module.'/edit/'.$page_cur.'/'.$object->id.$search_field_format; ?>'> <?php echo $object->id; ?> </a></td>
										<td><a href='<?php echo base_url($this->base_cms).'/'.$this->controller_module.'/edit/'.$page_cur.'/'.$object->id.$search_field_format; ?>'> <?php echo $object->responsible->name; ?> </a></td>
										<td><a href='<?php echo base_url($this->base_cms).'/'.$this->controller_module.'/edit/'.$page_cur.'/'.$object->id.$search_field_format; ?>'> <?php echo $object->action; ?> </a></td>
										<td><a href='<?php echo base_url($this->base_cms).'/'.$this->controller_module.'/edit/'.$page_cur.'/'.$object->id.$search_field_format; ?>'> <?php echo $object->table; ?> </a></td>
										<td><a href='<?php echo base_url($this->base_cms).'/'.$this->controller_module.'/edit/'.$page_cur.'/'.$object->id.$search_field_format; ?>'> <?php echo $object->date_insertion != '0000-00-00 00:00:00' ? nice_date($object->date_insertion, 'd/m/Y H:i:s') : '0000-00-00 00:00:00'; ?> </a></td>
										<td>
										<?php if($object->active){ ?>
											<button class='btn btn-xs btn-success btn-status'>Sim</button>
										<?php }else{ ?>
											<button class='btn btn-xs btn-danger btn-status'>Não</button>
										<?php } ?>
										</td>
									</tr>
									
								<?php } ?>
								
							<?php }else{ ?>
							
								<tr>
									<td colspan='6' class='text-center'>Nenhum registro encontrado.</td>
								</tr>
								
							<?php } ?>
							
						</tbody>
						

					</table>
					
					<br/>
					
					<?php if($count_pages > 1){ ?>
						<p class='text-center'>
							<button class='btn btn-primary btn-load-items' data-page='<?php echo $page_cur; ?>' data-total-pages='<?php echo $count_pages; ?>'>Carregar mais itens</button>
						</p>
					<?php } ?>
						
				</div><!-- /.box-body -->
				
				<div class='box-footer'>

					<div class='row'>
						<div class='col-md-3' data-pagina='<?php echo $page_cur?>' data-total-por-pagina='<?php echo $count_pages_list; ?>' data-total-de-paginas='<?php echo $count_pages; ?>' data-total-de-registros='<?php echo $total_record; ?>'>
							<div class='dataTables_info' role='active' aria-live='polite'>Mostrando <strong class='total-items-page'><?php echo $count_pages_list; ?></strong> de <strong class='total-items-result'><?php echo $total_record; ?> <?php echo $total_record > 1 ? 'registros' : 'registro'; ?> </strong> <?php if($count_pages >= 1){ ?> em um total de <strong><?php echo $count_pages; ?> <?php echo $count_pages > 1 ? 'páginas' : 'página'; ?></strong> <?php } ?> </div>
						</div>
					</div>
					
				</div>
			 </div><!-- /.box -->
			 
		</div> <!-- /.col -->
	</div> <!-- /.row -->
</section> <!-- /.content -->