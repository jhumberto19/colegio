<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Materias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Docentes'), ['controller' => 'Docentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Docente'), ['controller' => 'Docentes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Registros'), ['controller' => 'Registros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Registro'), ['controller' => 'Registros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Alumnos'), ['controller' => 'Alumnos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumnos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materias form large-9 medium-8 columns content">
    <?= $this->Form->create('Materia') ?>
    <fieldset>
        <legend><?= __('Add Materia') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('docente_id', ['options' => $docentes]);
            //echo $this->Form->control('alumnos._ids', ['options' => $alumnos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
