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
}