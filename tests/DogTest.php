<?php

use PHPUnit\Framework\TestCase;

final class DogTest extends TestCase {
    
    public function testCanConstructDogAndGetItsLegsNumber(): void
    {
    	$dog = new Dog(4, true);

        $this->assertEquals(
            4,
			$dog->getLegs()
        );

        $this->assertEquals(
            true,
			$dog->hasFur()
        );
    }
}