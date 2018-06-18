<?php

use PHPUnit\Framework\TestCase;

final class EmployeeTest extends TestCase
{
    public function testCanBeCreatedFromValidFirstNameLastNameAndEmail(): void
    {
        $this->assertInstanceOf(
            Employee::class,
            new Employee('jack', 'sparrow', 'user@example.com')
        );
    }
    
    public function testCantBeCreatedFromValidFirstNameLastNameButInvalidEmail(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $employee = new Employee('Paul', 'Peterson', 'wrongmailaddress');
    }
    
    public function testCanGetFullNameAfterCreatingEmployee(): void
    {
        $employee = new Employee('jack', 'sparrow', 'user@example.com');
        
        $this->assertInstanceOf(
            Employee::class,
            $employee
        );
        
        $this->assertEquals('jack sparrow', $employee->getFullName());
    }
}

