<?php

final class EmployeesFilter {

	public static function getEmployeesNamesByCompany(EmployeesCollection $employees, string $company) : array {
		$employeesOfCompany = self::getEmployeesForCompany($employees, $company);
		$employeesNames = [];
		foreach($employeesOfCompany as $employee){
			$employeesNames[] = $employee->getFullName();
		}
		return $employeesNames;
	}

	private static function getEmployeesForCompany($employees, string $company) {
		$employeesOfCompany = [];
		foreach($employees as $employee) {
			if($employee->getCompany() === $company){
				$employeesOfCompany[] = $employee;
			}
		}

		return $employeesOfCompany;
	}
}