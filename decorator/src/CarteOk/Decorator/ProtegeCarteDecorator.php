<?php

namespace App\CarteOk\Decorator;

use App\CarteOk\CarteInterface;

class ProtegeCarteDecorator implements CarteInterface {
    public function __construct(
        private CarteInterface $carte
    ) {
    }

    public function description(): string {
        return $this->carte->description() . ', avec protège carte ';
    }

    public float $prix {
        get {
            return $this->carte->prix + 0.1;
        }
    }
    
    public float $dimension {
        get {
            return $this->carte->dimension + 0.1;
        }
    }

}