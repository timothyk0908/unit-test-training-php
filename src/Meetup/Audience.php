<?php

final class Audience {

	private $numberOfPeople;
	private $favoriteAnimal;

	/**
	 * Class Constructor
	 * @param    $numberOfPeople   
	 */
	public function __construct(int $numberOfPeople, string $favoriteAnimal)
	{
		$this->numberOfPeople = $numberOfPeople;
		$this->favoriteAnimal = $favoriteAnimal;
	}

    public function getNumberOfPeople() : int
    {
        return $this->numberOfPeople;
    }

    public function getFavoriteAnimal() : string
    {
        return $this->favoriteAnimal;
    }
} 



