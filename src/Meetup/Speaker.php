<?php

final class Speaker {

	private $name;
	private $company;
	private $favoriteAnimal;
	private $rateOfSpeechSkill;

	private const MINIMUM_SPEECH_SKILL_VALUE = 1;
	private const MAXIMUM_SPEECH_SKILL_VALUE = 10;


	/**
	 * Class Constructor
	 * @param    $name   
	 * @param    $company   
	 * @param    $favoriteAnimal   
	 * @param    $rateOfSpeechSkill   
	 */
	public function __construct($name, $company, $favoriteAnimal, $rateOfSpeechSkill)
	{
		if($this->validateRateOfSpeechSkill($rateOfSpeechSkill)){
			$this->name = $name;
			$this->company = $company;
			$this->favoriteAnimal = $favoriteAnimal;
			$this->rateOfSpeechSkill = $rateOfSpeechSkill;			
		} else {
			throw(new InvalidArgumentException("Rate needs to be between ".self::MINIMUM_SPEECH_SKILL_VALUE." and ".self::MAXIMUM_SPEECH_SKILL_VALUE));
		}
	}

	private function validateRateOfSpeechSkill(int $rateOfSpeechSkill)
	{
		return $rateOfSpeechSkill >= self::MINIMUM_SPEECH_SKILL_VALUE && $rateOfSpeechSkill <= self::MAXIMUM_SPEECH_SKILL_VALUE;
	}

    /**
     * @return mixed
     */
    public function getRateOfSpeechSkill()
    {
        return $this->rateOfSpeechSkill;
    }

    /**
     * @return mixed
     */
    public function getFavoriteAnimal()
    {
        return $this->favoriteAnimal;
    }
}