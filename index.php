<?php

class Car2
{
    protected function drive()
    {
        echo 'car is start driving';
    }
    public function getDrive()
    {
        $this->drive();
    }
}
$car1 = new Car2();
$car1->getDrive();

die();
class Car1
{
    private function drive()
    {
        echo 'car is drive';
    }
    public function getDrive()
    {
        $this->drive();
    }
}
$car1 = new Car1();
$car1->getDrive();

die();
class Car
{
    public static function startEngin()
    {
        echo 'start engin';
        return new Car();
    }
    public function drive()
    {
        echo 'car is driving';
        return $this;
    }
    public function stop()
    {
        echo 'car is stop';
    }
    public function whatisThis()
    {
        return $this;
    }
}
Car::startEngin()
    ->drive()
    ->stop();

die();
require 'functions.php';

$Bio = [
    'name' => 'soe sandar ',
    'age' => '22',
    'isMarried' => true,
];

dd($Bio);
require 'index.view.php';

?>
