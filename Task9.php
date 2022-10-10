<?php

namespace src;

class Task9
{
    public function main(array $array, int $number): array|string
    {
        if (count($array) <= 2) {
            return 'Please check the array you entered';
        }

        $count = count($array) - 2;
        $newArr = [];
        for ($i = 0; $i < $count; $i++) {
            if (($array[$i] + $array[$i+1] + $array[$i+2]) === $number) {
                $newArr[] = "{$array[$i]} + {$array[$i+1]} + {$array[$i+2]} = {$number}";
            }
        }
        return $newArr;
    }
}