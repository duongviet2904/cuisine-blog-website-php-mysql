<?php

namespace App\Controllers;

use Core\AbstractController;
use Core\Request;
use Core\View;
use Core\Validator;

class BlogEntries extends AbstractController {
    public function index(): void {
        $selected = 'blog-entries';
        View::render("blog-entries",compact(array('selected')));
    }
}
