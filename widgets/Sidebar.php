<?php

namespace humhub\modules\mostactivespaces\widgets;

use humhub\modules\mostactivespaces\models\ActiveSpace;
use humhub\components\Widget;
use Yii;

class Sidebar extends Widget
{

    public function run()
    {
        $module = Yii::$app->getModule('mostactivespaces');
        $spaces = ActiveSpace::find()->limit((int) $module->settings->get('spaces_count'))->all();
        return $this->render('sidebar', ['spaces' => $spaces]);
    }

}
