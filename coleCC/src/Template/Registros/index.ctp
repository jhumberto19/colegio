<?php //debug($registros);
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Registro[]|\Cake\Collection\CollectionInterface $registros
  */
?>
<head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
 <?= $this->Html->css('navalum') ?>
</head>

<div class="row">
<div class="col-sm-12 col-md-2">
<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Busqueda Avanzada</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
 <div class="col-xs-12 col-md-12">
             <form class="form-group" action="Registros/year" method="post">
                  <div class="input-group">
                    <input type="text" class="form-control input-md" name="buscar-year" placeholder="Por año">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-md btn-danger"> <span class=" glyphicon glyphicon-search"></span></button>
                    </div>
                  </div>
                </form>
               </div>

   <li >        
  <form class="navbar-form" action="Alumnos/pormateria" method="post">   
   <div class="row">
    <div class="col-lg-11">
   <div class="input-group custom-search-form">      
      <select class="selectpicker" title="Grado y seccion" data-style="btn-danger" multiple data-max-options="2" id="grado" onchange="ShowSelected();" name="grado[]">
            <optgroup label="Grados" data-max-options="1">
              <option value="septimo">septimo</option>
              <option value="octavo">Octavo</option>
              <option value="noveno">Noveno</option>
            </optgroup>
            <optgroup label="Seccion" data-max-options="1">
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
            </optgroup>
       </select>
   <span class="input-group-btn">
              <button class="btn btn-danger" type="submit">
              <span class="glyphicon glyphicon-search"></span>
             </button>
             </span>
    </div>
    </div>
    </div>
  </form> 
        </li>
      </ul>
    </div>
  </div>
</nav>

</div>

<div class="col-sm-12 col-md-10">
<div class="panel panel-info">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3">
            <h2 class="text-center pull-left" style="padding-left: 30px;"> <span class="glyphicon glyphicon-list-alt"> </span> Registros</h2>
          </div>
          <div class="col-xs-9 col-sm-9 col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="col-xs-12 col-md-7">
                <label> Buscar: </label>
             <form class="form-group" action="" method="post">
                  <div class="input-group">
                    <input type="text" class="form-control input-md" name="buscar-reg" placeholder="Nombre alumno">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-md btn-warning"> <span class=" glyphicon glyphicon-search"></span></button>
                    </div>
                  </div>
                </form>
               </div>
              </div>
            </div>
    
           
          </div>
        </div>
     <div class="table-responsive"> 
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
     			<th scope="col"><?= $this->Paginator->sort('alumno_id') ?></th>
                <th class="text-center" scope="col"><?= $this->Paginator->sort('materia_id') ?></th>
                <th class="text-center" scope="col"><?= $this->Paginator->sort('1.º Periodo') ?></th>
                <th class="text-center" scope="col"><?= $this->Paginator->sort('2.º Periodo') ?></th>
                <th class="text-center" scope="col"><?= $this->Paginator->sort('3.º Periodo') ?></th>
                <th class="text-center" scope="col"><?= $this->Paginator->sort('promedio') ?></th>
                <th class="text-center" scope="col"><?= $this->Paginator->sort('asistencia') ?></th>
                <th class="text-center" scope="col"><?= $this->Paginator->sort('año') ?></th>
                <th class="text-center" scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registros as $registro): ?>
            <tr>
            	 <td class="text-center"><?= $registro->has('alumno') ? $this->Html->link($registro->alumno->nombres, ['controller' => 'Alumnos', 'action' => 'view', $registro->alumno->id]) : '' ?></td>
                <td class="text-center"><?= $registro->has('materia') ? $this->Html->link($registro->materia->nombre, ['controller' => 'Materias', 'action' => 'view', $registro->materia->id]) : '' ?></td>
                <td class="text-center"><?= $this->Number->format($registro->nota1) ?></td>
                <td class="text-center"><?= $this->Number->format($registro->nota2) ?></td>
                <td class="text-center"><?= $this->Number->format($registro->nota3) ?></td>
                <td class="text-center"><?= $this->Number->format($registro->promedio) ?></td>
                <td class="text-center"><?= $this->Number->format($registro->asistencia) ?></td>
               <td class="text-center"><?= $this->Number->format($registro->year) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $registro->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $registro->id]) ?>
                  
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
</div>