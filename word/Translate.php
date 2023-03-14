<?php

namespace word;

class Translate{
    public $hello;

    public function __construct($hello){
        $this->hello=$hello;
    }

    public function forhello(){
        if ($this->hello=='Hello'){
            return 'Привет';
        }
        else{
            return 'Ошибка';
        }

    }
}