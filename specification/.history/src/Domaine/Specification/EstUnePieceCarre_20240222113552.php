<?php

namespace App\Domaine\Specification;
use App\Domaine\PieceLego;

class EstUnePieceCarre {
    public function isSatisfyBy(PieceLego $pieceLego) {
        return $pieceLego->longeur() === $pieceLego->largeur();
    }
}