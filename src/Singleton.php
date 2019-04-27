<?php


namespace App;


final class Singleton
{
    private static $instance;

    public static function getInstance()
    {
        if ( null == self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __construct()
    {
    }
    public function getId()
    {
        return \spl_object_id($this);
    }
    private function __clone()
    {

    }
    private function  __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

}