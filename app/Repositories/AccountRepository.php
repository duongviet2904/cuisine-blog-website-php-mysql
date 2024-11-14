<?php
namespace App\Repositories;

use App\Models\Account;
use Core\RepositoryImplement;
use Core\RepositoryInterface;

class AccountRepository extends RepositoryImplement
{
    public function __construct()
    {
        parent::__construct(new Account());
    }

}