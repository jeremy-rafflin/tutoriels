<?php

namespace App\CarteOk\Decorator;

use App\CarteOk\CarteInterface;

class SigneDecorator implements CarteInterface {
    public function __construct(
        private CarteInterface $carte
    ) {
    }

    public function description(): string {
        return $this->carte->description() . ' signé ';
    }

    public float $prix {
        get {
            return $this->carte->prix + 4;
        }
    }
    
    public float $dimension {
        get {
            return $this->carte->dimension;
        }
    }

}