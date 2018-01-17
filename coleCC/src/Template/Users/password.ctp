
<?php $this->assign('title', 'Request Password Reset'); ?>

<div class="users content col-md-6 col-md-offset-3">
	<h3><?php echo __('Recuperar Password'); ?></h3>
	<?php
    	echo $this->Form->create();
        echo $this->Form->input('email', ['autofocus' => true, 'label' => 'Direccion Email', 'required' => true]);
		echo $this->Form->button('Solicitud reseteo email');
    	echo $this->Form->end();
	?>
	<br><br><br>
</div>
