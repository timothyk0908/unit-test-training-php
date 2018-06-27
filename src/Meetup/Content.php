<?php

final class Content {

	private $title;
	private $rateOfInterest;

	private const MINIMUM_INTEREST_VALUE = 1;
	private const MAXIMUM_INTEREST_VALUE = 10;


	/**
	 * Class Constructor
	 * @param    $title   
	 * @param    $rateOfInterest   
	 */
	public function __construct(string $title, int $rateOfInterest)
	{
		if($this->validateRateOfInterest($rateOfInterest)){
			$this->title = $title;
			$this->rateOfInterest = $rateOfInterest;
		} else {
			throw(new InvalidArgumentException("Rate needs to be between ".self::MINIMUM_INTEREST_VALUE." and ".self::MAXIMUM_INTEREST_VALUE));
		}
	}

	private function validateRateOfInterest(int $rateOfInterest)
	{
		return $rateOfInterest >= self::MINIMUM_INTEREST_VALUE && $rateOfInterest <= self::MAXIMUM_INTEREST_VALUE;
	}


    /**
     * @return mixed
     */
    public function getRateOfInterest()
    {
        return $this->rateOfInterest;
    }
}