<?php
namespace App\CarteMoinsBien;

class CarteMagic extends Carte
{
    public function description(): string {
        return 'je suis une carte magic';
    }

    public float $prix {
        get {
            return parent::$prix::get() + 2;
        }
    }
}
