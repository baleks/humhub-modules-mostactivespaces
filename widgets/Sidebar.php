<?php

namespace Baleks\humhub\modules\mostactivespaces\widgets;

use Baleks\humhub\modules\mostactivespaces\models\ActiveSpace;
use Yii;

class Sidebar extends \humhub\components\Widget
{
    public function run()
    {
        $module = Yii::$app->getModule('mostactivespaces');
        $spaces = ActiveSpace::find()->limit((int) $module->settings->get('spaces_count'))->all();
        return $this->render('sidebar', [
                    'spaces' => $spaces
        ]);
    }
}

?>
