<?php

namespace App\Controllers;

use Core\AbstractController;
use Core\Request;
use Core\View;
use Core\Validator;

class PostDetail extends AbstractController {
    public function index(): void {
        $selected = 'post-detail';
        View::render("post-detail",compact(array('selected')));
    }
}
