<?php

namespace App\Controllers;

use Core\AbstractController;
use Core\Request;
use Core\View;
use Core\Validator;
use App\Services\PostService;

class BlogEntries extends AbstractController {

    private $postService;

    public function __construct()
    {
        $this->postService = new PostService();
    }

    public function index(): void {
        $allPosts = $this->postService->getAllPosts();
        $limitPost = $this->postService->getLimitPosts(5);
        $selected = 'blog-entries';
        View::render("blog-entries",compact(['selected','allPosts','limitPost']));
    }
}
