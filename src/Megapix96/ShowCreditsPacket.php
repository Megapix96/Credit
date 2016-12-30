<?php
namespace Megapix96;

use pocketmine\network\protocol\DataPacket;

class ShowCreditsPacket extends DataPacket{
	const NETWORK_ID = 0x4c;

	public function decode(){

	}

	public function encode(){
		$this->reset();
	}
}
