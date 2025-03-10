<?php
namespace App\Domaine;

class PieceLego {
    public function __construct(
        private string $couleur,
        private string $forme,
        private int $largeur, // Nombre de cases de large
        private int $longeur, // Nombre de cases de long
        private int $hauteur // Hauteur en cases
    ) {}

    public function couleur(): string {
        return $this->couleur;
    }

    public function forme(): string {
        return $this->forme;
    }

    public function largeur(): int {
        return $this->largeur;
    }

    public function longeur(): int {
        return $this->longeur;
    }

    public function hauteur(): int {
        return $this->hauteur;
    }

    public function taille(): int {
        return $this->largeur * $this->longeur * $this->hauteur;
    }
}
