<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="row">
<div class="col-md-6 col-md-offset-3" >
    <?= $this->Form->create($materia) ?>
    <fieldset>
        <legend><?= __('Editar Materia') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->input('estado', array(
            'options' => array('activo' => 'Activo', 'inactivo' => 'Inactivo')
        ));
            echo $this->Form->control('docente_id', ['options' => $docentes]);
            
        ?>
    </fieldset>
    <?= $this->Form->button('Editar' , array( 'class'=>"btn btn-primary")) ?>
    <?= $this->Form->end() ?>
    </div>
</div>
