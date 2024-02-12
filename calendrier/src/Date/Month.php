<?php

namespace App\Date;
class Month {

    /**
     * Month constructor
     * @param int $month the month from 1 to 12
     * @param int $year year 
     * @throws \Exception
     */

    public function __construct(int $month, int $year) {
        if ($month < 1|| $month > 12) {
            throw new \Exception("Month $month is not valid");
            
            # code...
        }
        if ($year < 1970) {
            throw new \Exception("Year is less than 1970");
        }
    }
}