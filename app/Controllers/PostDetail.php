<?php

namespace App\Controllers;

use App\Services\PostService;
use Core\AbstractController;
use Core\Request;
use Core\View;
use Core\Validator;

class PostDetail extends AbstractController {
    private $postService;

    public function __construct()
    {
        $this->postService = new PostService();
    }


    public function index(): void {
        $params = $_GET;
        $postId = $params['post_id'];
        $post = $this->postService->getPostById($postId);
        $limitPost = $this->postService->getLimitPosts(5);
        $selected = 'post-detail';
        View::render("post-detail",compact('selected','post','limitPost'));
    }
}
