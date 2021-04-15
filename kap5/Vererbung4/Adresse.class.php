<?php

class Adresse
{
    private string $ort;
    private string $plz;
    private string $strasse;
    private string $nr;
    public function __construct(string $ort, string $plz, string $strasse, string $nr) {
        $this -> ort = $ort;
        $this -> plz = $plz;
        $this -> strasse = $strasse;
        $this -> nr = $nr;
    }
   public function setOrt(string $ort)
    {
        $this->ort = $ort;
    }
    public function getOrt(): string
    {
        return $this->ort;
    }

    public function setPlz(string $plz)
    {
        $this->plz = $plz;
    }
    public function getPlz(): string
    {
        return $this->plz;
    }
    public function setStrasse(int $strasse)
    {
        $this->strasse = $strasse;
    }
    public function getStrasse(): int
    {
        return $this->strasse;
    }
    public function setNr(string $nr)
    {
        $this->nr = $nr;
    }
    public function getNr(): string
    {
        return $this->nr;
    }
  

}
