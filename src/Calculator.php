<?php

namespace demo;

class Calculator
{
    public function add(int...$numbers)
    {
        if (count($numbers) === 1) {
            throw new \Exception('You can\'t add one number!');
        }

        return array_reduce($numbers, function ($carry, $number) {
            return $carry + $number;
        });
    }

    public function subtract($subtract, $from)
    {
        return $from - $subtract;
    }

    public function multiply($factor1, $factor2)
    {
        return $factor1 * $factor2;
    }
}
