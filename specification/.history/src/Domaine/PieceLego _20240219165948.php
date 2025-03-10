<?php

namespace App\Domaine;

class PieceLego {
    public function __construct(
        private string $couleur,
        private string $forme,
        private int $largeur,
        private int $longeur
    ) {}
}