<?php

namespace xsoap\Animal;
use xsoap\Pets;
class SlimePet extends Pets {

	const NETWORK_ID = 37;

const DATA_SLIME_SIZE = 16;

	public $width = 0.3;
	public $length = 0.9;
	public $height = 5;

	public function getName() : string {
		return "SlimePet";
	}

	public function getSpeed() {
		return 3.0;
	}

}
