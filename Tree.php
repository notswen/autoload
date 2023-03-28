<?php
class Tree{
    public $value;
    public $count;
    public $leftChild;
    public $rightChild;

    public function __construct($value,$count,$leftChild = null,$rightChild = null){
        $this->value=$value;
        $this->count=$count;
        $this->leftChild=$leftChild;
        $this->rightChild=$rightChild;
    }

    public function isLeaf(){
        return $this->leftChild === null and $this->rightChild === null;

    }
    public function isRoot(){

    }
}