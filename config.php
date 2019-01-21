<?php

use Baleks\humhub\modules\mostactivespaces\Events;
use humhub\modules\dashboard\widgets\Sidebar;

return [
	'id' => 'mostactivespaces',
	'class' => 'Baleks\humhub\modules\mostactivespaces\Module',
	'namespace' => 'Baleks\humhub\modules\mostactivespaces',
	'events' => [
        [
            'class' => Sidebar::class,
            'event' => Sidebar::EVENT_INIT,
            'callback' => [Events::class, 'onSidebarInit']
        ],
	],
];
