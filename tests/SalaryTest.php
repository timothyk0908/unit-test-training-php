<?php

use PHPUnit\Framework\TestCase;

final class SalaryTest extends TestCase {
    
    public function testCanGetNetSalaryWhenGivingGrossSalary(): void
    {    	
        $this->assertEquals(
            5000 / 100 * Salary::NET_PERCENTAGE,
            Salary::getNetMonthlySalary(5000)
        );
    }

    public function testCanGetSumOfNetSalariesWhenGivingGrossSalaries(): void
    {
    	$this->assertEquals(
    		4400,
    		Salary::calculateSumNetSalariesFromGross([1000,2000,5000])
		);
    }
}