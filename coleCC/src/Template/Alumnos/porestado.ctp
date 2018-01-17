<div class="porestado index large-12 medium-8 columns content">
   
    <div class="col-md-8 col-md-offset-2"">
   <div class="table-responsive"> 
    <table class= "table  table-hover table-bordered" >
        <thead >
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Grado</th>
                <th scope="col">Seccion</th>
                <th scope="col">Estado</th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
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
                <td><?= h($alumno->estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $alumno->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $alumno->id]) ?>
                    
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
   </div> 
</div>
</div>