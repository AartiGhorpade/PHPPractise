<?php

 final class FinalKeyword
{
    function myFun()
    {
        echo "Helooo";
    }
}

class NewFinalKeyword extends FinalKeyword {}
$f1 = new NewFinalKeyword();
$f1->myFun();
