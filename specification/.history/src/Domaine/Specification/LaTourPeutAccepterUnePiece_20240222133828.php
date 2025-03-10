<?php 

namespace App\Domaine\Specification;

use App\Domaine\PieceLego;
use App\Domaine\Tour;

class LaTourPeutAccepterUnePiece {

    public function __construct(private Tour $tour) {
    }

    public function isSatisfyBy(PieceLego $pieceLego) {
        dump($pieceLego->taille(), $this->tour->pointsManquants());
        return $pieceLego->taille() < $this->tour->pointsManquants();
    }
}