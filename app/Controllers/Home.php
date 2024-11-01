<?php

namespace App\Controllers;

use App\Services\AccountService;
use Core\AbstractController;
use Core\Request;
use Core\View;
use Core\Validator;

class Home extends AbstractController {
    private $accountService;

    public function __construct()
    {
        $this->accountService = new AccountService();
    }

    public function index(): void {
        $selected = 'home';
        View::render("home", compact(array('selected')));
    }

    public function register(): void {
        $data = $_POST;
        $responseMessage = $this->accountService->createAccount($data);
    }

}
