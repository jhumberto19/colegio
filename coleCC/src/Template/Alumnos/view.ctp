<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Alumno $alumno
  */
?>

 <table class="table table-striped table-inverse" >
    <th>Materia</th>
     <th>1º Periodo</th>
     <th>2º Periodo</th>
      <th>3º Periodo</th>
      <th>Promedio</th>
      <th>asistencia</th>
      <th>Año</th>
      <th>Acciones</th>
        
          <?php foreach ($query as $re ):?>
     <tr> 
     <td><?= h($re->materia->nombre) ?></td>
            <td><?= $this->Number->format($re->nota1) ?></td>
            <td><?= $this->Number->format($re->nota2) ?></td>
            <td><?= $this->Number->format($re->nota3) ?></td>      
            <td><?= $this->Number->format($re->promedio) ?></td>
            <td><?= $this->Number->format($re->asistencia) ?></td>
            <td><?= $this->Number->format($re->year) ?></td>
            <td class="actions">
            <?= $this->Html->link(__('Editar'), ['controller' => 'Registros','action' => 'edit', $re->id]) ?>
            </td>
           
    <?php endforeach; ?> 
    
    </tr>
        </table>


