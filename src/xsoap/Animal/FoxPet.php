<?php

namespace xsoap\Animal;
use xsoap\Pets;
class FoxPet extends Pets {

	const NETWORK_ID = 121;

	public $width = 0.6;
	public $length = 0.6;
	public $height = 1.8;

	public function getName() : string {
		return "FoxPet";
	}

	public function getSpeed() {
		return 3.0;
	}

}
