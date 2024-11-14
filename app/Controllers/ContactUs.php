<?php
namespace App\Controllers;

use Core\AbstractController;
use Core\Request;
use Core\View;
use Core\Validator;

class ContactUs extends AbstractController {

    public function index(): void {
        $selected = 'contact-us';
        View::render("contact-us",compact(array('selected')));
    }
}
