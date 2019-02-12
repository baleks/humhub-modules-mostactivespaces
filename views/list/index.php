<?php

use yii\helpers\Html;
?>
<div class="modal-dialog modal-dialog-normal animated fadeIn">
    <div class="modal-content">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"
                    aria-hidden="true">&times;</button>
            <h4 class="modal-title">
                <?= Yii::t('MostactivespacesModule.views_mostActiveSpaces_list', '<strong>Most</strong> active spaces'); ?>
            </h4>
        </div>
        <br>

        <ul class="media-list">
            <?php
            $i = 0;
            foreach ($spaces as $space) : ?>
                <li>
                    <a href="<?= $space->getUrl(); ?>">
                        <div class="media">
                            <span class="pull-left circle"><?= $pagination->page * $pagination->pageSize + ( ++$i); ?>
                            </span>

                            <img
                                src="<?= $space->getProfileImage()->getUrl(); ?>"
                                class="img-rounded tt img_margin pull-left" height="50" width="50"
                                alt="50x50" style="width: 50px; height: 50px;"
                                data-src="holder.js/50x50">


                            <div class="media-body">
                                <h4 class="media-heading">
                                    <strong><?= Html::encode($space->displayName); ?></strong>
                                </h4>
                                <div class="mostactivespaces">
                                    <div class="entry pull-left">
                                        <span class="count colorInfo"><?= $space['count_posts']; ?>
                                        </span> <br> <span
                                            class="title"><?= Yii::t('MostactivespacesModule.views_mostActiveSpaces_list', 'Posts count'); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <?php endforeach; ?>
        </ul>
        <div class="modal-footer" style="padding: 5px">
            <div class="pagination-container">
                <?= \humhub\widgets\AjaxLinkPager::widget(['pagination' => $pagination]); ?>
            </div>
        </div>
    </div>
</div>
