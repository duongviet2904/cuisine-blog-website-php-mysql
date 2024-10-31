<?php
namespace App\Repositories;

use App\Models\Account;
use Core\RepositoryInterface;

class AccountRepository implements RepositoryInterface
{
    protected $accountModel;

    public function __construct()
    {
        $this->accountModel = new Account();
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }

    public function create($data)
    {
        return $this->accountModel->insert($data);
    }

    public function update($data)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}