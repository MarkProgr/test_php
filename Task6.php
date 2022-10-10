<?php

namespace Solutions;

use DateTime;

class Task6
{
    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        $date = new DateTime("01-$month-$year");
        $lastDay = new DateTime("01-$lastMonth-$lastYear");
        $lastDay = $lastDay->format('t');
        $lastDate = new DateTime("$lastDay-$lastMonth-$lastYear");
        $countOfDays = 0;
        while ($date < $lastDate) {
            $date->modify('+1 month');
            if ($date->format('l') === $day) {
                $countOfDays++;
            }
        }
        return $countOfDays;
    }
}