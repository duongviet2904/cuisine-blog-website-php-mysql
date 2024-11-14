<?php

return [
    "GET" => [
        "/home" => "Home/index",
        "/dashboard" => "Dashboard/index",
        "/about-us" => "AboutUs/index",
        "/blog-entries" => "BlogEntries/index",
        "/contact-us" => "ContactUs/index",
        "/post-detail" => "PostDetail/index",
        "/" . ADMIN_URL . "/dashboard" => 'adminhtml/AdminController/index',
        "/" . ADMIN_URL . "/posts/list" => 'adminhtml/Posts/index',
        "/" . ADMIN_URL . "/posts/form" => 'adminhtml/Posts/renderForm',
        "/" . ADMIN_URL . "/posts/delete" => 'adminhtml/Posts/delete',
        "/" . ADMIN_URL . "/users/list" => 'adminhtml/Users/index',
        "/" . ADMIN_URL . "/users/delete" => 'adminhtml/Users/delete',
    ],
    "POST" => [
        "/login" => "Home/login",
        "/register" => "Home/register",
        "/" . ADMIN_URL . "/posts/create" => 'adminhtml/Posts/execute',
        "/" . ADMIN_URL . "/posts/update" => 'adminhtml/Posts/execute',
    ]
];
