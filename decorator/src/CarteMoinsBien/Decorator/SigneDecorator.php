<?php

namespace App\CarteMoinsBien\Decorator;

use App\CarteMoinsBien\CarteInterface;

class SigneDecorator extends FoilArcEnCielDecorator{
    public function description(): string {
        return parent::description() . ' avec foil arc en ciel';
    }

    public float $prix {
        get {
            return parent::$prix::get() + 4;
        }
    }
    
    public float $dimension {
        get {
            return parent::$dimension::get();
        }
    }

}