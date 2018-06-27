<?php

use PHPUnit\Framework\TestCase;

final class PresentationTest extends TestCase {

	function test_construct_returnsABuiltPresentationObject() : void 
	{
		$audience = new Audience(30, "Dog");
		$speaker = new Speaker("Timothy Khoury", "Wemanity", "Dog", 6);
		$content = new Content("Unit Testing and TDD", 7);

		$validPresentation = new Presentation($audience, $speaker, $content); 

		$this->assertInstanceOf(
			Presentation::class,
			$validPresentation
		);
	}

	function test_construct_throws_invalidArgumentException_ifWrongParam() : void 
	{
		$this->expectException(TypeError::class);

		$audience = new Audience(30, "Dog");
		$speaker = new Speaker("Timothy Khoury", "Wemanity", "Dog", 6);
		$content = new Content("Unit Testing and TDD", 7);

		$invalidPresentation = new Presentation($audience, $speaker, "hi"); 
	}

	function test_isFun_ReturnsTrue_IfRateIsHighEnoughAndAudienceIsNotTooCrowdy() : void 
	{
		$audience = new Audience(30, "Horse");
		$speaker = new Speaker("Timothy Khoury", "Wemanity", "Dog", 8);
		$content = new Content("Unit Testing and TDD", 7);

		$presentation = new Presentation($audience, $speaker, $content); 

		$this->assertTrue($presentation->isFun());
	}

	function test_isFun_ReturnsTrue_IfRateIsNotHighEnoughButWeShareTheSameFavoriteAnimalAndAudienceIsNotTooCrowdy() : void 
	{
		$audience = new Audience(30, "Dog");
		$speaker = new Speaker("Timothy Khoury", "Wemanity", "Dog", 6);
		$content = new Content("Unit Testing and TDD", 7);

		$presentation = new Presentation($audience, $speaker, $content); 

		$this->assertTrue($presentation->isFun());
	}

	function test_isFun_ReturnsFalse_IfRateIsNotHighEnoughEvenIfAudienceHasNotTooManyPeople() : void 
	{
		$audience = new Audience(30, "Horse");
		$speaker = new Speaker("Timothy Khoury", "Wemanity", "Dog", 4);
		$content = new Content("Unit Testing and TDD", 8);

		$presentation = new Presentation($audience, $speaker, $content); 

		$this->assertFalse($presentation->isFun());
	}

	function test_isFun_ReturnsFalse_IfRateIsHighEnoughButAudienceHasTooManyPeople() : void 
	{
		$audience = new Audience(90, "Horse");
		$speaker = new Speaker("Timothy Khoury", "Wemanity", "Dog", 8);
		$content = new Content("Unit Testing and TDD", 8);

		$presentation = new Presentation($audience, $speaker, $content); 

		$this->assertFalse($presentation->isFun());
	}
}