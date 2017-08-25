<?php
/**
  * @var \App\View\AppView $this
  */
?>

<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
             <?= $this->Html->link('Notas CCC', ['controller' => 'Users', 'action' => 'home'], ['class' => 'navbar-brand' ]) ?>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            
                <ul class="nav navbar-nav mr-auto">

                     <?php if($current_user['role']== 'student'): ?>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Perfil<span class="caret"></span></a>

                        <ul class="dropdown-menu" role="menu">
                        
                        </ul>
                    </li>
                    <?php endif; ?>


                  <?php if($current_user['role']== 'admin'): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Alumnos<span class="caret"></span></a>

                        <ul class="dropdown-menu" role="menu">
                        
                           <li> 
                                <?=  $this->Html->link('Listar alumnos', ['controller' => 'Alumnos', 'action' => 'index']) ?>
                            </li>
                            
                            <li>
                                <?=  $this->Html->link('Crear alumno', ['controller' => 'Alumnos', 'action' => 'add']) ?>
                            </li>

                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Docentes<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           <li>
                                <?=  $this->Html->link('Listar docentes', ['controller' => 'Docentes', 'action' => 'index']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Crear docentes', ['controller' => 'Docentes', 'action' => 'add']) ?>
                            </li>
                        </ul>
                    </li>
                    
                
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Materias<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           <li>
                                <?=  $this->Html->link('Listar materias', ['controller' => 'Materias', 'action' => 'index']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Crear materia', ['controller' => 'Materias', 'action' => 'add']) ?>
                            </li>
                        </ul>
                    </li>
                    
              
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Registros<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           <li>
                                <?=  $this->Html->link('Listar registros', ['controller' => 'Registros', 'action' => 'index']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Crear registro', ['controller' => 'Registros', 'action' => 'add']) ?>
                            </li>
                        </ul>
                    </li>
                     <?php endif; ?>
                      
                </ul>

              <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
         <button type="submit" class="btn btn-default">  <?= $this->Html->link('Salir', ['controller' => 'Users', 'action' => 'logout']) ?> </button>
       
      </form>
        </div>
     </div>
</nav>