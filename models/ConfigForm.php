<?php

namespace humhub\modules\mostactivespaces\models;

use Yii;

class ConfigForm extends \yii\base\Model
{

    public $spacesCount;

    public function rules()
    {
        return [
            ['spacesCount', 'required'],
            ['spacesCount', 'integer', 'min' => 0, 'max' => 50],
        ];
    }

    public function attributeLabels()
    {
        return [
            'spacesCount' => Yii::t('MostactivespacesModule.base', 'The number of most active spaces that will be shown.'),
        ];
    }

}
