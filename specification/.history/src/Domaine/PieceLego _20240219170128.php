<?php

namespace App\Domaine;

class PieceLego {
    public function __construct(
        private string $couleur,
        private string $forme,
        private int $largeur,
        private int $longeur,
        private int $hauteur
    ) {}

    public function couleur() {
        return $this->couleur;
    }

    public function forme() {
        return $this->forme;
    }

    public function largeur() {
        return $this->largeur;
    }

    public function longeur() {
        return $this->longeur;
    }

    public function hauteur() {
        return $this->hauteur;
    }
}