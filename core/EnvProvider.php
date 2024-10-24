<?php

namespace Core;

/**
 * Read data from .env file
 *
 * @author Nguyen Viet Duong
 */
class EnvProvider
{
    public function getEvironmentData($filename) {

        if (!file_exists($filename)) {
            throw new \Exception('Env file is missing!');
        }

        $envData = require_once $filename;

        if (!$envData) {
            return [
                'DB_HOST'  => '',
                'DB_DATABASE'=>'',
                'DB_USERNAME'=>'',
                'DB_PASSWORD' => '',
                'ADMIN_URL' => ''
            ];
        }
        return $envData;
    }
}