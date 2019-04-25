<?php

use yii\helpers\Url;
use \app\models\ActiveRecord\Tasks;

/* @var $model Tasks */

?>

<div class="task-container">
    <a href="<?= Url::to(['task/view', 'id' => $model->id]) ?>" class="task-preview-link">
        <div class="task-preview">
            <div class="task-preview-header"><?= $model->name ?></div>
            <div class="task-preview-user">
                <b>Исполнитель:</b> <?= $model->user->first_name ?> <?= $model->user->second_name ?>
            </div>
            <div class="task-preview-data"><b>Дата:</b> <?= $model->date ?></div>
        </div>
    </a>
</div>