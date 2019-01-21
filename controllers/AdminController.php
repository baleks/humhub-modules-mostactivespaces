<?php

namespace Baleks\humhub\modules\mostactivespaces\controllers;

use Baleks\humhub\modules\mostactivespaces\models\ConfigForm;
use humhub\modules\admin\components\Controller;
use Yii;

class AdminController extends Controller
{

    /**
     * Configuration Action for Super Admins
     */
    public function actionIndex()
    {
        $module = Yii::$app->getModule('mostactivespaces');

        $form = new ConfigForm();
        $form->spacesCount = $module->settings->get('spaces_count');

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $form->spacesCount = $module->settings->set('spaces_count', $form->spacesCount);
            return $this->redirect(['/mostactivespaces/admin/index']);
        }

        return $this->render('index', [
            'model' => $form
        ]);
    }

}

