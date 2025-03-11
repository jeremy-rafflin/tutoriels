<?php
namespace App\CarteOk;

abstract class Carte implements CarteInterface
{
    public function __construct(
        public float $prix {
            get {
                return $this->prix;
            }
            final set(float $prix) {
                $this->prix = $prix;
            }
        },
        public float $dimension {
            get {
                return $this->dimension;
            }
            final set(float $dimension) {
                $this->dimension = $dimension;
            }
        }
    ) {
    }


    abstract public function description();
}
