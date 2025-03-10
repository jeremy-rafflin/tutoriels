<?php
namespace Carte1;

class MauvaiseFaconCarteMagic extends MauvaiseFaconCarte
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
