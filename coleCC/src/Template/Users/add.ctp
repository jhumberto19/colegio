<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Alumnos'), ['controller' => 'Alumnos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumnos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
 <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        
        
            <?php echo $this->Form->input('username');?>
      
       
        
        <?php echo $this->Form->input('password');?>
        
        
            <?php echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'student' => 'Student')
        ));
    ?>
        </fieldset>
         <?= $this->Form->button('Crear') ?>
        <?= $this->Form->end() ?>

</div>
