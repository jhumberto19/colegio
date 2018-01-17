
<div class="table-responsive"> 
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
     			<th scope="col">Alumno</th>
                <th class="text-center">Materia</th>
                <th class="text-center">1.º Periodo</th>
                <th class="text-center">2.º Periodo</th>
                <th class="text-center">3.º Periodo</th>
                <th class="text-center">Promedio</th>
                <th class="text-center">Asistencia</th>
                <th class="text-center">Año</th>
                <th class="text-center" scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registros as $registro): ?>
            <tr>
            	  <td><?= h($registro->alumno->nombres) ?></td>
                 <td><?= h($registro->materia->nombre) ?></td>
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