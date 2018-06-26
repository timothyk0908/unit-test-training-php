<?php

class Salary {
    const NET_PERCENTAGE = 55;
    
    public static function getNetMonthlySalary($grossMonthlySalary) : int
    {
        return ( $grossMonthlySalary / 100 ) * self::NET_PERCENTAGE;
    }

    public static function calculateSumNetSalariesFromGross(array $grossSalaries) : int 
    {
    	return array_reduce($grossSalaries, function($i, $salary) {
		    return $i += self::getNetMonthlySalary($salary);
		});
    }
}
