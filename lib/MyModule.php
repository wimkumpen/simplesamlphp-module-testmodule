<?php
namespace SimpleSAML\Module\mymodule;

class MyModule
{
    /**
     * This function is used to retrieve the singleton instance of this class.
     *
     * @return AuthMemCookie The singleton instance of this class.
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new MyModule();
        }
        return self::$instance;
    }
    /**
     * This function implements the constructor for this class. It loads the Auth MemCookie configuration.
     */
    private function __construct()
    {
        var_dump('your stuff here');die;
    }
}