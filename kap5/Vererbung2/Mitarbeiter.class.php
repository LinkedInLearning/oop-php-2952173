<?php

class Mitarbeiter extends Person
{
    private $personalnr = 0;
    public function setPersonalnr(string $personalnr)
    {
        $this->personalnr = $personalnr;
    }
    public function getPersonalnr(): string
    {
        return $this->personalnr;
    }
}
