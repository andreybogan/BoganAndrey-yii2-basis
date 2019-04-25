<?php

namespace app\controllers;

use app\models\ActiveRecord\Tasks;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

/**
 * Class TaskController
 * @package app\controllers
 */
class TaskController extends Controller
{

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider(
            [
                'query' => Tasks::find()->with('user'),
                'pagination' => [
                    'pageSize' => 3,
                ]
            ]
        );

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $task = Tasks::findOne($id);

        return $this->render('view', ['task' => $task]);
    }
}
