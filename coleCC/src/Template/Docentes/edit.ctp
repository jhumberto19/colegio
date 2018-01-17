<?php
/**
  * @var \App\View\AppView $this
  */
?>


<div class="row">
    <div class="col-md-6 col-md-offset-3">
     <?= $this->Form->create($docente) ?>
     <fieldset>
        <legend><?= __('Editar Docente') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('apellido');
            echo $this->Form->input('nip');
                     echo $this->Form->input('estado', array(
            'options' => array('activo' => 'Activo', 'inactivo' => 'Inactivo')
        ));
        ?>
    </fieldset>
    <br>
    <?= $this->Form->button('Editar' , array( 'class'=>"btn btn-primary")) ?>
    <?= $this->Form->end() ?>
    </div>
</div>

