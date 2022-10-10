<?php

namespace Solutions;

class Task4
{
    public function main(string $inputString): string
    {
        $search = [' ', '_', '-'];
        return str_replace($search, '', ucwords($inputString, '-/_/ '));
    }
}