<?php
require_once ("IAuszahlungen.interface.php");

abstract class Konto implements IAuszahlungen
{

    protected float $kntstand = 0;

    private $knttyp = "";

    public function __construct(float $kntstand, string $knttyp)
    {
        $this->kntstand = $kntstand;
        $this->setKnttyp($knttyp);
    }

    public function einzahlen(float $betrag)
    {
        $this->kntstand += $betrag;
    }

    public function setKnttyp(string $knttyp)
    {
        $this->knttyp = $knttyp;
    }

    public function getKnttyp(): string
    {
        return $this->knttyp;
    }

    public function getKntstand(): float
    {
        return $this->kntstand;
    }
}
?>
