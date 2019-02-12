<?php

namespace Baleks\humhub\modules\mostactivespaces\models;

class ActiveSpace extends \humhub\modules\space\models\Space
{

    public $count_posts;

    public static function find()
    {
        $selectPosts = 'SELECT count(*) FROM `content` WHERE content.contentcontainer_id=space.contentcontainer_id AND content.object_model=\'humhub\\\modules\\\post\\\models\\\Post\'';

        $query = parent::find();

        $query->addSelect(['*',
            '(' . $selectPosts . ') as count_posts',
        ]);
        $query->orderBy('(count_posts) DESC');
        return $query;
    }

}