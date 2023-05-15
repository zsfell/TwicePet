<?php

namespace xsoap\Animal;
use xsoap\Pets;
class PandaPet extends Pets {

	const NETWORK_ID = 113;

    public $width = 0.75;
    public $height = 1.562;
    public $length = 1.2;

	public function getName() : string {
		return "PandaPet";
	}

	public function getSpeed() {
		return 3.0;
	}

}
