<?php
/**
  * @var \App\View\AppView $this
  */
?>



    <div class="row">
        <div class="bg-success col-md-6 col-md-offset-3">
            <?php echo $this->Form->create($alumno,['novalidate']);?>
            <fieldset>
                <legend><?php echo __('Nuevo alumno'); ?> </legend>
                <?php
                echo $this->Form->input('user_id');
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
                echo $this->Form->input('materias._ids', ['options' => $materias,'class' => 'checkbox checkbox-info','type' => 'select',
    'multiple' => 'checkbox',
    'label'    => 'Materias']);
                 
                ?>  

            </fieldset>
                 <?= $this->Form->button('Crear', array( 'class'=>"btn btn-success")); ?>
                 <?= $this->Form->end(); ?>
        </div>   
    </div><br><br>

