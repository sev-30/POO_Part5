<?php

//Créer une interface LightableInterface possédant les méthodes switchOn() et switchOff().Ces méthodes seront implémentées 
//par les véhicules possédant des éclairages comme Car et Bike, mais pas SkateBoard (cette dernière est à créer si ce n’est déjà fait).
  
interface LightableInterface

{
    public function switchOn(): bool;
    public function switchOff(): bool;
}
