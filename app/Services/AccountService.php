<?php
namespace App\Services;

use App\Repositories\AccountRepository;

class AccountService
{
   protected $accountRepository;

    public function __construct()
    {
        $this->accountRepository = new AccountRepository();
    }

    public function createAccount($data){
        $data = [
            'username' => $data['username'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT),
            'role' => 'USER'
        ];
        $newAccountId = $this->accountRepository->create($data);
        if($newAccountId){
            return "Created Successfully";
        }
        return "Failed to create Account";
    }
}