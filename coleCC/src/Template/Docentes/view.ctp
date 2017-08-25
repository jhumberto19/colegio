<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Docente $docente
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Docente'), ['action' => 'edit', $docente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Docente'), ['action' => 'delete', $docente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $docente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Docentes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Docente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materias'), ['controller' => 'Materias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materia'), ['controller' => 'Materias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="docentes view large-9 medium-8 columns content">
    <h3><?= h($docente->nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($docente->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido') ?></th>
            <td><?= h($docente->apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dni') ?></th>
            <td><?= h($docente->dni) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($docente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($docente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($docente->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Materias') ?></h4>
        <?php if (!empty($docente->materias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Docente Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($docente->materias as $materias): ?>
            <tr>
                <td><?= h($materias->id) ?></td>
                <td><?= h($materias->nombre) ?></td>
                <td><?= h($materias->created) ?></td>
                <td><?= h($materias->modified) ?></td>
                <td><?= h($materias->docente_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Materias', 'action' => 'view', $materias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Materias', 'action' => 'edit', $materias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Materias', 'action' => 'delete', $materias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
