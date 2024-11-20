<?php
class Classes
{
    function myFun($a, $b)
    {
        return $a * $b;
    }
}

$calling = new Classes;
echo $calling->myFun(20, 40);
