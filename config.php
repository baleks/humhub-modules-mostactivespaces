<?php

use humhub\modules\dashboard\widgets\Sidebar;

return [
	'id' => 'mostactivespaces',
	'class' => 'humhub\modules\mostactivespaces\Module',
	'namespace' => 'humhub\modules\mostactivespaces',
	'events' => [
        ['class' => Sidebar::class, 'event' => Sidebar::EVENT_INIT, 'callback' => [\humhub\modules\mostactivespaces\Module::class, 'onSidebarInit']],
	],
];
?>
