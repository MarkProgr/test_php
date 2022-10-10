<?php

namespace src;

class Task3
{
    public function main(int $inputNumber): int
    {
        if ($inputNumber < 10) {
            return $inputNumber;
        }

        $arrOfNumbers = str_split((string)$inputNumber);

        while (count($arrOfNumbers) != 1) {
            $sum = 0;
            foreach ($arrOfNumbers as $arrOfNumber) {
                $sum += (int)$arrOfNumber;
            }
            $arrOfNumbers = str_split((string)$sum);
        }
        return $sum;
    }
}