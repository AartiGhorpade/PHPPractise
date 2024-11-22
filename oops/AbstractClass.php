<?php

abstract class AbstractClass
{
    abstract function product();
}

class childAbstractClass extends AbstractClass
{
    function product()
    {
        echo "helloo";
    }
}

$c = new childAbstractClass();
$c->product();
