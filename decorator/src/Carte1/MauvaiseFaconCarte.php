<?php
namespace App\Carte1;

use App\CarteOk\CarteInterface;


abstract class MauvaiseFaconCarte implements CarteInterface
{


    public function __construct(
        public float $prix {
            get {
                $prixAdditionnel = 0;
                if ($this->protegeCarte) {
                    $prixAdditionnel += 0.1;
                }
                if ($this->signe) {
                    $prixAdditionnel += 4;
                }
                if ($this->foil) {
                    $prixAdditionnel += $this->prix;
                }
                if ($this->foilArcEnCiel) {
                    $prixAdditionnel += $this->prix * 2;
                }
                if ($this->foileFracture) {
                    $prixAdditionnel += $this->prix * 4;
                }
                return $this->prix + $prixAdditionnel;
            }
            final set (float $prix) {
                $this->prix = $prix;
            }
        },
        public float $dimension {
            get {
                return $this->dimension + ($this->protegeCarte? 0.1 : 0);
            }
            final set (float $dimension) {
                $this->dimension = $dimension;
            }
        },
        public private(set) bool $protegeCarte,
        public private(set) bool $signe,
        public private(set) bool $foil,
        public private(set) bool $foilArcEnCiel,
        public private(set) bool $foileFracture,
    ) {
    }


    abstract public function description();
}
