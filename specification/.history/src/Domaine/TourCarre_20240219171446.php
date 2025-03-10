<?php

namespace App\Domaine;

class TourCarre
{
    private array $piecesComposantLaTour = [];

    public function __construct(private $couleur, private int $hauteur, private $largeurDesiree)
    {
    }

    public function ajouterPiece(PieceLego $piece): void {
        // TODO
    }

    public function pointsManquants(): int {
        $pointsDesires = $this->largeurDesiree * $this->largeurDesiree * $this->hauteurDesiree;
        return max(0, $pointsDesires - $this->pointsActuels);
    }

}