<?php

return [
    "GET" => [
        "/home" => "Home/index",
        "/about-us" => "AboutUs/index",
        "/blog-entries" => "BlogEntries/index",
        "/contact-us" => "ContactUs/index",
        "/post-detail" => "PostDetail/index",
        "/" . ADMIN_URL . "/dashboard" => 'adminhtml/AdminController/index'
    ]
];
