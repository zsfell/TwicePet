<?php
namespace xsoap\Animal;
use xsoap\Pets;
class DragonPet extends Pets {

	const NETWORK_ID = 53;
	
	public $width = 2.0;
	public $length = 1.0;
	public $height = 1.8;
	
		
	public function getName() : string {
		return "DragonPet";
	}
		
	public function getSpeed() {
		return 3.0;
	}
}
