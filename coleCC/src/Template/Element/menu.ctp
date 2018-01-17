<?php
/**
  * @var \App\View\AppView $this
  */
?>
<head>
  
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

</head>
<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
             <?= $this->Html->link('<span class="glyphicon glyphicon-home"></span> Notas CCC', ['controller' => 'Users', 'action' => 'home'], ['class' => 'navbar-brand','escape' => false ]) ?>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            
                <ul class="nav navbar-nav mr-auto">

                     <?php if($current_user['role']== 'student'): ?>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Perfil<span class="caret"></span></a>

                        <ul class="dropdown-menu" role="menu">
                        <li>
                          <?= $this->Html->link('Perfil', array('controller' => 'Alumnos','action' =>'veralum', $current_user['id']));?>
                           </li>
                        </ul>
                    </li>
                    <?php endif; ?>



                  <?php if($current_user['role']== 'admin'): ?>
                       <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>  Administrar usuarios<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           <li>
                                <?=  $this->Html->link('Listar usuarios', ['controller' => 'Users', 'action' => 'index']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Crear usuario', ['controller' => 'Users', 'action' => 'add']) ?>
                            </li>
                            <li>
                                <?=  $this->Html->link('Renovar contraseña', ['controller' => 'Users', 'action' => 'password']) ?>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Administrar docentes<span class="caret"></span></a>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-book"></span>  Administrar materias<span class="caret"></span></a>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span>         Administrar Registros<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           <li>
                                <?=  $this->Html->link('Listar registros', ['controller' => 'Registros', 'action' => 'index']) ?>
                            </li>
                           
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-pencil"></span>Administrar alumnos<span class="caret"></span></a>

                        <ul class="dropdown-menu" role="menu">
                        
                           <li> 
                                <?=  $this->Html->link('Listar alumnos', ['controller' => 'Alumnos', 'action' => 'index']) ?>
                            </li>
                        </ul>
                    </li>
                     <?php endif; ?>
                </ul>
                <form class="navbar-form navbar-right">
          <?= $this->Html->link('<span class="glyphicon glyphicon-off"></span>', ['controller' => 'Users', 'action' => 'logout'],['class' =>"btn btn-success",'escape' => false]) ?>  
      </form>
        </div>
     </div>
</nav>