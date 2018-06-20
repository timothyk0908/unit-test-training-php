<?php

use PHPUnit\Framework\TestCase;

class EmployeesFilterTest extends TestCase {

	function testGetEmployeesNamesByCompanyReturnsEmployeesNamesForGivenCompany() : void 
	{
		$employees = new EmployeesCollection();

		$employees[] = new Employee('jack', 'williams', 'jackwilliams@wemanity.com', 3000, 'Wemanity');
		$employees[] = new Employee('john', 'condor', 'johncondor@linkedin.com', 4000, 'LinkedIn');
		$employees[] = new Employee('fred', 'krueger', 'freddy.krueger@facebook.com', 6000, 'Facebook');
		$employees[] = new Employee('vanessa', 'porto', 'vanessa.porto@facebook.com', 8000, 'Wemanity');

		$this->assertEquals(
			['jack williams', 'vanessa porto'],
			EmployeesFilter::getEmployeesNamesByCompany($employees, 'Wemanity')
		);
	}
	
}