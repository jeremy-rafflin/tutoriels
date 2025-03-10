<?php 

namespace App\Domaine\Specification;

use App\Domaine\PieceLego;

class EstUnePieceDeLaBonneCouleur {

    public function isSatisfyBy(PieceLego $pieceLego) {
        return $pieceLego->couleur() === 'gris';
    }
}