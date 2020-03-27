<?php
use yii\helpers\Html;
?>
<style>
	.b1{
		white-space: normal !important;
	}
</style>
<div class="page-header">
	<h1>Cuidados paliativos</h1>
</div>

<button class="btn myButton" type="button">
	<span class="glyphicon glyphicon-chevron-right"></span> Signo de dificultad respiratoria asfixia
</button>
<div class="collapse" id="collapseExample">
	<div class="well">
		<h3>PACIENTE DE COMUNICACIÓN</h3>

		<p>Sensación de asfixia con ansiedad / agitación masiva y sensación de muerte inminente</p>

		<h3>PACIENTE SIN COMUNICACIÓN</h3>

		<p>30 / min, agitación, uso de los músculos respiratorios accesorios
			(elevación de la clavícula durante la inspiración), respiración
			paradójica (depresión abdominal durante la inspiración), final de
			vencimientos, facies de miedo.</p>

		<p>Fuente: SFAP</p>
	</div>
</div>

<button class="b1 btn myButton" type="button">
	<span class="glyphicon glyphicon-chevron-right"></span> Recomendaciones	del personal de enfermería
</button>
<div class="collapse" id="collapseExample">
	<div class="well">
		<ul>
			<li>Llame a otro cuidador si es posible si el cuidador está solo (no
				entra a la habitación en ausencia pero puede obtener los
				tratamientos y equipos necesarios)</li>
			<li>Mantén la calma o llega tranquilo (piénsalo antes de entrar en la
				habitación).</li>
			<li>Notifique al médico si es posible.</li>
			<li>Simplemente explique la situación al paciente, lo que estamos
				haciendo, lo que vamos a hacer.</li>
			<li>Inyectar el protocolo de sedación planificado</li>
			<li>Ventile la habitación, abra la ventana, si hay un ventilador
				disponible, enciéndalo (aire frío en la cara).</li>
			<li>Garantizar la comodidad de la ropa del paciente.</li>
			<li>Tener una luz no agresiva.</li>
			<li>Coloque a la persona en una posición sentada o media sentada en
				la cama (levante la cabeza).</li>
			<li>Permanecer en un ambiente bastante silencioso, sin agitación.
				Música suave posible.</li>
		</ul>
	</div>
</div>

<button class="btn myButton" type="button">
	<span class="glyphicon glyphicon-chevron-right"></span> Terapéutica: bomba de jeringa IV
</button>
<div class="collapse" id="collapseExample">
	<div class="well">
		<p>
		<?= Html::img(Yii::$app->request->baseUrl."/images/img01.png", ["style"=>""]) ?>
		</p>
	</div>
</div>

<button class="btn myButton" type="button">
	<span class="glyphicon glyphicon-chevron-right"></span> Terapéutica: bomba de jeringa SC
</button>
<div class="collapse" id="collapseExample">
	<div class="well">
		<p>
		<?= Html::img(Yii::$app->request->baseUrl."/images/img02.png", ["style"=>""]) ?>
		</p>
	</div>
</div>

<button class="btn myButton" type="button">
	<span class="glyphicon glyphicon-chevron-right"></span> Terapéutico: IV
	sin bomba de jeringa
</button>
<div class="collapse" id="collapseExample">
	<div class="well">
		<p>
		<?= Html::img(Yii::$app->request->baseUrl."/images/img03.png", ["style"=>""]) ?>
		</p>
	</div>
</div>

<button class="btn myButton" type="button">
	<span class="glyphicon glyphicon-chevron-right"></span> Terapéutico: SC	sin bomba de jeringa
</button>
<div class="collapse" id="collapseExample">
	<div class="well">
		<p>
		<?= Html::img(Yii::$app->request->baseUrl."/images/img04.png", ["style"=>""]) ?>
		</p>
	</div>
</div>

<button class="btn myButton" type="button">
	<span class="glyphicon glyphicon-chevron-right"></span> Terapéutico: en	ausencia de midazolam
</button>
<div class="collapse" id="collapseExample">
	<div class="well">
		<p>Reemplace MIDAZOLAM con otra benzodiacepina</p>

<p>Bolo de inducción de clonazepam (Rivotril @)
1 mg (IV o SC), en relé 3 mg / 24h ya sea en IVSE o
SCSE o en una solución durante 24h Bolo de
inducción de clorazepato (Tranxene •) 60 mg
(IVL o SC) en relé 120 mg durante 24 h en una
solución IV O en 2 inyecciones por día de 60 mg
en SC Se puede usar diazepam (valium •) pero es
un producto que precipita No administrar
continuamente en SC Diazepam (valium •) o
Clorazepate (Tranxéne •) Si el tratamiento es
ineficaz, duplique las dosis sea cual sea la ruta
de administración</p>

<p>Con las mismas dosis para vuelo IV o SC</p>
	</div>
</div>