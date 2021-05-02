<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

// Dans la classe Bicycle, où une dynamo est utilisée, switchOn() retourne true seulement si la currentSpeed() est >10km/h, 
// tandis que switchOff() retourne toujours false.

class Bicycle extends Vehicle implements LightableInterface
{

    public function __construct(string $color, int $currentSpeed = 8)
    {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
    }

    public function switchOn(): bool
    {
       if($this->getCurrentSpeed() > 10) {
           return true;
        } else {
          return false;
        }
    
    }
    public function switchOff(): bool
    {
        return false;
    }
   
}
