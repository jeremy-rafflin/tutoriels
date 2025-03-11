<?php
namespace App\CarteOk;

interface CarteInterface
{
    public float $prix { get; }
    public float $dimension { get; }
    public function description();
}
