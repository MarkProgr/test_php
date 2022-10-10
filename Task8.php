<?php

namespace src;

class Task8
{
    public function main(string $json): string
    {
        $arr = json_decode($json, true);

        try {
            return array_walk_recursive($arr, function ($value, $key) {
                echo "$key : $value" . "\r\n";
            });
        } catch (\Throwable) {
            return 'Invalid data';
        }
    }
}