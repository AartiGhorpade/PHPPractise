<?php

class UserAuth
{
    function checkType($type)
    {
        echo "$type is logged in";
    }
}
class Students extends UserAuth {
    function studFun(){
        echo "student function is calling";
    }
}
class Teacher extends UserAuth {}


$I = new Students();
$I->checkType('student');
echo "<br/>";
$I->studFun();

echo "<br/>";
$T = new Teacher();
$T->checkType('Teacher');
