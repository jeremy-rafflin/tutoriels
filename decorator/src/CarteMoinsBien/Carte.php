<?php
namespace App\CarteMoinsBien;

abstract class Carte implements CarteInterface
{
    private float $_prix;
    private float $_dimension;

    public function __construct(
        float $prix,
        float $dimension
    ) {
        $this->_prix = $prix;
        $this->_dimension = $dimension;
    }

    public float $prix {
        get {
            return $this->_prix;
        }
        set(float $prix) {
            $this->_prix = $prix;
        }
    }

    public float $dimension {
        get {
            return $this->_dimension;
        }
        set(float $dimension) {
            $this->_dimension = $dimension;
        }
    }

    abstract public function description();
}
