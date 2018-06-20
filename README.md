# Unit test and TDD training

This small project will help teach basics of unit testing and TDD to junior developers.

## For who is it useful ?

Every developer that'd like to learn basics of unit testing and TDD, or for medior developers who can use it to teach it.

## Getting Started

Clone the repository and that should be it.

### Prerequisites

You only need 

```
composer
```

### Installing

Step by step

```
1. Clone repository
2. run composer install
3. Create your own branch from exercice branch 
4. You are ready to go !
```

## Running the tests

This is how you run the tests 
```
./vendor/bin/phpunit --bootstrap vendor/autoload.php --testdox tests
``` 

### Instructions of the project

```
1. Run the tests once, everything should be passing (only 3 tests for Email).

2. Create an Employee class, that has firstName, lastName and email properties.

3. Create EmployeeTest file, like EmailTest is setup and create test to assess 
a created Employee object is an instance of Employee.

4. Implement Employee constructor that constructs an Employee object with
 firstName, lastName and email ( the constructor will receive a string 
but the property should be set as an Email object ).

5. Create 1 or 2 getter tests before generating them in Employee Class.

6. Create a test that uses receive full name of Employee, test fails, 
then create a getFullName() function in Employee that will make the test pass.

7. Add a grossMonthlySalary property to Employee, create a test for its getter in EmployeeTest,
 then generate it in Employee class.

8. Now we want to know the net salary of the employee, 
add a test that will get the net salary of the employee ( 55% of the gross salary ).

9. Implement a simple getNetMonthlySalary in Employee, that will make the test pass.

10. Externalize logic from the calculation in Salary class, 
which will take care of the calculation. 
getNetMonthlySalary should just use a static function from Salary class,
 BUT the test should still run after the externalization is done.

All tests should pass, feel free to add some that you find interesting, 
you have all the freedom to improve the content.
```

## Authors

* **Timothy Khoury** - *Initial work in progress* - [timothyk0908](https://github.com/timothyk0908)

## Acknowledgments

* Thanks for PHPUnit Getting Started which was the base of the project ( https://phpunit.de/getting-started/phpunit-7.html )
