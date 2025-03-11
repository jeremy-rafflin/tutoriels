<?php

namespace App\CarteMoinsBien\Decorator;

use App\CarteMoinsBien\CarteInterface;
use App\CarteMoinsBien\CarteMagic;

class FoilArcEnCielDecorator extends CarteMagic {

    public function description(): string {
        return parent::description() . ' avec foil arc en ciel';
    }

    public float $prix {
        get {
            return parent::$prix::get() * 3;
        }
    }
    
    public float $dimension {
        get {
            return parent::$dimension::get();
        }
    }

}