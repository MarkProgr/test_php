<?php

namespace Solutions;

use DateTime;

class Task2
{
    public function main(string $date): mixed
    {
        $currentTime = new DateTime();
        $currentYear = $currentTime->format('Y');

        $birthday = new DateTime("$date");
        $birthday = $birthday->format('d-m');
        $birthdayCurrentYear = new DateTime("$birthday-$currentYear");

        if ($currentTime === $birthdayCurrentYear) {
            return 'Happy birthday!';
        }

        if ($currentTime > $birthdayCurrentYear) {
            $birthdayCurrentYear->modify('+1 year');
        }
        $timeToBirthday = $birthdayCurrentYear->diff($currentTime);
        return $timeToBirthday->days;
    }
}