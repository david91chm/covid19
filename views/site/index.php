<?php

/* @var $this yii\web\View */
$this->title = 'Inicio';
?>
<div class="site-index">
	<!-- ************************* Reanimación ************************* -->
	<?= $this->render("reanimacion") ?>
		
	<!-- ************************* Anestesia - Reanimación ************************* -->
	<?= $this->render("anestesia") ?>
	
	<!-- ************************* Ventilación ************************* -->
	<?= $this->render("ventilacion") ?>
	
	<!-- ************************* Decúbito ventral ************************* -->
	<?= $this->render("ventral") ?>
	
	<!-- ************************* Infectología ************************* -->
	<?= $this->render("infectologia") ?>
	
	<!-- ************************* Clasificación ************************* -->
	<?= $this->render("clasificacion") ?>
	
	<!-- ************************* En la oficina ************************* -->
	<?= $this->render("oficina") ?>
	
	<!-- ************************* Documentos ************************* -->
	<?= $this->render("documentos") ?>
	
	<!-- ************************* Bibliografia ************************* -->
	<?= $this->render("bibliografia") ?>
	
	<!-- ************************* Content Secction ************************* -->
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
	</div>
</div>
