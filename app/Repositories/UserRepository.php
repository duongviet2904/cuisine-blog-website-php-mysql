<?php

namespace App\Repositories;

use App\Models\User;
use Core\RepositoryImplement;

class UserRepository extends RepositoryImplement
{

    public function __construct()
    {
        parent::__construct(new User());
    }
}