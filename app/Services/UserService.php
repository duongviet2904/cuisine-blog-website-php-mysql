<?php

namespace App\Services;

use App\Repositories\AccountRepository;
use App\Repositories\UserRepository;

class UserService
{
    public const ADMIN_ROLE = 'ADMIN';
    public const USER_ROLE = 'USER';
    public const ACCOUNT_ACTIVE = 1;
    public const ACCOUNT_INACTIVE = 0;

    public function __construct(
      private $userRepository,
      private $accountRepository
    ) {
        $this->userRepository = new UserRepository();
        $this->accountRepository = new AccountRepository();
    }

    public function createAccount(array $data) {
        if (!$this->validateAccountInfo($data)) {
            return false;
        }
        $data = [
            'username' => $data['username'],
            'password' => $data['password'],
            'role' => self::USER_ROLE,
            'is_active' => self::ACCOUNT_ACTIVE,
            'created_at' => date('Y-m-d H:i:s')
        ];
        return $this->accountRepository->save($data);
    }

    public function createUser(array $data) {
        $accountId = $this->createAccount($data);
        if (!$accountId) {
            return false;
        }

        $data = [
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'gender' => $data['gender'] ?? null,
            'date_of_birth' => $data['date_of_birth'] ?? null,
            'avatar' => $data['avatar'] ?? null,
            'account_id' => $accountId
        ];
        return $this->userRepository->save($data);
    }

    public function validateAccountInfo(array $data) {
        if (!isset($data['username']) || !empty($data['username'])) {
            return false;
        }
        if (!isset($data['password']) || !empty($data['password'])) {
            return false;
        }
        if (!isset($data['confirm_password']) || !empty($data['confirm_password'])) {
            return false;
        }
        if ($data['password'] !== $data['confirm_password']) {
            return false;
        }
        return true;
    }

    public function validateUserInfo(array $data) {
        if (!isset($data['firstname']) || !empty($data['firstname'])) {
            return false;
        }
        if (!isset($data['lastname']) || !empty($data['lastname'])) {
            return false;
        }
        if (!isset($data['account_id']) || !empty($data['account_id'])) {
            return false;
        }
        return true;
    }

    public function getAllUserInfo() {
        $userLists = $this->userRepository->getAll();
        foreach ($userLists as &$user) {
            $accountInfo = $this->accountRepository->getById($user['account_id']);
            if (!$accountInfo) {
                continue;
            }
            $user = array_merge($user, $accountInfo);
        }
        return $userLists;
    }
}