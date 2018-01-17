<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Materia[]|\Cake\Collection\CollectionInterface $materias
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
   <div class="modal fade" id="dialogModalEditMateria" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Editar</h3>
           </div>
           <div class="modal-body">
     <div class="contentWrapEditMateria">
     </div>
</div>
    </div>
  </div>
  </div>
  </div>
  

<div class="materias index large-9 medium-8  columns content col-md-10 col-md-offset-1">
   <div class="panel panel-success">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3">
            <h2 class="text-center pull-left" style="padding-left: 30px;"> <span class="glyphicon glyphicon-book"> </span> Materias </h2>
          </div>
          <div class="col-xs-9 col-sm-9 col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="col-xs-12 col-md-7">
                <label> Search </label>
             <form class="form-group" action="" method="post">
                  <div class="input-group">
                    <input type="text" class="form-control input-md" name="buscar-mat" placeholder="Materia">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-md btn-success"> <span class=" glyphicon glyphicon-search"></span></button>
                    </div>
                  </div>
                </form>
               </div>
              </div>
            </div>
             <div class=""><br>
           <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Nuevo materia', ['action' => 'add'], ['class' => 'btn btn-success', 'escape' => false]); ?>
           </div>
          </div>
        </div>

         <style type="text/css">
      tr:hover
        {
          background-color: #80ff80;
          transition: 0.5s;
        }
    </style>  
      
     <div class="table-responsive"> 
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th  class="text-center" scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th  class="text-center" scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th  class="text-center" scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th  class="text-center" scope="col"><?= $this->Paginator->sort('docente_id') ?></th>
                <th  class="text-center" scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materias as $materia): ?>
            <tr>
                <td class="text-center"><?= $this->Number->format($materia->id) ?></td>
                <td  class="text-center"><?= h($materia->nombre) ?></td>
                <td  class="text-center"><?= h($materia->estado) ?></td>
                <td  class="text-center"><?= $materia->has('docente') ? $this->Html->link($materia->docente->nombre, ['controller' => 'Docentes', 'action' => 'view', $materia->docente->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $materia->id], ['class' =>"btn btn-info" ]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $materia->id], ['class' =>"btn btn-warning", 'id' =>"overlay-edit-mate"  ]) ?>
                   
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
    $(document).on("click", "#overlay-edit-mate", function(event){ //(1)
  event.preventDefault();
  $('.contentWrapEditMateria').load($(this).attr("href")); //(2)
  $('#dialogModalEditMateria').modal('show'); //(3)
});
</script>
