<?php

// Class Voiture
class Cars
{
    private string $color;
    private int $currentSpeed;
    private int $nbSeat;
    private int $nbWheels = 4;
    private int $powerType;
    private int $levelGasoline;

    // construct
    public function __construct(string $color, int $nbSeat, int $powerType ,int $currentSpeed , int $levelGasoline)
    {
        $this->color = $color;
        $this->nbSeat = $nbSeat;
        $this->powerType = $powerType;
        $this->currentSpeed = $currentSpeed;
        $this->levelGasoline = $levelGasoline;
    }

     // Get Set
     public function getNbWheels(): int
     {
         return $this->nbWheels;
     }
 
     public function setNbWheels(int $nbWheels): void
     {
         $this->nbWheels = $nbWheels;
     }
 
     public function getColor(string $color): string
     {
         return $this->color = $color;
     }
 
     public function setColor(string $color): void
     {
         $this->color = $color;
     }
 
     public function getEnergy()
     {
         return $this->levelGasoline;
     }
 
     public function setEnergy(int $levelGasoline): void
     {
         $this->levelGasoline = $levelGasoline;
     }
 
     public function getCurrentSpeed():int
     {
         return $this->CurrentSpeed;
     }
 
     public function setCurrentSpeed(int $currentSpeed): void
     {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
     }

    // fonction
    public function forward(): string
    {
        $this->currentSpeed = 50;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed < 0 && $this->levelGasoline < 0) {
            $this->currentSpeed--;
            $this->levelGasoline--;
            $sentence .= "Brake !!! Vous avez plus d'essence";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    // boucle start
    public function start()
    {
        while ($this->levelGasoline > 0) {
            $this->levelGasoline--;
        }
    }
   
}
