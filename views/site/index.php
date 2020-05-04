<?php

/* @var $this yii\web\View */
$this->title = 'Inicio';
?>
<div class="site-index">
	<!-- ************************* Reanimación ************************* -->
	<?= $this->render("reanimacion") ?>
		
	<!-- ************************* Anestesia - Reanimación ************************* -->
	<?= $this->render("anestesia") ?>
	
	<!-- ************************* Estudios ************************* -->
	<?= $this->render("estudios") ?>
	
	<!-- ************************* Tratamiento ************************* -->
	<?= $this->render("tratamiento") ?>
	
	<!-- ************************* Estudio ************************* -->
	<?= $this->render("estudio2") ?>
	
	<!-- ************************* Diagnostico ************************* -->
	<?= $this->render("diagnostico") ?>	
	
	<!-- ************************* Diagnostico ************************* -->
	<?= $this->render("vigilancia") ?>	
	
	<!-- ************************* Manejo ************************* -->
	<?= $this->render("manejo") ?>
	
	
	
	
	
	<!-- ************************* Content Secction ************************* 
	<div class="page-header">
		<h1>Header 1</h1>
	</div>
	<button class="btn myButton" type="button">
		<span class="glyphicon glyphicon-chevron-right"></span>
		Button 1
	</button>
	<div class="collapse" id="collapseExample">
		<div class="well">
			<p>Content 1</p>
		</div>
	</div>
	<button class="btn myButton" type="button">
		<span class="glyphicon glyphicon-chevron-right"></span> 
		Button 2
	</button>
	<div class="collapse" id="collapseExample1">
		<div class="well">
			<p>Content 2</p>
			<p>hola mundo</p>
		</div>
	</div>-->
</div>
