<?php

namespace xsoap\Animal;
use xsoap\Pets;
class SnowGolemPet extends Pets {

	const NETWORK_ID = 21;

	public $width = 0.3;
	public $length = 0.9;
	public $height = 1.8;

	public function getName() : string{
		return "SnowGolemPet";
	}

	public function getSpeed() {
		return 3.0;
	}

}
