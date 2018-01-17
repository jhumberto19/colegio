<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Alumno[]|\Cake\Collection\CollectionInterface $alumnos
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
   <div class="modal fade" id="dialogModalEditAlumno" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Editar</h3>
           </div>
           <div class="modal-body">
     <div class="contentWrapEditAlumno">
     </div>
</div>
    </div>
  </div>
  </div>
  </div>

<script type="text/javascript">
  
function htmlbodyHeightUpdate(){
    var height3 = $( window ).height()
    var height1 = $('.nav').height()+50
    height2 = $('.main').height()
    if(height2 > height3){
      $('html').height(Math.max(height1,height3,height2)+10);
      $('body').height(Math.max(height1,height3,height2)+10);
    }
    else
    {
      $('html').height(Math.max(height1,height3,height2));
      $('body').height(Math.max(height1,height3,height2));
    }
    
  }
  $(document).ready(function () {
    htmlbodyHeightUpdate()
    $( window ).resize(function() {
      htmlbodyHeightUpdate()
    });
    $( window ).scroll(function() {
      height2 = $('.main').height()
        htmlbodyHeightUpdate()
    });
  });

</script>
<style type="text/css">
  body,html{
    height: 100%;
  }

  /* remove outer padding */
  .main .row{
    padding: 0px;
    margin: 0px;

  }

  /*Remove rounded coners*/

  nav.sidebar.navbar {
    border-radius: 0px;
    
    
  }

  nav.sidebar, .main{
    -webkit-transition: margin 200ms ease-out;
      -moz-transition: margin 200ms ease-out;
      -o-transition: margin 200ms ease-out;
      transition: margin 200ms ease-out;
  }

  /* Add gap to nav and right windows.*/
  .main{
    padding: 10px 10px 0 10px;
  }

  /* .....NavBar: Icon only with coloring/layout.....*/

  /*small/medium side display*/
  @media (min-width: 768px) {

    /*Allow main to be next to Nav*/
    .main{
      position: absolute;
      width: calc(100% - 40px); /*keeps 100% minus nav size*/
      margin-left: 40px;
      float: right;
    }

    /*lets nav bar to be showed on mouseover*/
    nav.sidebar:hover + .main{
      margin-left: 200px;
    }

    /*Center Brand*/
    nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
      margin-left: 0px;
    }
    /*Center Brand*/
    nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
      text-align: center;
      width: 100%;
      margin-left: 0px;
    }

    /*Center Icons*/
    nav.sidebar a{
      padding-right: 13px;
    }

    /*adds border top to first nav box */
    nav.sidebar .navbar-nav > li:first-child{
      border-top: 1px #e5e5e5 solid;
    }

    /*adds border to bottom nav boxes*/
    nav.sidebar .navbar-nav > li{
      border-bottom: 1px #e5e5e5 solid;
    }

    /* Colors/style dropdown box*/
    nav.sidebar .navbar-nav .open .dropdown-menu {
      position: static;
      float: none;
      width: auto;
      margin-top: 0;
      background-color: transparent;
      border: 0;
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    /*allows nav box to use 100% width*/
    nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
      padding: 0 0px 0 0px;
    }

    /*colors dropdown box text */
    .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
      color: #777;
    }

    /*gives sidebar width/height*/
 nav.sidebar{
      width: 215px;
      height: 100%;
      margin-left: -160px;
      float: left;
      margin-bottom: 0px;
    }  

    /*give sidebar 100% width;*/
    nav.sidebar li {
      width: 100%;
    }

    /* Move nav to full on mouse over*/
    nav.sidebar:hover{
      margin-left: 0px;
    }
    /*for hiden things when navbar hidden*/
     .forAnimate{
      opacity: 0;
    }
  }

  /* .....NavBar: Fully showing nav bar..... */

  @media (min-width: 1330px) {

    /*Allow main to be next to Nav*/
    .main{
      width: calc(100% - 200px); /*keeps 100% minus nav size*/
      margin-left: 200px;
    }

    /*Show all nav*/
    nav.sidebar{
      margin-left: 0px;
      float: left;
    }
    /*Show hidden items on nav*/
    nav.sidebar .forAnimate{
      opacity: 1;
    }
  }

  nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
    color: #CCC;
    background-color: transparent;
  }

  nav:hover .forAnimate{
    opacity: 1;
  }
  section{
    padding-left: 15px;
  }
