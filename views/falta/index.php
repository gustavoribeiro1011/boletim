<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FaltaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Faltas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="falta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Falta', ['create'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Gerar PDF', ['create'], ['class' => 'btn btn-success']) ?>
		<input type="button" class="btn btn-success" value="Gerar PDF">
		
		<button class="btn btn-primary" type="button">
  Messages <span class="badge">4</span>
</button>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'falta',
            'materia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
