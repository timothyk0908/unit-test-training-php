<?php

use PHPUnit\Framework\TestCase;

final class ContentTest extends TestCase {

	function test_construct_returnsABuiltContentObject() : void 
	{
		$validContent = new Content("Unit Testing and TDD", 7);

		$this->assertInstanceOf(
			Content::class,
			$validContent
		);
	}

	function test_construct_throwsAnExceptionIfInvalidRateOfInterest() : void 
	{
		$this->expectException(InvalidArgumentException::class);
		$this->expectExceptionMessage("Rate needs to be between 1 and 10");

		$invalidContent = new Content("Unit Testing and TDD", 12);
	}

	function test_getRateOfInterest_returnsTheValueOfIt() : void 
	{		
		$validContent = new Content("Unit Testing and TDD", 7);

		$this->assertEquals(
			7,
			$validContent->getRateOfInterest()
		);
	}
}