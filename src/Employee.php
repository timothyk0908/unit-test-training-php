<?php

class Employee 
{
    private $firstName;
    private $lastName;
    private $email;

    public function __construct(string $firstName, string $lastName, string $email) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = Email::fromString($email);
    }
    
    public function getFullName()
    {
        return $this->firstName  .' '. $this->lastName;
    }

}
