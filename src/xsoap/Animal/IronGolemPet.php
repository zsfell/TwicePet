<?php

namespace xsoap\Animal;
use xsoap\Pets;
class IronGolemPet extends Pets {

	const NETWORK_ID = 20;

	public $width = 0.3;
	public $length = 0.9;
	public $height = 2.8;

	public function getName() : string {
		return "IronGolemPet";
	}

	public function getSpeed() {
		return 3.0;
	}

}
