<?php
/**
  * @var \App\View\AppView $this
  */
?>


<div class="row">
    <div class="col-md-6 col-md-offset-3">
    <?= $this->Form->create($materia,['novalidate']) ?>
    <fieldset>
        <legend><?= __('Agregar Materia') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->input('estado', array(
            'options' => array('activo' => 'Activo', 'inactivo' => 'Inactivo')
        ));
            echo $this->Form->control('docente_id', ['options' => $docentes]);
            //echo $this->Form->control('alumnos._ids', ['options' => $alumnos]);
        ?>
        <br>
         <?= $this->Form->button('crear' , array( 'class'=>"btn btn-success")) ?>
    <?= $this->Form->end() ?>
    </fieldset>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br>

