<?php

namespace App\Controllers\Adminhtml;

use App\Services\PostService;
use Core\AbstractController;
use Core\AdminView;
use Core\Request;

class Posts extends AbstractController
{
    private $postService;
    private $request;

    public function __construct()
    {
        $this->postService = new PostService();
        $this->request = new Request();
    }

    public function index() {
        $allPosts = $this->postService->getAllPosts();
        AdminView::render("Posts/posts_index",compact(["allPosts"]));
    }

    public function renderForm() {
        $postId = $this->request->getParam('post_id');
        $post = [];
        if($postId) {
            $post = $this->postService->getPostById($postId);
        }
        AdminView::render("Posts/posts_form", compact(array('post')));
    }

    public function execute() {
        $data = $this->request->getPostParams();
        $responseMessage = $this->postService->savePost($data);
        header('Location: /'.ADMIN_URL.'/posts/list');
        exit();
//        Redirect::redirect('/'.ADMIN_URL.'/posts/list');
    }

    public function delete() {
        $postId = $this->request->getParam('post_id');
        $message = $this->postService->deletePostById($postId);
        $this->index();
    }
}