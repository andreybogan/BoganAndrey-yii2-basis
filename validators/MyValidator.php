<?php

namespace app\validators;

use yii\validators\Validator;

class MyValidator extends Validator
{
    public function validateAttributes($model, $attributes = null)
    {
        if ($this->attributes == 4) {
            $model->addError($attributes, 'Ошибка! Атрибут равен 4');
        }
    }
}