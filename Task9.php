<?php

namespace Test;

class Task9
{
    public function main(array $array, int $number)
    {
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