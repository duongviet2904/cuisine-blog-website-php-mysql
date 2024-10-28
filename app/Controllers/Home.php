<?php

namespace App\Controllers;

use Core\AbstractController;
use Core\Request;
use Core\View;
use Core\Validator;

class Home extends AbstractController {
    public function index(): void {
        $selected = 'home';
        View::render("home",compact(array('selected')));
    }
}
