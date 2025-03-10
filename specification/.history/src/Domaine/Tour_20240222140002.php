<?php

namespace App\Domaine;

use App\Domaine\Specification\EstUnePieceValidePourLaTour;

class Tour
{
    private array $piecesComposantLaTour = [];

    public function __construct(private $couleur, private int $hauteurDesiree, private int $longeurDesiree, private $largeurDesiree)
    {
    }

    public function ajouterPiece(PieceLego $piece): void {
        if ($piece->couleur() === $this->couleur 
            && $piece->largeur() < $this->largeur() 
            && $piece->hauteur() < $this->hauteur()
            && $piece->longeur() < $this->longeur()
            && $piece->taille() < $this->pointsManquants()) {
            $this->piecesComposantLaTour[] = $piece;
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

    public function couleur(): string {
        return $this->couleur;
    }
}