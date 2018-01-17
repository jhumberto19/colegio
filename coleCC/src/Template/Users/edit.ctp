<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="row">
    <div class="col-md-5 col-md-offset-3" >
 <?php echo $this->Form->create($user,['novalidate']); ?>
    <fieldset>
        <legend><?php echo __('Crear usuario'); ?></legend>
        
        <?php echo $this->Form->input('username');?>
         <?php echo $this->Form->input('email'); ?>
        
            <?php echo $this->Form->input('role', array(
            'options' => array('student' => 'Student', 'admin' => 'Admin')
        ));
    ?>
    <?php   echo $this->Form->input('state', array(
            'options' => array('activo' => 'Activo', 'inactivo' => 'Inactivo')
        )); ?>
    <?= $this->Form->button('Editar' , array( 'class'=>"btn btn-success")) ?>
        <?= $this->Form->end() ?>
        </fieldset>
</div>
</div>
