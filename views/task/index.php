<?php

use app\models\filters\TasksSearch;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\web\View;
use \yii\widgets\ListView;
use \app\widgets\TaskCard;

/* @var $this View */
/* @var $searchModel TasksSearch */
/* @var $dataProvider ActiveDataProvider */

$this->title = 'Список задач';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="tasks-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => function ($model) {
            return TaskCard::widget(['model' => $model]);
        },
        'summary' => false,
        'options' => [
            'class' => 'task-preview-content'
        ]
    ]); ?>

</div>