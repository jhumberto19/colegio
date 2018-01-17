<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Alumno $alumno
  */
?>
<head>
    <?= $this->Html->css('perfil') ?>
</head>


 <?php foreach ($query as $alu): ?>
<?php if($current_user['id'] == $alu->user_id): ?>

<div class="container">
    <div class="row">
        <h2></h2>
       <div class="col-md-7">

<div class="panel panel-success">
  <div class="panel-heading"><h4 >Perfil del Alumno</h4></div>
  </div>
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                
                <input id="profile-image-upload" class="hidden" type="file">
<div style="color:#999;" >click here to change profile image</div>
                <!--Upload Image Js And Css-->
                    
                     
                     </div>
              
              <br>
              <!-- /input-group -->
            </div>
            </div>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;">Ver notas</h4></span>
              <span><p><?= $this->Html->link(__('notas'), ['controller' => 'users','action' => 'vernota', $alu->id], ['class' =>"btn btn-info" ]) ?></p></span>            
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
<div class="col-sm-5 col-xs-6 tital ">Nombres:</div><div class="col-sm-7"><?= h($alu->nombres); ?></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital ">Apellidos:</div><div class="col-sm-7"><?= h($alu->apellidos); ?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital ">Grado:</div><div class="col-sm-7"><?= h($alu->grado); ?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital ">Seccion:</div><div class="col-sm-7"><?= h($alu->seccion); ?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Estado:</div><div class="col-sm-7"><?= h($alu->estado); ?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>  
    </div> 
    </div>
</div>      
   </div>
</div>

 <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script>     
       


 <?php endif; ?>
 <?php if($current_user['id'] != $alu->user_id): ?>
<p>De click para volver a pagina de inicio <?=  $this->Html->link('volver', ['controller' => 'Users', 'action' => 'home'])  ?> </p>

 <?php endif; ?>


    <?php endforeach; ?>


 