<?php

namespace Baleks\humhub\modules\mostactivespaces\controllers;

use Baleks\humhub\modules\mostactivespaces\models\ActiveSpace;
use humhub\components\Controller;

class ListController extends Controller
{

    public $pageSize = 10;

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'acl' => [
                'class' => \humhub\components\behaviors\AccessControl::class,
                'guestAllowedActions' => ['list']
            ]
        ];
    }

    /**
     * Shows list of most active users with statistic.
     */
    public function actionIndex()
    {
        $query = ActiveSpace::find();

        $countQuery = clone $query;
        $pagination = new \yii\data\Pagination(['totalCount' => $countQuery->count(), 'pageSize' => $this->pageSize]);
        $query->offset($pagination->offset)->limit($pagination->limit);

        return $this->renderAjax('index', [
            'spaces' => $query->all(),
            'pagination' => $pagination
        ]);
    }

}

