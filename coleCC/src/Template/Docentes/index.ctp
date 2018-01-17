<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Docente[]|\Cake\Collection\CollectionInterface $docentes
  */
?>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

</head>

  <div class="container">
   <div class="modal fade" id="dialogModalEditUsers" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Editar</h3>
           </div>
           <div class="modal-body">
     <div class="contentWrapEditUsers">
     </div>
</div>
    </div>
  </div>
  </div>
  </div>
        
<div class="docentes index large-8 medium-8 col-md-9 col-md-offset-2">
   <div class="panel panel-danger">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3">
            <h2 class="text-center pull-left" style="padding-left: 30px;"> <span class="glyphicon glyphicon-user"> </span> Docentes</h2>
          </div>
          <div class="col-xs-9 col-sm-9 col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="col-xs-12 col-md-7">
                <label> Search </label>
             <form class="form-group" action="" method="post">
                  <div class="input-group">
                    <input type="text" class="form-control input-md" name="buscar-doc" placeholder="Docente">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-md btn-danger"> <span class=" glyphicon glyphicon-search"></span></button>
                    </div>
                  </div>
                </form>
               </div>
              </div>
            </div>
             <div><br>
           <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Nuevo docente', ['action' => 'add'], ['class' => 'btn btn-danger', 'escape' => false]); ?>
           </div>
          </div>
        </div>

        <style type="text/css">
      tr:hover
        {
          background-color: #ff9999;
          transition: 0.5s;
        }
    </style>  
     <div class="table-responsive"> 
         <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nip') ?></th>
                 <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($docentes as $docente): ?>
            <tr>
                <td><?= $this->Number->format($docente->id) ?></td>
                <td><?= h($docente->nombre) ?></td>
                <td><?= h($docente->apellido) ?></td>
                <td><?= h($docente->nip) ?></td>
                 <td><?= h($docente->estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $docente->id], ['class' =>"btn btn-info" ]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $docente->id], ['class' =>"btn btn-warning", 'id' =>"overlay-edit-doce"]) ?> 
                   
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

<script type="text/javascript">
    $(document).on("click", "#overlay-add-doce", function(event){ //(1)
  event.preventDefault();
  $('.contentWrapAddUsers').load($(this).attr("Docentes/add.ctp")); //(2)
   $('#dialogModalAddUsers').modal('show'); //(3)
});
   
</script>

<script type="text/javascript">
    $(document).on("click", "#overlay-edit-doce", function(event){ //(1)
  event.preventDefault();
  $('.contentWrapEditUsers').load($(this).attr('href')); //(2)
  $('#dialogModalEditUsers').modal('show'); //(3)
});
</script>




