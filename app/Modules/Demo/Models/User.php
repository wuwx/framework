<?php

namespace App\Modules\Demo\Models;

use Nova\ORM\Model as BaseModel;


class User extends BaseModel
{
    protected $tableName = 'users';

    protected $relations = array('posts');


    public function __construct()
    {
        parent::__construct();
    }

    public function posts()
    {
        return $this->hasMany('App\Modules\Demo\Post', 'author_id');
    }

}