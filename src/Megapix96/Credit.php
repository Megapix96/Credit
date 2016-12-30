<?php
namespace Megapix96;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use Megapix96\ShowCreditsPacket;

class Credit extends PluginBase implements Listener{

        function onCommand(CommandSender $p, Command $command, $label, array $args){
        	if (strtolower($label) === "credit"){
        		if ($p->isOp()){
        			$pk = new ShowCreditsPacket();
        			$p->dataPacket($pk);
        		}else{
        			return false;
        		}
                }
        }

}