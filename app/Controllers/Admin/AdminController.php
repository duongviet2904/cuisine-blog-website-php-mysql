<?php

namespace App\Controllers\Admin;

use Core\AbstractController;
use Core\View;

class AdminController extends AbstractController
{
    public function index() {
        View::render("admin/admin_dashboard");
    }
}