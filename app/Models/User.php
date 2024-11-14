<?php

namespace App\Models;

use Core\AbstractModel;

class User extends AbstractModel
{
    public function __construct()
    {
        parent::__construct('users');
    }
}