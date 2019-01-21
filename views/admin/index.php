<?php

use humhub\compat\CActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="panel panel-default">
    <div class="panel-heading"><?php echo Yii::t('MostactivespacesModule.base', 'Most Active Spaces Module Configuration'); ?></div>
    <div class="panel-body">


        <p><?php echo Yii::t('MostactivespacesModule.base', 'You may configure the number spaces to be shown.'); ?></p>
        <br/>

        <?php $form = CActiveForm::begin(); ?>

        <?php echo $form->errorSummary($model); ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'spacesCount'); ?>
            <?php echo $form->textField($model, 'spacesCount', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'spacesCount'); ?>
        </div>

        <hr>
        <?php echo Html::submitButton(Yii::t('MostactivespacesModule.base', 'Save'), ['class' => 'btn btn-primary']); ?>
        <a class="btn btn-default" href="<?php echo Url::to(['/admin/module']); ?>"><?php echo Yii::t('MostactivespacesModule.base', 'Back to modules'); ?></a>

        <?php CActiveForm::end(); ?>
    </div>
</div>