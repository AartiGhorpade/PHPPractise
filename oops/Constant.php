<?php

class ConstantTut
{
    const name = "arti";

    function myFun()
    {
        echo self::name;
    }
}

echo ConstantTut::name;
$c1 = new ConstantTut;
$c1->myFun();
