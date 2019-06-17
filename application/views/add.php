<?php echo form_open('linea_controller/add'); ?>

	<div>
		NombreLinea :
		<input type="text" name='nombreCampana' value="<?php echo $this->input->post('nombreCampana'); ?>" />
	</div>
	<div>
		AbreviLinea :
		<input type="text" name='fecha' value="<?php echo $this->input->post('fecha'); ?>" />
	</div>
	<div>
		ObsLinea :
		<input type="text" name='ubicacion' value="<?php echo $this->input->post('ubicacion'); ?>" />
	</div>

	<button type="submit">Save</button>

<?php echo form_close(); ?>
