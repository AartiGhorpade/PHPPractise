<?php
//private access modifier

class Exam
{
    private function questionpapers()
    {
        return "This is que papers";
    }

    function another()
    {
        echo $this->questionpapers();
    }

    protected function marks()
    {
        echo "this is marks function";
    }
}
$e = new Exam();
echo $e->another();

//private access modifier

class ProtectedExam extends Exam
{
    function review()
    {
        $this->marks();
    }
}

$e1 = new ProtectedExam();
echo $e1->review();
