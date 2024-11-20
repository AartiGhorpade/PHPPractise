<?php

class StaticMethod
{
    static public $myName = "arti";
    static function myfun()
    {
        echo "hello";
    }
}

// $s = new StaticMethod();
// $s->myfun();

StaticMethod::myfun();
echo StaticMethod::$myName;
