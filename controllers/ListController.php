<?php

namespace humhub\modules\mostactivespaces\controllers;

use humhub\modules\mostactivespaces\models\ActiveSpace;
use humhub\components\behaviors\AccessControl;
use humhub\components\Controller;
use yii\data\Pagination;

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
                'class' => AccessControl::class,
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
        $pagination = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => $this->pageSize]);
        $query->offset($pagination->offset)->limit($pagination->limit);

        return $this->renderAjax('index', [
            'spaces' => $query->all(),
            'pagination' => $pagination
        ]);
    }

}

