<?php

use PHPUnit\Framework\TestCase;

final class AudienceTest extends TestCase {

	function test_construct_returnsABuiltAudienceObject() : void 
	{
		$audience = new Audience(30, "Dog");

		$this->assertInstanceOf(
			Audience::class,
			$audience
		);
	}
}