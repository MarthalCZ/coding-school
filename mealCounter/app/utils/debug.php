<?php 

namespace app\utils;

class Debug 
{
    public static function dump($variable)
    {
        echo "<pre>";
        print_r($variable);
        echo "</pre>";
    }
}