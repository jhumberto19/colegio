<?= $this->Html->css('login') ?>

<div class="loginmodal-container">
    <div class="col-md-6">
    
<!--	<h1>Login to Your Account</h1><br>-->
  <?= $this->Flash->render('auth') ?>
<?php echo $this->Form->create('User');?>
            <fieldset>
                <legend> <?php echo __('Bienvenido'); ?> </legend>
                <?php

                echo $this->Form->input('username',array('class' => 'loginmodal-container', 'label' => 'Usuario'));
                echo $this->Form->input('password',array('class' => 'loginmodal-container', 'label' => 'contraseña'));
                ?>
                
                
            </fieldset>
            <p>
                   <?= $this->Form->button('Acceder', ['class' => 'btn btn-lg btn-success btn-block']) ?>
                
            </p>
					
	  <div class="login-help">
	<a href="#">Register</a> - <a href="#">Forgot Password</a>
	</div>
</div>
</div>
			
		      