</style>
      <!-- AQUUIIII -->

<div class="row">

<!--aquiiiiiiiiii -->
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
        <li >
          <form class="navbar-form" action="Alumnos/porestado" method="post">   
   <div class="row">
    <div class="col-lg-11">
   <div class="input-group custom-search-form">      
      <select class="selectpicker" title="Por estado" data-style="btn-danger" multiple data-max-options="1" id="grado" onchange="ShowSelected();" name="buscar-est[]">

            <optgroup label="Grados" data-max-options="1">
              <option value="activo">Activo</option>
              <option value="inactivo">Inactivo</option>
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
        <li >
          
  <form class="navbar-form" action="Alumnos/porgrado" method="post">   
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
<!-- Content Here -->
<div class="col-sm-12 col-md-10">
   <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3">
            <h2 class="text-center pull-left" style="padding-left: 30px;"> <span class="glyphicon glyphicon-pencil"> </span> Alumnos </h2>
          </div>
          <div class="col-xs-9 col-sm-9 col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="col-xs-12 col-md-7">
                <label> Nombre: </label>
             <form class="form-group" action="" method="post">
                  <div class="input-group">
                    <input type="text" class="form-control input-md" name="buscar-nom" placeholder="Alumnos">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-md btn-info"> <span class=" glyphicon glyphicon-search"></span></button>
                    </div>
                  </div>
                </form>
               </div>
              </div>
            </div>
             <div><br>
           <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Nuevo alumno', ['controller' => 'Users','action' => 'add'], ['class' => 'btn btn-info', 'escape' => false]); ?>
           </div>
          </div>
        </div>
    
    <style type="text/css">
      tr:hover
        {
          background-color: #b6e1fc;
          transition: 0.5s;
        }
    </style>  
    
   <div class="table-responsive"> 
    <table class= "table  table-hover" >
        <thead >
            <tr>
                <th class="text-center" scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th class="text-center" scope="col"><?= $this->Paginator->sort('nombres') ?></th>
                <th class="text-center" scope="col"><?= $this->Paginator->sort('apellidos') ?></th>
                <th class="text-center" scope="col"><?= $this->Paginator->sort('grado') ?></th>
                <th class="text-center" scope="col"><?= $this->Paginator->sort('seccion') ?></th>
                <th class="text-center" scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th class="text-center" scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumnos as $alumno): ?>
            <tr>
                <td class="text-center"><?= $this->Number->format($alumno->id) ?></td>
                <td class="text-center"><?= h($alumno->nombres) ?></td>
                <td class="text-center"><?= h($alumno->apellidos) ?></td>
                <td class="text-center"><?= h($alumno->grado) ?></td>
                <td class="text-center"><?= h($alumno->seccion) ?></td>
                <td class="text-center"><?= h($alumno->estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver Registros'), ['action' => 'view', $alumno->id], ['class' =>"btn btn-info" ]) ?>
                     <?= $this->Html->link(__('Agregar Registro'), ['controller' => 'Registros','action' => 'add', $alumno->id], ['class' =>"btn btn-success" ]) ?>
                      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $alumno->id], ['class' =>"btn btn-warning", 'id' =>"overlay-edit-alum"]) ?>
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
       
    </div>

</div>
 <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, viendo {{current}} archivo(s) de {{count}} total')]) ?></p>
</div>

</div>




<script type="text/javascript">
    $(document).on("click", "#overlay-edit-alum", function(event){ //(1)
  event.preventDefault();
  $('.contentWrapEditAlumno').load($(this).attr("href")); //(2)
  $('#dialogModalEditAlumno').modal('show'); //(3)
});
</script>




