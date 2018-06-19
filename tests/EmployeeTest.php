<?php

use PHPUnit\Framework\TestCase;

final class EmployeeTest extends TestCase
{
    public function testCanBeCreatedFromValidFirstNameLastNameAndEmail(): void
    {
        $this->assertInstanceOf(
            Employee::class,
            new Employee('jack', 'sparrow', 'user@example.com', 5000)
        );
    }
    
    public function testCantBeCreatedFromValidFirstNameLastNameButInvalidEmail(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $employee = new Employee('Paul', 'Peterson', 'wrongmailaddress', 5000);
    }
    
    public function testCanGetFullNameAfterCreatingEmployee(): void
    {
        $employee = new Employee('jack', 'sparrow', 'user@example.com', 5000);
        
        $this->assertInstanceOf(
            Employee::class,
            $employee
        );
        
        $this->assertEquals('jack sparrow', $employee->getFullName());
    }
    
    public function testCanGetEmailObjectAfterCreatingEmployee(): void
    {
        $employee = new Employee('jack', 'sparrow', 'user@example.com', 5000);
        
        $this->assertInstanceOf(
            Employee::class,
            $employee
        );
        
        $this->assertInstanceOf(
            Email::class,
            $employee->getEmail());
        
        $this->assertEquals(
            'user@example.com',
            $employee->getEmail()
        );
    }
    
        
    public function testCanGetSalaryAfterCreatingEmployee(): void
    {
        $employee = new Employee('jack', 'sparrow', 'user@example.com', 5000);
        
        $this->assertInstanceOf(
            Employee::class,
            $employee
        );
        
        $this->assertEquals(5000 / 100 * Salary::NET_PERCENTAGE, $employee->getNetMonthlySalary());
    }
}
