<?php

class TicketTheatre extends Ticket{
    public string $pieceChoice;
    protected int $heureDebutSeance;
    protected float $heureEntracte;

    public function __construct(string $date, string $placeChoice, 
    float $tarifAdulte, float $tarifEnfant, string $pieceChoice,
    int $heureDebutSeance, float $heureEntracte)
    {
        parent::__construct($date, $placeChoice, $tarifAdulte, $tarifEnfant);
        $this->pieceChoice=$pieceChoice;
        $this->heureDebutSeance=$heureDebutSeance;
        $this->heureEntracte=$heureEntracte;
    }
public function getHeureDebut(){
return $this->heureDebutSeance;
}
public function getEntract(){
    return $this->heureEntracte;
}

    public function afficherTicket(){
        echo $this->pieceChoice." ".$this->getHeureDebut()." ".$this->getEntract();
    }

}




?>

