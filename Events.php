<?php

namespace  Baleks\humhub\modules\mostactivespaces;

use Baleks\humhub\modules\mostactivespaces\widgets\Sidebar;
use Yii;

class Events
{
    public function onSidebarInit($event)
    {
        if (Yii::$app->hasModule('mostactivespaces')) {
            $event->sender->addWidget(Sidebar::class, [], [
                'sortOrder' => 500
            ]);
        }
    }
}
