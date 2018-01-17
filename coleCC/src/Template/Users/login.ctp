<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<?= $this->Html->css('login1') ?>
 
<div class="container">
<?= $this->Flash->render('auth') ?>
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-3">
        <div id="iosBlurBg">
          <div id="whiteBg"></div>
        </div>
        <div id="bottomEnter"></div>
        <div id="bottomBlurBg"></div>
        <!-- Login Form -->
        <div class="loginForm">
          <div class="title">
            <p>LOG EN<br><span>EL SISTEMA</span></p>
            <hr>
            <hr class="short">
          </div>
         <?php echo $this->Form->create('Users');?>
            <div class="col-3">
          <?php echo $this->Form->input('username',array( 'class'=>"effect-2", 'placeholder'=>"Usuario...",'label'=> ''));?>
                  <span class="focus-border"></span>

                  <?php echo $this->Form->input('password',array('class' =>"effect-2",'type' =>"password", 'placeholder'=>"Password...",'label'=> ''));?> 
                  <span class="focus-border"></span>
              </div>
              <div class="forget">
                <button class="btn btn-default btn-sm">FORGOT PASSWORD?</button>
              </div>
        </div>
        
          <div class="enterButton">
            <i class="fa fa-lock fa-2x text-white"></i><br>
            <span class="enterText text-white"><?= $this->Form->button('Acceder') ?></span>
            <?= $this->Form->end() ?>
          </div>
    </div>
  </div>
</div>