<?php

class Salary {
    const NET_PERCENTAGE = 55;
    
    public static function getNetMonthlySalary($grossMonthlySalary) : int
    {
        return ( $grossMonthlySalary / 100 ) * self::NET_PERCENTAGE;
    }
}
