<?php
$name ="arti";

function myfun(){
    global $name;
    echo $name;
}

myfun();