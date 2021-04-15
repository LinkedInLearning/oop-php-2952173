<?php
require_once ("Konto.class.php");
require_once ("IPrivatKonditionen.interface.php");
class Privatkonto extends Konto implements IPrivatKonditionen
{

    public function __construct(float $kntstand, string $knttyp)
    {
        parent::__construct($kntstand, $knttyp);
    }

    public function auszahlen(float $betrag)
    {
        if($this->kntstand - $betrag >= 0) {
          $this->kntstand -= $betrag;
          return "Betrag $betrag EUR wurde ausgezahlt. Neuer Kontostand beträgt " . $this -> getKntstand() . " EUR.<br />";
        }
        else if($this->kntstand - $betrag >= -IPrivatKonditionen::KREDITLIMIT) {
            $this->kntstand -= $betrag;
            return "Betrag $betrag EUR wurde ausgezahlt und Ihr neuer Kontostand beträgt " . $this -> getKntstand() . " EUR. " .
                "Sie haben allerdings ein negatives Guthaben und nutzen für den negativen Betrag einen Dispokredit von " .IPrivatKonditionen::DISPOZINS . "%<br />";
            
        }
        else if($this->kntstand - $betrag < -IPrivatKonditionen::KREDITLIMIT) {
            return "Disporahmen überschritten. Der gewünschte Betrag kann nicht ausgezahlt werden.<hr />";
        }
    }
}
?>
