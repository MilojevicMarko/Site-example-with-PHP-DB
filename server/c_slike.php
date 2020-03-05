<?php
class Slike {
    private $Naslov;
    private $Putanja;

    public CitajSlike() {
        return $this->Naslov . ";" . $this->Putanja;
    }
}
?>