<?php
/**
  * @var \App\View\AppView $this
  */
?>

<h1>CREAR ALUMNO </h1>

    <div class="row">
        <div class="col-md-6 col-md-offset-3" >
            <?php echo $this->Form->create('Alumno');?>
            <fieldset>
                <legend> <?php echo __('Nuevo alumno'); ?> </legend>
                <?php

                echo $this->Form->input('nombres');
                echo $this->Form->input('apellidos');
                echo $this->Form->input('grado');
                echo $this->Form->input('seccion');
                echo $this->Form->input('materias._ids', ['options' => $materias]);
                 echo $this->Form->input('user_id');
                
                ?>    
            </fieldset>
                 <?= $this->Form->button('Crear'); ?>
                 <?= $this->Form->end(); ?>
        </div>   
    </div>

