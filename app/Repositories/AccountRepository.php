<?php
namespace App\Repositories;

use App\Models\Account;
use Core\RepositoryImplement;

class AccountRepository extends RepositoryImplement
{
    public function __construct()
    {
        parent::__construct(new Account());
    }
}