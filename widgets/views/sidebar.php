<?php

use yii\helpers\Html;

Baleks\humhub\modules\mostactivespaces\assets\Assets::register($this);
?>
<div class="panel panel-default" id="mostactivespaces-panel">

    <!-- Display panel menu widget -->
    <?php humhub\widgets\PanelMenu::widget(['id' => 'mostactivespaces-panel']); ?>

    <div class="panel-heading">
        <?= Yii::t('MostactivespacesModule.base', '<strong>Most</strong> active spaces'); ?>
    </div>
    <div class="panel-body">
        <?php
        if (count($spaces) == 0) : ?>
            <?= Yii::t('MostactivespacesModule.base','<span><strong>No spaces found.</strong></span>'); ?>
        <?php else :
            foreach ($spaces as $space) : ?>
                <a href="<?= $space->getUrl(); ?>">
                    <img src="<?= $space->getProfileImage()->getUrl(); ?>"  class="img-rounded tt img_margin" height="40"
                         width="40" alt="40x40" data-src="holder.js/40x40" style="width: 40px; height: 40px;" data-toggle="tooltip"
                         data-placement="top" title=""
                         data-original-title="<?= Html::encode($space->displayName); ?>">
                </a>
            <?php endforeach; ?>

            <hr />

            <?= Html::a(Yii::t('MostactivespacesModule.base', 'Get a list of spaces'), ['/mostactivespaces/list'], [
                'class' => 'btn btn-info',
                'data-target' => '#globalModal'
            ]); ?>
        <?php endif; ?>
    </div>
</div>

