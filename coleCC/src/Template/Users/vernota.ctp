<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User $user
  */
?>

<div class="col-sm-12 col-md-12">
   <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3">
            <h2 class="text-center pull-left" style="padding-left: 30px;"> <span class="glyphicon glyphicon-file"> </span> Notas</h2>
          </div>
          </div>
        </div>
<div class="table-responsive">
    <table class="table table-hover table-bordered" >
    <tr style="background-color: #b6e1fc;">
  <th>Materia</th>
    <th>1º Periodo</th>
     <th>2º Periodo</th>
      <th>3º Periodo</th>
      <th>Promedio</th>
      <th>asistencia</th>
      <th>Año</th>
    </tr>
    
     <?php foreach ($query as $alu): ?>
<?php if($current_user['id'] == $alu->alumno->user_id): ?>
 
    
    <tr>
         <td><?= h($alu->materia->nombre) ?></td>
            <td><?= $this->Number->format($alu->nota1) ?></td>
            <td><?= $this->Number->format($alu->nota2) ?></td>
            <td><?= $this->Number->format($alu->nota3) ?></td>      
            <td><?= $this->Number->format($alu->promedio) ?></td>
            <td><?= $this->Number->format($alu->asistencia) ?></td>
            <td><?= $this->Number->format($alu->year) ?></td>
      
    </tr>
    
    <?php endif; ?>
 <?php if($current_user['id'] != $alu->alumno->user_id): ?>
<h1>ERROR<h1>
 <?php endif; ?>
    <?php endforeach; ?>
    
</table>
    </div>
   </div>
</div>

 