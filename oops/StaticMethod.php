<?php

class StaticMethod
{
    static public $myName = "arti";
    static function myfun()
    {
        echo self::$myName;
        echo "hello";
    }
}

class newStatic extends StaticMethod
{
    static public $myName = "aarti";
}

// $s = new StaticMethod();
// $s->myfun();

newStatic::myfun();
echo newStatic::$myName;
