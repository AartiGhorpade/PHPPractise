<?php

interface MyClass
{
    function hello();
}

class MyFun implements MyClass
{
    function hello()
    {
        echo "hello there";
    }
}

$m = new MyFun();
$m->hello();
