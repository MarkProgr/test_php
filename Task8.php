<?php

namespace Solutions;

class Task8
{
    public function main(string $json): string
    {
        $arr = json_decode($json, true);

        return array_walk_recursive($arr, function ($value, $key) {
            echo "$key : $value" . "\r\n";
        });
    }
}