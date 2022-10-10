<?php

namespace src;

use DateTime;

class Task2
{
    public function main(string $date): mixed
    {
        $currentTime = new DateTime();
        $currentYear = $currentTime->format('Y');

        try {
            $birthday = new DateTime("$date");
        } catch (\Throwable) {
            return 'Invalid data';
        }

        if ($currentTime < $birthday) {
            return 'Invalid data';
        }
        
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