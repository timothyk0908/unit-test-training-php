<?php

class Employee {
    
    private $firstName;
    private $lastName;
    private $email;
    private $grossMonthlySalary;

    public function __construct(string $firstName, string $lastName, string $email, int $grossMonthlySalary)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = Email::fromString($email);
        $this->grossMonthlySalary = $grossMonthlySalary;
    }

    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }
    
    public function getGrossMonthlySalary() {
        return $this->grossMonthlySalary;
    }
    
    public function getNetMonthlySalary() {
        return Salary::getNetMonthlySalary($this->grossMonthlySalary);
    }
    
}
