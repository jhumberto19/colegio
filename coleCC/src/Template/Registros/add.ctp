
 <div class="row">
    <div class="col-md-6 col-md-offset-3" >
    <?php echo $this->Form->create('Registro');?>
    <fieldset>
        <legend><?php echo __('Nuevo Registro'); ?></legend>
        <?php
            echo $this->Form->input('nota1');
            echo $this->Form->input('nota2');
            echo $this->Form->input('nota3');
            echo $this->Form->input('promedio');
            echo $this->Form->input('alumno_id', ['options' => $alumnos]);
            echo $this->Form->input('materia_id', ['options' => $materias]);
        ?>
    </fieldset>
    <?= $this->Form->button('Crear') ?>
    <?= $this->Form->end() ?>
</div>
</div>

