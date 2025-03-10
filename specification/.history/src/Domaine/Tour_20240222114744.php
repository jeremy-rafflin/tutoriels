<?php

namespace App\Domaine;

use App\Domaine\Specification\EstUnePieceDeLaBonneCouleur;
use App\Domaine\Specification\EstUnePiecePlusPetiteQueLaTour;

class Tour
{
    private array $piecesComposantLaTour = [];

    public function __construct(private $couleur, private int $hauteurDesiree, private int $longeurDesiree, private $largeurDesiree)
    {
    }

    public function ajouterPiece(PieceLego $piece): void {
        if ( (new EstUnePieceDeLaBonneCouleur($this->couleur))->isSatisfyBy($piece) 
            && (new EstUnePiecePlusPetiteQueLaTour($this))->isSatisfyBy($piece)
        ) {
            dd('pièce valide');
        }
    }

    /**
     * Renvoie le nombre de point manquant pour la tour
     *
     * @return integer
     */
    public function pointsManquants(): int {
        $pointsDesires = $this->largeurDesiree * $this->longeurDesiree * $this->hauteurDesiree;
        return $pointsDesires - $this->pointsActuels();
    }

    /**
     * Renvoie le nombre de points actuels composés par les pièces qui ont été ajoutées à la tour.
     *
     * @return integer
     */
    public function pointsActuels(): int {
        $points = 0;
        foreach ($this->piecesComposantLaTour as $piece) {
            $points += $piece->taille();
        }
        return $points;
    }

    public function largeur(): int {
        return $this->largeurDesiree;
    }

    public function longeur(): int {
        return $this->longeurDesiree;
    }

    public function hauteur(): int {
        return $this->hauteurDesiree;
    }
}