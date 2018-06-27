<?php

use PHPUnit\Framework\TestCase;

final class SpeakerTest extends TestCase {

	function test_construct_returnsABuiltSpeakerObject() : void 
	{
		$validSpeaker = new Speaker("Timothy Khoury", "Wemanity", "Dog", 6);

		$this->assertInstanceOf(
			Speaker::class,
			$validSpeaker	
		);
	}

	function test_construct_throwsAnInvalidArgumentException_IfRateIsInvalid() : void 
	{
		$this->expectException(InvalidArgumentException::class);
		$this->expectExceptionMessage("Rate needs to be between 1 and 10");

		$invalidSpeaker = new Speaker("Timothy Khoury", "Wemanity", "Dog", 100);
	}

	function test_getRateOfSpeechSkill_returnsTheValueOfIt() : void 
	{		
		$validSpeaker = new Speaker("Timothy Khoury", "Wemanity", "Dog", 6);

		$this->assertEquals(
			6,
			$validSpeaker->getRateOfSpeechSkill()
		);
	}

}
