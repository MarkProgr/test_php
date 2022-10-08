<?php

namespace Test;

class Task10
{
    public function main(int $inputNumber): array
    {
        $arr[] = $inputNumber;
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