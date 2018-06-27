<?php

final class Presentation {

	private $audience;
	private $speaker;
	private $content;

	private const MAXIMUM_PRESENTATION_AUDIENCE_NUMBER = 70;
	private const FUN_RATE_REQUIREMENT = 14;

	/**
	 * Class Constructor
	 * @param    $audience   
	 * @param    $speaker   
	 * @param    $content   
	 */
	public function __construct(Audience $audience, Speaker $speaker, Content $content)
	{
		$this->audience = $audience;
		$this->speaker = $speaker;
		$this->content = $content;
	}


	public function isFun() : bool 
	{
		return !$this->isAudienceTooBig() && $this->isInterestIsHighEnough();
	}

	private function isAudienceTooBig() : bool
	{
		return $this->audience->getNumberOfPeople() > self::MAXIMUM_PRESENTATION_AUDIENCE_NUMBER;
	}

	private function isInterestIsHighEnough() : bool 
	{
		$sumOfInterest = $this->speaker->getRateOfSpeechSkill() + $this->content->getRateOfInterest();
		if($this->doAudienceAndSpeakerShareFavoriteAnimal()){
			$sumOfInterest += 1;
		}

		return $sumOfInterest >= self::FUN_RATE_REQUIREMENT;
	}

	private function doAudienceAndSpeakerShareFavoriteAnimal() : bool 
	{
		return $this->audience->getFavoriteAnimal() === $this->speaker->getFavoriteAnimal();
	}

}