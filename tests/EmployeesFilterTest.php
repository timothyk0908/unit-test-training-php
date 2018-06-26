<?php

use PHPUnit\Framework\TestCase;

class EmployeesFilterTest extends TestCase {

	function testGetEmployeesNamesByCompanyReturnsEmployeesNamesForGivenCompany() : void 
	{

		$employee1 = new Employee('jack', 'williams', 'jackwilliams@wemanity.com', 3000, 'Wemanity');
		$employee2 = new Employee('john', 'condor', 'johncondor@linkedin.com', 4000, 'LinkedIn');
		$employee3 = new Employee('fred', 'krueger', 'freddy.krueger@facebook.com', 6000, 'Facebook');
		$employee4 = new Employee('vanessa', 'porto', 'vanessa.porto@facebook.com', 8000, 'Wemanity');

		$employeesCollection = new EmployeesCollection($employee1, $employee2, $employee3, $employee4);

		$this->assertEquals(
			['jack williams', 'vanessa porto'],
			EmployeesFilter::getEmployeesNamesByCompany($employeesCollection, 'Wemanity')
		);
	}

	function testGetTotalSalaryOfEmployeesByCompanyReturnsTheCorrectNumber() : void 
	{

		$employee1 = new Employee('jack', 'williams', 'jackwilliams@wemanity.com', 3000, 'Wemanity');
		$employee2 = new Employee('john', 'condor', 'johncondor@linkedin.com', 4000, 'LinkedIn');
		$employee3 = new Employee('fred', 'krueger', 'freddy.krueger@facebook.com', 6000, 'Wemanity');
		$employee4 = new Employee('vanessa', 'porto', 'vanessa.porto@facebook.com', 8000, 'Wemanity');

		$employeesCollection = new EmployeesCollection($employee1, $employee2, $employee3, $employee4);

		$this->assertEquals(
			17000,
			EmployeesFilter::getTotalSalaryOfEmployeesByCompany($employeesCollection, 'Wemanity')
		);
	}
	

	function testGetTotalSalaryOfEmployeesByCompanyReturnsTheCorrectNumberWhenSpecifiedNetSalary() : void 
	{
		$employee1 = new Employee('jack', 'williams', 'jackwilliams@wemanity.com', 3000, 'Wemanity');
		$employee2 = new Employee('john', 'condor', 'johncondor@linkedin.com', 4000, 'LinkedIn');
		$employee3 = new Employee('fred', 'krueger', 'freddy.krueger@facebook.com', 6000, 'Wemanity');
		$employee4 = new Employee('vanessa', 'porto', 'vanessa.porto@facebook.com', 8000, 'Wemanity');

		$employeesCollection = new EmployeesCollection($employee1, $employee2, $employee3, $employee4);

		$this->assertEquals(
			Salary::getNetMonthlySalary(17000),
			EmployeesFilter::getTotalSalaryOfEmployeesByCompany($employeesCollection, 'Wemanity', true)
		);
	}
	
}