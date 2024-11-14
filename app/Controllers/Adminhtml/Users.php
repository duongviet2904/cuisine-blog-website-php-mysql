<?php

namespace App\Controllers\Adminhtml;

use App\Services\UserService;
use Core\AbstractController;
use Core\AdminView;
use Core\Request;

class Users extends AbstractController
{
    private $userService;
    private $request;

    public function __construct()
    {
        $this->userService = new UserService();
        $this->request = new Request();
    }

    public function index() {
        $allUsers = $this->userService->getAllUserInfo();
        AdminView::render("users",compact(["allUsers"]));
    }

    public function delete() {
        $userId = $this->request->getParam('user_id');
        $message = $this->userService->deleteUserById($userId);
        $this->index();
    }

}