<?php

namespace App;

class MagicClass
{
    public function __construct()
    {
        echo __METHOD__ . "\n";
    }
    
    public function __destruct()
    {
        echo __METHOD__ . "\n";
    }
    
    public function __call($name, $arguments)
    {
        echo __METHOD__ . "\n";
    }
    
    public static function __callStatic($name, $arguments)
    {
        echo __METHOD__ . "\n";
    }
    
    public function __get($name)
    {
        echo __METHOD__ . "\n";
    }
    
    public function __set($name, $value)
    {
        echo __METHOD__ . "\n";
    }
    
    public function __isset($name)
    {
        echo __METHOD__ . "\n";
    }
    
    public function __unset($name)
    {
        echo __METHOD__ . "\n";
    }
    
    public function __toString()
    {
        echo __METHOD__ . "\n";
        return "";
    }
    
    public function __invoke()
    {
        echo __METHOD__ . "\n";
    }
    
    public function __debugInfo()
    {
        echo __METHOD__ . "\n";
        return [];
    }
    
    public function __sleep()
    {
        echo __METHOD__ . "\n";
        return [];
    }
    
    public function __wakeup()
    {
        echo __METHOD__ . "\n";
    }
    
    public function __serialize()
    {
        echo __METHOD__ . "\n";
        return [];
    }
    
    public function __unserialize($data)
    {
        echo __METHOD__ . "\n";
    }
    
    public function __clone()
    {
        echo __METHOD__ . "\n";
    }
}
