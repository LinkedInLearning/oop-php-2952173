<?php
require_once("Konto.class.php");
require_once ("IGeschaeftsKonditionen.interface.php");
class Geschaeftskonto extends Konto implements IGeschaeftsKonditionen
{

    public function __construct(float $kntstand, string $knttyp)
    {
        parent::__construct($kntstand, $knttyp);
    }
    
    public function auszahlen(float $betrag)
    {
        if($this->kntstand - $betrag >= 0) {
            $this->kntstand -= $betrag;
            return "Der gewünschte Betrag $betrag EUR wurde ausgezahlt. Ihr neuer Kntstand beträgt " . $this -> getKntstand() . " EUR. " . 
                "Für den positiven Einlageebetrag erhalten Sie Zinsen in Höhe von " .IGeschaeftsKonditionen::ZINSSATZ. "%<br />";
        }
        else if($this->kntstand - $betrag >= -IGeschaeftsKonditionen::KREDITLIMIT) {
            $this->kntstand -= $betrag;
            return "Der gewünschte Betrag $betrag EUR wurde ausgezahlt. Ihr neuer Kntstand beträgt " . $this -> getKntstand() . " EUR. " .
                "Sie nutzen für den negativen Betrag einen Dispokredit von " .IGeschaeftsKonditionen::DISPOZINS . "%<br />";
            
        }
        else if($this->kntstand - $betrag < -IGeschaeftsKonditionen::KREDITLIMIT) {
            return "Ihr Disporahmen ist überschritten. Der gewünschte Betrag kann nicht ausgezahlt werden.<hr />";
        }
    }
}
?>
