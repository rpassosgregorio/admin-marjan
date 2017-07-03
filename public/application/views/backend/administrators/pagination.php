<table class="box-items-pagination">

	<tbody>
	
		<?php foreach($list_objects as $object){ ?>
		
			<tr data-status='<?php echo $object->active?>' data-id='<?php echo $object->id; ?>'>
				<td align='center'><input type='checkbox' name='id[]' /></td>
				<td><a href='<?php echo base_url($this->base_cms).'/'.$this->controller_module.'/edit/'.$page_cur.'/'.$object->id.$search_field_format; ?>'> <?php echo $object->id; ?> </a></td>
				<td><a href='<?php echo base_url($this->base_cms).'/'.$this->controller_module.'/edit/'.$page_cur.'/'.$object->id.$search_field_format; ?>'> <?php echo $object->name; ?> </a></td>
				<td><a href='<?php echo base_url($this->base_cms).'/'.$this->controller_module.'/edit/'.$page_cur.'/'.$object->id.$search_field_format; ?>'> <?php echo $object->email; ?> </a></td>
				<td><a href='<?php echo base_url($this->base_cms).'/'.$this->controller_module.'/edit/'.$page_cur.'/'.$object->id.$search_field_format; ?>'> <?php echo $object->date_last_login != '0000-00-00 00:00:00' ? nice_date($object->date_last_login, 'd/m/Y H:i:s') : '0000-00-00 00:00:00'; ?> </a></td>
				<td>
				<?php if($object->active){ ?>
					<button class='btn btn-xs btn-success btn-status'><?php echo $this->lang->line('active_status'); ?></button>
				<?php }else{ ?>
					<button class='btn btn-xs btn-danger btn-status'><?php echo $this->lang->line('inactive_status'); ?></button>
				<?php } ?>
				</td>
			</tr>
			
		<?php } ?>
		
	</tbody>
	
</table>
