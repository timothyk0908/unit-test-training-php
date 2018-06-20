<?php

use PHPUnit\Framework\TestCase;

final class DogTest extends TestCase {
    
    public function testCanConstructDogAndGetItsLegsNumber(): void
    {
    	$dog = new Dog();

        $this->assertEquals(
            4,
			$dog->getLegs()
        );

        $this->assertTrue(
			$dog->hasFur()
        );
    }

    public function testCanDoggoBeAGoodBoi() : void
    {
        $dog = new Dog();

        $this->assertTrue(
            $dog->isAGoodBoy()
        );

    }
}