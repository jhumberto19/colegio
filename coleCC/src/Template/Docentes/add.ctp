<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
     <?= $this->Form->create($docente, ['novalidate']) ?>
     <fieldset>
        <legend><?php  echo __('Crear Docente'); ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('apellido');
            echo $this->Form->input('nip');
                     echo $this->Form->input('estado', array(
            'options' => array('activo' => 'Activo', 'inactivo' => 'Inactivo')
        ));
            echo $this->Form->button('crear' ,  array( 'class'=>"btn btn-primary"));
            echo $this->Form->end();
        ?>
    </fieldset>
    </div>
</div>
  <br><br><br><br><br><br><br><br>
           


    
