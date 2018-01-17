<?php
/**
  * @var \App\View\AppView $this
  */
?>


<div class="row">
    <div class="col-md-6 col-md-offset-3" >
     <?= $this->Form->create($alumno) ?>
     <fieldset>
        <legend><?= __('Editar alumno') ?></legend>
        <?php
            echo $this->Form->input('nombres');
            echo $this->Form->input('apellidos');
           echo $this->Form->input('grado',array(
            'options' => array('septimo' => 'Septimo', 'octavo' => 'Octavo', 'noveno' => 'Noveno')
        ));
                echo $this->Form->input('seccion',array(
            'options' => array('A' => 'A', 'B' => 'B', 'C' => 'C')
        ));
                  echo $this->Form->input('estado', array(
            'options' => array('activo' => 'Activo', 'inactivo' => 'Inactivo')
        ));
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('materias._ids', ['options' => $materias,'type' => 'select',
    'multiple' => 'checkbox',
    'label'    => 'Materias']);
        ?>
    </fieldset>
    <?= $this->Form->button('Editar', array( 'class'=>"btn btn-primary")) ?>
    <?= $this->Form->end() ?>
    </div>
</div>

