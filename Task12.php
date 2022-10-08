<?php

namespace Test;

class Task12
{
    public int $result;

    public function __construct(public int $numberOne, public int $numberTwo)
    {
    }

    public function __toString(): string
    {
        return $this->result;
    }

    public function add(): Task12
    {
        $this->result = $this->numberOne + $this->numberTwo;
        return $this;
    }

    public function multiply(): Task12
    {
        $this->result = $this->numberOne * $this->numberTwo;
        return $this;
    }

    public function divide(): Task12
    {
        $this->result = $this->numberOne / $this->numberTwo;
        return $this;
    }

    public function subtract(): Task12
    {
        $this->result = $this->numberOne - $this->numberTwo;
        return $this;
    }

    public function addBy(int $inputNumber): int
    {
        return $this->result += $inputNumber;
    }

    public function multiplyBy(int $inputNumber): int
    {
        return $this->result * $inputNumber;
    }

    public function divideBy(int $inputNumber): int
    {
        return $this->result / $inputNumber;
    }

    public function subtractBy(int $inputNumber): int
    {
        return $this->result - $inputNumber;
    }
}