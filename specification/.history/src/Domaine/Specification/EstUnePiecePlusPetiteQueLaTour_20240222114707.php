<?php 

namespace App\Domaine\Specification;

use App\Domaine\PieceLego;
use App\Domaine\Tour;

class EstUnePiecePlusPetiteQueLaTour {

    public function __construct(private Tour $tour) {
    }

    public function isSatisfyBy(PieceLego $pieceLego) {
        return $pieceLego->largeur() < $this->tour->largeur() 
            && $pieceLego->hauteur() < $this->tour->hauteur()
            && $pieceLego->longeur() < $this->tour->longeur();
    }
}