<?php

namespace humhub\modules\mostactivespaces;

use Yii;
use yii\helpers\Url;
use humhub\models\Setting;

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
     * On build of the dashboard sidebar widget, add the mostactivespaces widget if module is enabled.
     *
     * @param type $event            
     */
    public static function onSidebarInit($event)
    {
        if (Yii::$app->hasModule('mostactivespaces')) {
            $event->sender->addWidget(widgets\Sidebar::class, [], [
                'sortOrder' => 400
            ]);
        }
    }

    /**
     * @inheritdoc
     */
    public function enable()
    {
        parent::enable();

        $module = Yii::$app->getModule('mostactivespaces');
        if (! $module->Settings::Set('spaces_count')) {
            $module->Settings::Set('spaces_count', 5);
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
