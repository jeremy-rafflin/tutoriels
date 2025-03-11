<?php
namespace App\CarteMoinsBien;

interface CarteInterface
{
    public float $prix { get; }
    public float $dimension { get; }
    public function description();
}
