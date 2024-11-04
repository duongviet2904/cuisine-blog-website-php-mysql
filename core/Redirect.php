<?php
namespace Core;

/**
 * Redirect class
 *
 * @author Nguyen Viet Duong
 */
class Redirect
{
    public function redirect($url = '/') {
        header('Location:' . $url);
        exit();
    }
}