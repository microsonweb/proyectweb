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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<title>
			<?php echo $title_for_layout; ?>
		</title>
		
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<?php
		
		echo $this->Html->charset('UTF-8');
		//echo $this->Html->meta('icon');
		echo $this->Html->meta('favicon.ico','..//favicon.icon',array('type' => 'icon'));
		
		

		
		echo $this->Html->css('style');
		echo $this->Html->script(array('jquery-1.7.1.min.js', 'cufon-yui.js', 'Bebas_400.font.js','cufon-replace.js','script.js','html5.js'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		?>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<header>
					<div class="main">
						<div class="row-1">
							<h1>
								<a href="index.html">Fortuna</a>
							</h1>
							
							<nav id="menu">
								<ul class="sf-menu">
									<li id="home"><a href="home">Home</a>
										<ul>
											<li><a href="">Acerca de Nostros</a></li>
											<li><a href="">Nuestro Equipo</a></li>
											<li><a href="">Asistencia Tecnica</a></li>
											<li><a href="">&Uacute;ltimas Noticias</a></li>
										</ul>
									</li>
									<li id="servicios"><a href="servicios">Servicios</a></li>
									<li><a href="">Productos</a></li>
									<li id="clientes"><a href="clientes">Clientes</a></li>
									<li><a href="">Noticias</a></li>
									<li id="contactenos"><a href="contactenos">Contáctenos</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
					</div>
					<div class="right">
								<h1>
								<a href="index.html">Fortuna</a>
							</h1>
							</div>
				</header>
			</div>
			<!--	<div id="layout">
			<div id="menu">
			<?php echo $this->element('menu'); ?>
			</div>-->
			<div id="content">
				
				<meta charset="UTF-8">
				
				<?php echo $this->Session->flash(); ?>
					
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>

		<div class="main">
			<footer>
				<div class="wrapper margin-bot">
					<div class="logo-1 fleft">
						<a href="home0">Servicio Técnico</a>
					</div>
					<div class="box-form fleft">
						<div class="wrapper">
							<span class="text-form">Reciba  actualizaciones de nuestros servicios</span>
							<form id="form-bot" method="post" enctype="multipart/form-data">
								<fieldset>
									<div class="form-bot">
										<input name="name" type="text" /> <a
										onClick="document.getElementById('form-bot').submit()">submit</a>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="container_16">
					<div class="wrapper">
						<article class="grid_4">
							<dl>
								<dd>Puerto Rico 557,</dd>
								<dd>2154 Capitán Bermudez - Santa Fe</dd>
								<dd>Telefono:&nbsp;&nbsp;+54 0341 4788372</dd>
								<dd>Celulares:+54 0341 4687076 / 4687055 </dd>
								<dd>Flota:&nbsp;606*3814 / 3812 </dd>
								<dd>
									E-mail: <a class="link" href="more.html">contacto@fortunasertecvial.com</a>
								</dd>
							</dl>

						</article>
						
						<article class="grid_4">
							<ul class="list-2">
								<li><a href="home">Home</a></li>
								<li><a href="">Acerca de Nosotros</a></li>
								<li><a href="">Nuestro Equipo</a></li>
								<li><a href="servicios">Asistencia Tecnica &amp; Press</a></li>
								<li><a href="contactenos">Contactanos</a></li>
							</ul>
						</article>
						<article class="grid_4">
							<ul class="list-2">
								<li><a href="servicios">Servicios</a></li>
								<li><a href="">Productos</a></li>
								<li><a href="clientes">Clientes</a></li>
								<li><a href="">Noticias</a></li>
									
							</ul>
						</article>
						<article class="grid_4">
							<ul class="list-2">
								<li><a href="">Sign Up</a></li>
								<li><a href="">Forums</a></li>
								<li><a href="">Affiliate Program</a></li>
								<li><a href="">FAQ</a></li>
							</ul>
						</article>
					</div>
				</div>
											<center><div class="text-bot">
								&copy; 2012<span class="line">|&nbsp;Fortuna Servicio Tecnico Vial</span> <a href="index-6.html">Privacy
									Policy</a><br>
								<!-- {%FOOTER_LINK} -->
							</div></center>
			</footer>
		</div>	
		
		</div>
		<?php //echo $this->element('sql_dump'); ?>
	</body>
	
	
</html>

<script>

/*$(document).ready(function(){
//Your code goes here.
$('.sf-menu li').click(function(){
    $('.sf-menu li').removeClass('current');
    $(this).addClass('current');
	
//Cambia el stilo de li seleccionado con la funcion clik
//Example
$('.box li').removeClass('active2');
$(this).addClass('active2');	
    
});


});*/
	
</script>
