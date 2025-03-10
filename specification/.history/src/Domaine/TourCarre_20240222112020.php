<?php

namespace App\Domaine;

class TourCarre
{
    private array $piecesComposantLaTour = [];

    public function __construct(private $couleur, private int $hauteurDesiree, private $longeurDesiree, private $largeurDesiree)
    {
    }

    public function ajouterPiece(PieceLego $piece): void {
        // TODO
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
}