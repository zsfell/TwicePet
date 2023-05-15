<?php

namespace xsoap\Animal;
use xsoap\Pets;
class BeePet extends Pets {

	const NETWORK_ID = 114;

    public $width = 0.75;
    public $height = 2.562;
    public $length = 1.2;

	public function getName() : string {
		return "BeePet";
	}

	public function getSpeed() {
		return 3.0;
	}

}
