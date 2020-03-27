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
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<style>
	.b1{
		white-space: normal !important;
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
				<?= Html::img(Yii::$app->request->baseUrl."/images/covid-19.png", ["style"=>"width:130px;"]) ?>
				<h1>COVID-19<br><small>Mejores Prácticas para Doctores</small></h1>
				<p></p>
			</div>
		</div>
		<div class="container">
        <?= $content ?>
    	</div>
		<footer class="footer">
			<div class="container">
				<p class="pull-left">
				<?= Html::img(Yii::$app->request->baseUrl."/images/Bannner2019D.jpg", ["style"=>"width:;"]) ?>
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