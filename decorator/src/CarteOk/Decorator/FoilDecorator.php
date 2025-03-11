<?php

namespace App\CarteOk\Decorator;

use App\CarteOk\CarteInterface;

class FoilDecorator implements CarteInterface {
    public function __construct(
        private CarteInterface $carte
    ) {
    }

    public function description(): string {
        return $this->carte->description() . ' avec foil';
    }

    public float $prix {
        get {
            return $this->carte->prix * 2;
        }
    }
    
    public float $dimension {
        get {
            return $this->carte->dimension;
        }
    }

}