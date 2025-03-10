<?php 

namespace App\Domaine\Specification;

use App\Domaine\PieceLego;
use App\Domaine\Tour;

class EstUnePieceValidePourLaTour {

    public function __construct(private Tour $tour) {
    }

    public function isSatisfyBy(PieceLego $pieceLego): bool {
        return (new EstUnePieceDeLaBonneCouleur($this->tour->couleur()))->isSatisfyBy($pieceLego) 
            && (new EstUnePiecePlusPetiteQueLaTour($this->tour))->isSatisfyBy($pieceLego)
            && (new LaTourPeutAccepterUnePiece($this->tour))->isSatisfyBy($pieceLego);
    }
}