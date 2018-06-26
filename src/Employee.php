<?php

class Employee {
    
    private $firstName;
    private $lastName;
    private $email;
    private $grossMonthlySalary;
    private $company;

    public function __construct(string $firstName, string $lastName, string $email, int $grossMonthlySalary, string $company = "Wemanity")
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = Email::fromString($email);
        $this->grossMonthlySalary = $grossMonthlySalary;
        $this->company = $company;
    }

    public function getFullName() : string {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getFirstName() : string {
        return $this->firstName;
    }

    public function getLastName() : string {
        return $this->lastName;
    }

    public function getEmail() : Email {
        return $this->email;
    }
    
    public function getGrossMonthlySalary() : int {
        return $this->grossMonthlySalary;
    }
    
    public function getNetMonthlySalary() : int {
        return Salary::getNetMonthlySalary($this->grossMonthlySalary);
    }

    public function getCompany() : string
    {
        return $this->company;
    }
}
