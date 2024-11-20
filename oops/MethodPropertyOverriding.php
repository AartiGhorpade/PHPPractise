<?php

class MethodPropertyOverriding
{
    public $name = 'Arti';
    function myFun()
    {
        echo "Hello arti";
    }
}

class ChildProperty extends MethodPropertyOverriding
{
    public $name = 'HellossssHellossss';
    function myFun()
    {
        echo "Hellossss artisss";
    }
}

$m = new ChildProperty();
$m->myFun();
echo $m->name;
