<?php

namespace Solutions;

class Task7
{
    public function main(array $arr, int $position): array
    {
        unset($arr[$position]);

        $newArr = [];
        array_splice($newArr, offset: 0, replacement: $arr);

        return $newArr;
    }
}