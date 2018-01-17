<?php $this->assign('title', 'Reset Password'); ?>
<div class="users content col-md-6 col-md-offset-3">
    <?php echo $this->Form->create($user) ?>
    <fieldset>
        <legend><?php echo __('Restaurar Password') ?>
    <?php
        echo $this->Form->input('password', ['required' => true, 'autofocus' => true]); ?>
    
    </fieldset>
 	<?php echo $this->Form->button(__('Cambiar')); ?>
    <?php echo $this->Form->end(); ?>
</div>