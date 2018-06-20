<?php

class Salary {
    const NET_PERCENTAGE = 55;
    
    public static function getNetMonthlySalary($grossMonthlySalary) : int
    {
        return ( $grossMonthlySalary / 100 ) * self::NET_PERCENTAGE;
    }

    public static function calculateSumNetSalariesFromGross(array $grossSalaries) : int 
    {
    	$sum = 0;
    	for($i = 0; $i < sizeof($grossSalaries); $i++) {
    		$sum += self::getNetMonthlySalary($grossSalaries[$i]);
    	}
    	return $sum;

    	/**
    	return array_sum(
    		array_map('self::getNetMonthlySalary', $grossSalaries)
    	);	
    	
    }
}
