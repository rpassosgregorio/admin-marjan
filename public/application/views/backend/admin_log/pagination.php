<table class="box-items-pagination">

	<tbody>
	
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
		
	</tbody>
	
</table>
