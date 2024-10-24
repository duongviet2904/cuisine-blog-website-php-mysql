<?php

namespace App\Controllers\Adminhtml;

use Core\AbstractController;
use Core\AdminView;

class AdminController extends AbstractController
{
    public function index() {
        AdminView::render("admin_dashboard");
    }
}