<?php

namespace Baleks\humhub\modules\mostactivespaces;

use Yii;
use yii\helpers\Url;

class Module extends \humhub\components\Module
{

    /**
    * @inheritdoc
    */
    public function getConfigUrl()
    {
        return Url::to(['/mostactivespaces/admin']);
    }

    /**
     * @inheritdoc
     */
    public function enable()
    {
        parent::enable();

        $module = Yii::$app->getModule('mostactivespaces');
        if (! $module->settings->get('spaces_count')) {
            $module->settings->set('spaces_count', 5);
        }
    }

    /**
    * @inheritdoc
    */
    public function disable()
    {
        // Cleanup all module data, don't remove the parent::disable()!!!
        parent::disable();
    }

}
