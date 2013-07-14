<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap');
		echo $this->Html->script('jquery');
		echo $this->Html->script('bootstrap');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		
	?>
</head>
<body>
	<div class="navbar navbar-inverse ">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Facture</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">Client <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="/gestion/clients/show">Liste des clients</a></li>
                  <li><a href="/gestion/clients/add">Ajouter un client</a></li>
                  <li><a href="#">Modifier un client</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">Factures <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Liste des facture</a></li>
                  <li><a href="/gestion/factures/index">Ajouter une facture</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produits <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="/site/produits/">Liste des produits</a></li>
                  <li><a href="/site/produits/add">Ajouter un produit</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
    <?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
		<?php echo $this->element('sql_dump'); ?>
	</div>
	
<?php echo $this->fetch('script');?>
</body>

</html>
