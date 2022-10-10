<?php

namespace Solutions;

class Task12
{
    public int|string $result;

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

    public function divide(): Task12|string
    {
        try {
            $this->result = $this->numberOne / $this->numberTwo;
            return $this;
        } catch (\DivisionByZeroError) {
            $this->result = 'Деление на ноль запрещено';
            return $this;
        }
    }

    public function subtract(): Task12
    {
        $this->result = $this->numberOne - $this->numberTwo;
        return $this;
    }

    public function addBy(int $inputNumber): Task12|string
    {
        try {
            $this->result += $inputNumber;
            return $this;
        } catch (\Throwable) {
            return $this->result = 'You can not divide by zero';
        }

    }

    public function multiplyBy(int $inputNumber): Task12|string
    {
        try {
            $this->result *= $inputNumber;
            return $this;
        } catch (\Throwable) {
            return $this->result = 'You can not divide by zero';
        }

    }

    public function divideBy(int $inputNumber): Task12|string
    {
        if ($inputNumber === 0) {
            return $this->result = 'You can not divide by zero';
        } else {
            $this->result /= $inputNumber;
            return $this;
        }
    }

    public function subtractBy(int $inputNumber): Task12|string
    {
        try {
            $this->result -= $inputNumber;
            return $this;
        } catch (\Throwable) {
            return $this->result = 'You can not divide by zero';
        }

    }
}