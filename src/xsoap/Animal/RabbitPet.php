<?php

namespace xsoap\Animal;
use xsoap\Pets;
class RabbitPet extends Pets {

	const NETWORK_ID = 18;
	
	const TYPE_BROWN = 0;

	public $width = 0.5;
	public $height = 0.5;
	
	public function getName() : string {
		return "RabbitPet";
	}

	public function getSpeed() {
		return 3.0;
	}
}
