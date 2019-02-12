<?php

use humhub\compat\CActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="panel panel-default">
    <div class="panel-heading"><?= Yii::t('MostactivespacesModule.base', 'Most Active Spaces Module Configuration'); ?></div>
    <div class="panel-body">


        <p><?= Yii::t('MostactivespacesModule.base', 'You may configure the number spaces to be shown.'); ?></p>
        <br/>

        <?php $form = CActiveForm::begin(); ?>

        <?= $form->errorSummary($model); ?>

        <div class="form-group">
            <?= $form->labelEx($model, 'spacesCount'); ?>
            <?= $form->textField($model, 'spacesCount', ['class' => 'form-control']); ?>
            <?= $form->error($model, 'spacesCount'); ?>
        </div>

        <hr>
        <?= Html::submitButton(Yii::t('MostactivespacesModule.base', 'Save'), ['class' => 'btn btn-primary']); ?>
        <a class="btn btn-default" href="<?= Url::to(['/admin/module']); ?>"><?= Yii::t('MostactivespacesModule.base', 'Back to modules'); ?></a>

        <?php CActiveForm::end(); ?>
    </div>
</div>