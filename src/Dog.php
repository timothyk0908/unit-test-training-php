<?php

final class Dog extends Animal {

	public function __construct($legs, $hasFur) {
		$this->legs = $legs;
		$this->hasFur = $hasFur;
	}
}