<?php
namespace App\Models;

use Core\AbstractModel;

class Account extends AbstractModel
{
    public function __construct()
    {
        parent::__construct('accounts');
    }
}