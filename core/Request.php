<?php

namespace Core;

/**
 * The request class.
 *
 * This class stores parameters from get or post requests.
 *
 * @author Nguyen Viet Duong
 */
class Request {

    /**
     * The array of request parameters.
     *
     * @var object
     */
    static $params = [];

    /**
     * The static method for getting certain parameter.
     *
     *
     * @return mixed  It will return null if the parameter is not sent.
     * @access  public
     * @since   Method available since Release 1.0.0
     */
    public static function getParam(string $name, string $default = NULL): ?string {
        if (isset(Request::$params[$name])) {
            return Request::$params[$name];
        } else {
            return $default;
        }
    }

    /**
     * The method for setting request parameters
     *
     * @return void
     * @access  public
     * @since   Method available since Release 1.0.0
     */
    public static function setParams(array $params): void {
        Request::$params = $params;
    }

}
