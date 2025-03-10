<?php 

namespace App\Domaine\Specification;

use App\Domaine\PieceLego;

class EstUnePiecePlusPetiteQueLaTour {

    public function __construct(private string $couleur) {
    }

    public function isSatisfyBy(PieceLego $pieceLego) {
        return $pieceLego->couleur() === $this->couleur;
    }
}