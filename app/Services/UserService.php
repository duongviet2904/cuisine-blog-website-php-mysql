<?php
namespace App\Services;

use App\Repositories\AccountRepository;
use App\Repositories\UserRepository;
use Core\Request;
use Core\Session;

class UserService
{
    public const ADMIN_ROLE = 'ADMIN';
    public const USER_ROLE = 'USER';
    public const ACCOUNT_ACTIVE = 1;
    public const ACCOUNT_INACTIVE = 0;

   protected $accountRepository;
   protected $userRepository;
   protected $request;

    public function __construct()
    {
        $this->accountRepository = new AccountRepository();
        $this->userRepository = new UserRepository();
        $this->request = new Request();
    }

    public function createAccount($data) {
        $data = [
            'username' => $data['username'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT),
            'role' => self::USER_ROLE,
//            'is_active' => self::ACCOUNT_ACTIVE,
            'created_at' => date('Y-m-d H:i:s')
        ];
        $newAccountId = $this->accountRepository->save($data);
        if($newAccountId){
            return "Created Successfully";
        }
        return "Failed to create Account";
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
//          'avatar' => $data['avatar'] ?? null,
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

    public function getAllUsers(){
        return $this->accountRepository->getAll();
    }

    public function getUserById($id){
        return $this->accountRepository->getById($id);
    }

    public function deleteUserById($id) {
        return $this->accountRepository->delete($id) ? 'Delete successfully!' : 'Delete failed. Please try it later!';
    }
}