<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Materia $materia
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Materia'), ['action' => 'edit', $materia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Materia'), ['action' => 'delete', $materia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Materias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Docentes'), ['controller' => 'Docentes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Docente'), ['controller' => 'Docentes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Registros'), ['controller' => 'Registros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Registro'), ['controller' => 'Registros', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Alumnos'), ['controller' => 'Alumnos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumnos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="materias view large-9 medium-8 columns content">
    <h3><?= h($materia->nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($materia->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Docente') ?></th>
            <td><?= $materia->has('docente') ? $this->Html->link($materia->docente->id, ['controller' => 'Docentes', 'action' => 'view', $materia->docente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($materia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($materia->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($materia->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Registros') ?></h4>
        <?php if (!empty($materia->registros)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nota1') ?></th>
                <th scope="col"><?= __('Nota2') ?></th>
                <th scope="col"><?= __('Nota3') ?></th>
                <th scope="col"><?= __('Promedio') ?></th>
                <th scope="col"><?= __('Alumno Id') ?></th>
                <th scope="col"><?= __('Materia Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($materia->registros as $registros): ?>
            <tr>
                <td><?= h($registros->id) ?></td>
                <td><?= h($registros->nota1) ?></td>
                <td><?= h($registros->nota2) ?></td>
                <td><?= h($registros->nota3) ?></td>
                <td><?= h($registros->promedio) ?></td>
                <td><?= h($registros->alumno_id) ?></td>
                <td><?= h($registros->materia_id) ?></td>
                <td><?= h($registros->created) ?></td>
                <td><?= h($registros->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Registros', 'action' => 'view', $registros->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Registros', 'action' => 'edit', $registros->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Registros', 'action' => 'delete', $registros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registros->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Alumnos') ?></h4>
        <?php if (!empty($materia->alumnos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombres') ?></th>
                <th scope="col"><?= __('Apellidos') ?></th>
                <th scope="col"><?= __('Grado') ?></th>
                <th scope="col"><?= __('Seccion') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($materia->alumnos as $alumnos): ?>
            <tr>
                <td><?= h($alumnos->id) ?></td>
                <td><?= h($alumnos->nombres) ?></td>
                <td><?= h($alumnos->apellidos) ?></td>
                <td><?= h($alumnos->grado) ?></td>
                <td><?= h($alumnos->seccion) ?></td>
                <td><?= h($alumnos->created) ?></td>
                <td><?= h($alumnos->modified) ?></td>
                <td><?= h($alumnos->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Alumnos', 'action' => 'view', $alumnos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Alumnos', 'action' => 'edit', $alumnos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Alumnos', 'action' => 'delete', $alumnos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
