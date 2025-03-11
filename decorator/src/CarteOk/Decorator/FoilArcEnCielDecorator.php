<?php

namespace App\CarteOk\Decorator;

use App\CarteOk\CarteInterface;

class FoilArcEnCielDecorator implements CarteInterface {
    public function __construct(
        private CarteInterface $carte
    ) {
    }

    public function description(): string {
        return $this->carte->description() . ' avec foil arc en ciel';
    }

    public float $prix {
        get {
            return $this->carte->prix * 3;
        }
    }
    
    public float $dimension {
        get {
            return $this->carte->dimension;
        }
    }

}