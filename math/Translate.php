<?php

namespace math;

class Translate{
    public $number;

    public function __construct($number)
    {
        $this->number=$number;
    }

    public function fornum(){
        return bindec($this->number);
    }
}