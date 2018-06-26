<?php

final class EmployeesFilter {

	public static function getEmployeesNamesByCompany(EmployeesCollection $employees, string $company) : array 
	{
		$employeesOfCompany = self::getEmployeesForCompany($employees, $company);
		return $employeesOfCompany->reduce(
			function($employee){ return $employee->getFullName(); }
		);
	}

	public static function getTotalSalaryOfEmployeesByCompany(EmployeesCollection $employees, string $company, bool $net = false) : int 
	{
		$employeesOfCompany = self::getEmployeesForCompany($employees, $company);
		return array_sum($employeesOfCompany->reduce(function($employee) use ($net) {
		     return $net ? $employee->getNetMonthlySalary() : $employee->getGrossMonthlySalary();
		}));
	}

	private static function getEmployeesForCompany(EmployeesCollection $employees, string $company) {
		return $employees->filter(
			function($employee) use ($company) { return $employee->getCompany() === $company; }
		);
	}
}