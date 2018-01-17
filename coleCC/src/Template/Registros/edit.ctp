<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="row">
<div class="col-md-6 col-md-offset-3">
    <?= $this->Form->create($registro) ?>
    <fieldset>
        <legend><?= __('Editar registro') ?></legend>
        <?php
            echo $this->Form->input('nota1', array('class' => 'form-control', 'label' => 'Nota primer periodo'));
            echo $this->Form->input('nota2', array('class' => 'form-control', 'label' => 'Nota segundo periodo'));
            echo $this->Form->input('nota3', array('class' => 'form-control', 'label' => 'Nota tercer periodo'));
            echo $this->Form->input('promedio');
            echo $this->Form->input('asistencia');
            echo $this->Form->input('estado');
             echo $this->Form->input('year',array(
            'options' => array('2018' => '2018', '2019' => '2019', '2020' => '2020', '2021' => '2021', '2022' => '2022'), 'label' => 'Año'
        ));
           /** echo $this->Form->input('alumno_id', ['options' => $alumnos]);
            echo $this->Form->input('materia_id', ['options' => $materias]); */
        ?>
        <?= $this->Form->button('Crear', array( 'class'=>"btn btn-success")) ?><br>
    <?= $this->Form->end() ?>
    </fieldset><br><br>
    </div>
</div>
