<?php
namespace App\Models;

use Core\AbstractModel;

class Post extends AbstractModel
{
    public function __construct()
    {
        parent::__construct('posts');
    }
}