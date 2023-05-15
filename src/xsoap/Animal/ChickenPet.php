<?php
namespace xsoap\Animal;

use xsoap\Pets;
class ChickenPet extends Pets {

	const NETWORK_ID = 10;
	
	public $width = 0.6;
	public $length = 0.6;
	public $height = 1.8;
	
		
	public function getName() :string {
		return "ChickenPet";
	}
		
	public function getSpeed() {
		return 3.0;
	}
}
