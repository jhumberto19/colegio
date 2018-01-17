<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User $user
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Alumnos'), ['controller' => 'Alumnos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumnos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->username) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Passkey') ?></th>
            <td><?= h($user->passkey) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($user->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timeout') ?></th>
            <td><?= h($user->timeout) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Alumnos') ?></h4>
        <?php if (!empty($user->alumnos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombres') ?></th>
                <th scope="col"><?= __('Apellidos') ?></th>
                <th scope="col"><?= __('Grado') ?></th>
                <th scope="col"><?= __('Seccion') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->alumnos as $alumnos): ?>
            <tr>
                <td><?= h($alumnos->id) ?></td>
                <td><?= h($alumnos->nombres) ?></td>
                <td><?= h($alumnos->apellidos) ?></td>
                <td><?= h($alumnos->grado) ?></td>
                <td><?= h($alumnos->seccion) ?></td>
                <td><?= h($alumnos->estado) ?></td>
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
