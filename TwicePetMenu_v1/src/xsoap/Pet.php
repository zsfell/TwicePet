<?php

namespace xsoap;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\event\Listener;
use jojoe77777\FormAPI;
use pocketmine\{Player, Server};

class Pet extends PluginBase implements Listener {

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("§bTwicePet Menu enable");

    }

    public function onCommand(CommandSender $o, Command $kmt, string $label, array $array) : bool{
        if($kmt->getName() == "pet"){
$this->getServer()->getCommandMap()->dispatch($o, "pets eng");
            $this->vmForm($o);
        }
        return true;
    }

    public function vmForm($o){
        $f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function (Player $o, $data){
        $re = $data[0];
        if($re === null){
            return true;
        }

        if($re == 0){
          if($o->hasPermission("openui.pets")){
            $this->dForm($o);
          }else{
            $o->sendMessage("§cYou can't own a pet without buying a Rank!");
          }
            return true;
        }
        if($re == 1){
          if($o->hasPermission("cname.pets")){
            $this->bForm($o);
          }else{
            $o->sendMessage("§cYou can't own a pet without buying a Rank!");
          }
            return true;
        }
        });

        $isim = $o->getName();
        $f->setTitle("§eSylends§bPets");
        $f->addDropdown("§6>> Choose", [
                        "OPEN LIST PET",
                        "Gave Name your pet!"
                        ]);
        $f->sendToPlayer($o);
    }

    public function dForm(Player $o){
        $f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function (Player $o, array $data){
            $re = $data[0];
            if($re === null){
                return true;
            }
            if($re == 0){	 $this->getServer()->getCommandMap()->dispatch($o, "pets spawn dog");
                return true;
            }
            if($re == 1){	 $this->getServer()->getCommandMap()->dispatch($o, "pets spawn donkey");
                return true;
            }
            if($re == 2){	 $this->getServer()->getCommandMap()->dispatch($o, "pets spawn horse");
                return true;
            }
       		if($re == 3){	 $this->getServer()->getCommandMap()->dispatch($o, "pets spawn llama");
                return true;
            }
            if($re == 4){	 $this->getServer()->getCommandMap()->dispatch($o, "pets spawn chicken");
                return true;
            }
            if($re == 5){	 $this->getServer()->getCommandMap()->dispatch($o, "pets spawn rabbit");
                return true;
            }
            if($re == 6){	 $this->getServer()->getCommandMap()->dispatch($o, "pets spawn irongolem");
                return true;
            }
            if($re == 7){	 $this->getServer()->getCommandMap()->dispatch($o, "pets spawn bear");
                return true;
            }
            if($re == 8){	 $this->getServer()->getCommandMap()->dispatch($o, "pets spawn snowgolem");
                return true;
            }
            if($re == 9){	 $this->getServer()->getCommandMap()->dispatch($o, "pets spawn parrot");
                return true;
            }
            if($re == 10){	 $this->getServer()->getCommandMap()->dispatch($o, "pets spawn turtle");
                return true;
            }
            if($re == 11){	 $this->getServer()->getCommandMap()->dispatch($o, "pets spawn dolphine");
                return true;
            }
            if($re == 12){	 $this->getServer()->getCommandMap()->dispatch($o, "pets spawn panda");
                return true;
            }
            if($re == 13){	 $this->getServer()->getCommandMap()->dispatch($o, "pets spawn wither");
                return true;
            }
            if($re == 14){	 $this->getServer()->getCommandMap()->dispatch($o, "pets spawn dragon");
                return true;
            }
            if($re == 15){	 $this->getServer()->getCommandMap()->dispatch($o, "pets kov");
                return true;
            }
            if($re == 16){
       	        $o->sendMessage("");
       	        return true;
            }
            });
            $isim = $o->getName();
            $f->setTitle("§eSylends§bPets");
            $f->addDropdown("§6>> Choose Pet!\n \n", [
                "§fWolf",
                "§fDonkey",
                "§fHorse",
                "§fLlama",
                "§fChicken",
                "§fRabbit",
                "§fIron Golem",
                "§fBear",
                "SnowGolem",
                "Parrot",
                "Turtle",
                "Dolphine",
                "Panda",
                "Wither",
                "Dragon",
                "§cDisable Pet"
                            ]);
                            $f->addLabel("");
            $f->sendToPlayer($o);
        }

        public function bForm(Player $o){
            $f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function (Player $o, array $data){
                $result = $data[1];
                if ($result != null) {
                    $this->Ten = $data[1];
                    $cmd = "pets name ";
                    $this->getServer()->getCommandMap()->dispatch($o, $cmd . $this->Ten);
                }
            });
        $f->setTitle("§eSylends§bPets");
        $f->addLabel("§bGave Your Pet name!\n \n");
        $f->addInput("§f", "Senpai give me a name >\\\<");
        $f->sendToPlayer($o);
    }

}

?>