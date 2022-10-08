<?php

namespace Test;

class Task5
{
    public function main(int $n): string
    {
        $arr = [0, 1];
        for ($i = 1; $i > 0; $i++) {
            $lastItemOfArr = $arr[array_key_last($arr)];
            $lastItemInCorrectFormat = str_replace(',', '', number_format($lastItemOfArr));
            $arr[] = $arr[$i] + $arr[$i-1];
            if (strlen($lastItemInCorrectFormat) >= $n) {
                break;
            }
        }
        return $lastItemInCorrectFormat;
    }
}