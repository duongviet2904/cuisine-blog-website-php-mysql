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
    private $server;
    private $getRequest;
    private $postRequest;
    private $file;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->server = $_SERVER;
        $this->getRequest = $_GET;
        $this->postRequest = $_POST;
        $this->file = $_FILES;
    }

    /**
     * @return array
     */
    public function getServer() {
        return $this->server;
    }

    /**
     * @return array
     */
    public function getParams() {
        return $this->getRequest;
    }

    /**
     * @return array
     */
    public function getPostParams() {
        return $this->postRequest;
    }

    /**
     * @return array
     */
    public function getFileRequest() {
        return $this->file;
    }

    /**
     * @param $paramName
     * @return mixed|null
     */
    public function getParam($paramName) {
        if (!isset($this->getRequest[$paramName])) {
            return null;
        }
        return $this->getRequest[$paramName];
    }

    /**
     * @param $paramName
     * @param $paramValue
     * @return void
     */
    public function setParam($paramName, $paramValue) {
        $_GET[$paramName] = $paramValue;
    }

    /**
     * @param $paramName
     * @return mixed|null
     */
    public function getPostParam($paramName) {
        if (!isset($this->postRequest[$paramName])) {
            return null;
        }
        return $this->postRequest[$paramName];
    }

    /**
     * @param $paramName
     * @param $paramValue
     * @return void
     */
    public function setPostParam($paramName, $paramValue) {
        $_POST[$paramName] = $paramValue;
    }
}
