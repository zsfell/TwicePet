<?php

namespace xsoap\Animal;
use xsoap\Pets;
class BlazePet extends Pets {

	const NETWORK_ID = 43;

    public $width = 0.75;
    public $height = 1.562;
    public $length = 1.2;

	public function getName() : string {
		return "BlazePet";
	}

	public function getSpeed() {
		return 3.0;
	}

}
