<?php
/**
 * Created by PhpStorm.
 * User: dy
 * Date: 16/11/28
 * Time: 10:18
 */
abstract class Person {
    abstract function eat();
    abstract function say();

    public function done(){
        echo "结束";
    }
}


class Student extends Person{

    public function eat(){
        echo "我会吃";
    }

    public function say(){
        echo "我会说";
    }
}

$person = new Student();
$person->done();