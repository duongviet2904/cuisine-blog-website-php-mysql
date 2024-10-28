<?php

namespace App\Controllers;

use Core\AbstractController;
use Core\Request;
use Core\View;
use Core\Validator;

class AboutUs extends AbstractController {
    public function index(): void {
        $selected = 'about-us';
        View::render("about-us",compact(array('selected')));
    }
}
