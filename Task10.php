<?php

namespace Solutions;

class Task10
{
    public function main(int $inputNumber): array|string
    {
        $arr[] = $inputNumber;
        if ($inputNumber <= 0) {
            return $arr[] = 'Error!';
        }
        while ($inputNumber != 1) {
            if ($inputNumber % 2 === 0) {
                $arr[] = $inputNumber / 2;
            } else {
                $arr[] = ($inputNumber * 3) + 1;
            }
            $inputNumber = $arr[array_key_last($arr)];
        }
        return $arr;
    }
}