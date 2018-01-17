<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
  */
?>
<head>
  <?= $this->Html->css('estilo'); ?>
</head>
<div class="users index large-9 medium-8 col-md-9 col-md-offset-2">
<div class="panel panel-info">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3">
            <h2 class="text-center pull-left" style="padding-left: 30px;"> <span class="glyphicon glyphicon-user"> </span> Usuarios</h2>
          </div>
          <div class="col-xs-9 col-sm-9 col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="col-xs-12 col-md-7">
                <label> Buscar: </label>
             <form class="form-group" action="" method="post">
                  <div class="input-group">
                    <input type="text" class="form-control input-md" name="buscar-user" placeholder="Usuario">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-md btn-primary"> <span class=" glyphicon glyphicon-search"></span></button>
                    </div>
                  </div>
                </form>
               </div>
              </div>
            </div>
             <div><br>
           <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Nuevo usuario', ['action' => 'add'], ['class' => 'btn btn-primary', 'escape' => false]); ?>
           </div>
          </div>
        </div>

        <style type="text/css">
      tr:hover
        {
          background-color: #e6f2ff;
          transition: 0.5s;
        }
    </style>  
     <div class="table-responsive"> 
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->role) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <div class="paginator">
         <ul class="pagination">
                <?= $this->Paginator->prev('< Anterior') ?>
                <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
                <?= $this->Paginator->next('Siguiente >') ?>
            </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, viendo {{current}} archivo(s) de {{count}} total')]) ?></p>
    </div>
</div>
</div>
