<?php

namespace src;

class Task10
{
    public function main(int $inputNumber): array|string
    {
        if ($inputNumber <= 0) {
            return 'Invalid data!';
        }

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