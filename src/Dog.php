<?php

final class Dog extends Animal {

	private $isAGoodBoy;

	public function __construct() {
		$this->legs = 4;
		$this->hasFur = true;
        $this->isAGoodBoy = true;
	}


    /**
     * @return bool
     */
    public function isAGoodBoy()
    {
        return $this->isAGoodBoy;
    }
}