<?php

/* @var $this \yii\web\View */
/* @var $content string */
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register ( $this );
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?= Yii::$app->request->BaseUrl ?>/images/favicon.ico">
    <?php $this->registerCsrfMetaTags() ?>
    <title>COVID-19</title>
    <?php $this->head() ?>
</head>
<style>
	.b1{
		white-space: normal !important;
	}
	.color{
		color:#fff;
		text-align:center;
	}
	@media screen and (min-width:1200px){
	 	.page-header h1{
			text-align:center;
		}                      

	}
	@media screen and (max-width:600px){
		.page-header h1{
			font-weight: normal !important;
			font-size:20px;
		} 
	}
</style>
<body>

<?php $this->beginBody() ?>

<div class="wrap">
		<div class="container">
			<div class="page-header titleMain">
				<?= Html::img(Yii::$app->request->baseUrl."/images/covid-19.png", ["style"=>"width:120px;"]) ?>
				<h1>COVID-19<br><small>Mejores Prácticas Doctores</small></h1>
				<p></p>
			</div>
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#">MENU</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
				  <ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="<?= Yii::$app->request->BaseUrl ?>/images/GUIA_COVID-19.pdf" target="_blank">A. GUÍA Y LINEAMIENTOS DE MANEJO COVID -19  ULTIMA REVISION ABRIL/2020</a></li>
					<li><a href="<?= Yii::$app->request->BaseUrl ?>/images/PROTOCOLO_MANEJO_Y_DISPOSICION_DE_CADAVERES.pdf" target="_blank">B.PROCEDIMIENTO PARA EL MANEJO Y DISPOSICIÓN DE CADÁVERES DE CASOS DE COVID-19 </a></li>
				  </ul>
				  
				</div>
			  </div>
			</nav>
		</div>
		<div class="container">
		
        <?= $content ?>
		<br />

		<h4 class="color">Agradecimiento especial: Philippe Forestello por su importante ayuda en la traducción al español de vídeos</h4>
		<br />
    	</div>
		
		<footer class="footer">
			<div class="container">
				<p class="pull-left">
				<?= Html::img(Yii::$app->request->baseUrl."/images/Bannner2019D.jpg", ["style"=>"width:130px;"]) ?>
		</p>

			<p class="pull-right">
				Desarrollado y diseñado por <a href="https://conectica.bo"
					target="_blank"><img src="<?= Yii::$app->request->BaseUrl ?>/images/conectica.png" width="130px" alt=""></a>
			</p>
		</div>
	</footer>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>