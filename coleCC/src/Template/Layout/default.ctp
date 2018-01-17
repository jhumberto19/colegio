<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'ColegioCC';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>


<?= $this->Html->script('https://code.jquery.com/ui/1.12.1/jquery-ui.js') ?> 
<?= $this->Html->css('https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css') ?>
<?= $this->Html->script('jquery-2.2.4.min'); ?>
 <?= $this->Html->script('bootstrap.min'); ?>
    <?= $this->Html->css('bootstrap.min'); ?>
    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
           
</head>
<body>
    
     <?php if(isset($current_user)): ?>
    <?php echo $this->element("menu"); ?><br>
    <?php endif; ?>
    

   
    <div class="container-fluid">
         <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
<?php echo $this->element("navegacion"); ?>
    </footer>
</body>
</html>
