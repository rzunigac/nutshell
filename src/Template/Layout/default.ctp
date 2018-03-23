<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ?= //$this->Html->css('base.css') ? -->
    <!-- ?= //$this->Html->css('cake.css') ? -->
    
    <!-- Bootstrap -->
    <!-- Style -->
    <!-- link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" -->
    <link rel="stylesheet" href="https://bootswatch.com/4/spacelab/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" integrity="sha256-I/m6FhcACNYmRoqn1xUnizh6S7jOJsTq+aiJ6BtE2LE=" crossorigin="anonymous" />
    
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">Nutshell App</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownRecepciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Recepciones
			</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownRecepciones">
			  <? echo $this->Html->link('Recepciones',['controller' => 'recepciones', 'action' => 'index'],['class' => 'dropdown-item']);?>
			  <? echo $this->Html->link('Lotes',['controller' => 'lotes', 'action' => 'index'],['class' => 'dropdown-item']);?>
			  <? echo $this->Html->link('Control de Calidad',['controller' => 'control-de-calidad', 'action' => 'index'],['class' => 'dropdown-item']);?>
			  <? echo $this->Html->link('Ensacado',['controller' => 'ensacados', 'action' => 'index'],['class' => 'dropdown-item']);?>
			</div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPartido" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Partido
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownPartido">
			  <? echo $this->Html->link('Despacho a Partido',['controller' => 'despacho-a-partidos', 'action' => 'index'],['class' => 'dropdown-item']);?>
			  <? echo $this->Html->link('Recepción de Partido',['controller' => 'recepcion-partidos', 'action' => 'index'],['class' => 'dropdown-item']);?>
			</div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Packing</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link">Usuario: Rodrigo Zuñiga </a>
            </li>
            <li class="navbar-item">
                <? echo $this->Html->link('Salir',['controller' => 'usuarios', 'action' => 'logout'],['class' => 'nav-link']);?>
            </li>
        </ul>
      </div>
    </nav>
  </div>
    
    <?= $this->Flash->render() ?>
    
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
    
    <footer>
    </footer>
    
    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js" integrity="sha256-7Ls/OujunW6k7kudzvNDAt82EKc/TPTfyKxIE5YkBzg=" crossorigin="anonymous"></script>
	<script>
	//$(document).off('.datepicker.data-api');
	$('.calendario').datepicker({
		format:"dd-mm-yyyy",
		language: "es",
		autoclose: true,
		endDate: "0d"
	});
	</script>
</body>
</html>
