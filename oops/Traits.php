<?php

trait myClass
{
    function hello()
    {
        echo "Hellooo";
    }
}
trait myClass1
{
    function hii()
    {
        echo "hiiii";
    }
}
class newClass
{
    use myClass;
    use myClass1;
}

$n = new newClass();
$n->hello();
$n->hii();
