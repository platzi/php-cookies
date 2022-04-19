<?php

namespace MichisDisponibles;

class Michi {

    protected $name;
    protected $color;
    protected $age;

    function __construct($name, $color, $age) {
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getColor() {
        return $this->color;
    }

    public function getAge() {
        return $this->age;
    }

    public function sayMeow() {
        return "Meow!";
    }

}
