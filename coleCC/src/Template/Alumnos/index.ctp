<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Alumno[]|\Cake\Collection\CollectionInterface $alumnos
  */
?>

<div class="alumnos index large-9 medium-8 columns content">
    <h3><?= __('Alumnos') ?></h3>

    <div class="col-md-12">
    <table class= "table table-inverse">
        <thead >
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombres') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellidos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumnos as $alumno): ?>
            <tr>
                <td><?= $this->Number->format($alumno->id) ?></td>
                <td><?= h($alumno->nombres) ?></td>
                <td><?= h($alumno->apellidos) ?></td>
                <td><?= h($alumno->grado) ?></td>
                <td><?= h($alumno->seccion) ?></td>
                <td><?= h($alumno->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $alumno->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alumno->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alumno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumno->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
</div>