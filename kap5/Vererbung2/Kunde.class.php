<?php

class Kunde extends Person
{
    private $konto = null;
    public function getKonto(): Konto
    {
        return $this->konto;
    }
}
