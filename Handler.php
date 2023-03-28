<?php

class Handler
{
    private $text;
    private $lettersData;

    public function __construct($text)
    {
        $this->text = mb_strtolower($text);
        $letters = preg_split("//u", $this->text , -1, PREG_SPLIT_NO_EMPTY);
        foreach ($letters as $letter) {
            if (empty($this->lettersData[$letter])) {
                $this->lettersData[$letter] = new Tree($letter, 1);
            } else {
                $this->lettersData[$letter]->count++;
            }
        }
        uasort($this->lettersData, function ($a, $b) {
            return $b->count <=> $a->count;
        });
        $table = $this->lettersData;
        while (count($table) != 1) {
            $rightChild = array_pop($table);
            $leftChild = array_pop($table);
            $newTreeValue = $leftChild->value . $rightChild->value;
            $tree = new Tree(
                $newTreeValue,
                $leftChild->count + $rightChild->count,
                $leftChild,
                $rightChild
            );
            $table[$newTreeValue] = $tree;
            uasort($table, function ($a, $b) {
                return $b->count <=> $a->count;
            });

        }
        $tree = array_pop($table);
        foreach ($this->lettersData as $letter => $datum){
            if (mb_strpos($tree->value))
        }
        var_dump($table);
    }

}
