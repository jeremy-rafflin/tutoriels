<?php 

namespace App\Domaine\Specification;

use App\Domaine\PieceLego;

class EstUnePieceDeLaBonneCouleur {

    public function __construct(private string $couleur) {
    }

    public function isSatisfyBy(PieceLego $pieceLego) {
        return $pieceLego->couleur() === $this->couleur;
    }
}