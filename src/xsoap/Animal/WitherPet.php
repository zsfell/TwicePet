<?php

namespace xsoap\Animal;
use xsoap\Pets;
class WitherPet extends Pets {

	const NETWORK_ID = 52;

    public $height = 1.6;
    public $width = 0.9;

	public function getName() : string {
		return "WitherPet";
	}

	public function getSpeed() {
		return 3.0;
	}

}