<?php

abstract class Animal {

	protected $legs;
	protected $hasFur;

    /**
     * @return int
     */
    public function getLegs() : int
    {
        return $this->legs;
    }

    /**
     * @return bool
     */
    public function hasFur() : bool
    {
        return $this->hasFur;
    }
}