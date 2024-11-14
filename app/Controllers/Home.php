<?php

namespace App\Controllers;

use App\Services\UserService;
use App\Services\PostService;
use Core\AbstractController;
use Core\Request;
use Core\View;
use Core\Validator;

class Home extends AbstractController {
    private $userService;
    private $postService;

    public function __construct()
    {
        $this->userService = new UserService();
        $this->postService = new PostService();
    }

    public function index(): void {
        $allPosts = $this->postService->getAllPosts();
        $limitPost = $this->postService->getLimitPosts(5);
        $selected = 'home';
        View::render("home", compact(['selected', 'allPosts','limitPost']));
    }

    public function register(): void {
        $data = $_POST;
        $responseMessage = $this->userService->createUser($data);
        header('Location: /');
    }

    public function login(): void {

    }
}
