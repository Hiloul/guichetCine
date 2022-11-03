<link rel="stylesheet" href="style/style.css">
<?php

class TicketTheatre extends Ticket{
    public string $pieceChoice;
    protected int $heureDebutSeance;
    protected float $heureEntracte;

    public function __construct(string $date, int $placeChoice, 
    float $tarifs, string $pieceChoice,
    int $heureDebutSeance, float $heureEntracte)
    {
        parent::__construct($date, $placeChoice, $tarifs);
        $this->pieceChoice=$pieceChoice;
        $this->heureDebutSeance=$heureDebutSeance;
        $this->heureEntracte=$heureEntracte;
    }
public function getHeureDebut(){
return $this->heureDebutSeance.'H';
}
public function getEntract(){
    return $this->heureEntracte.'H';
}

    public function afficherTicket(){?>
    <form action="" id="ticketT">
    <h2>Ticket Thêatre</h2>
    <p>Film:<?=$this->pieceChoice?> </p>
    <p>Heure: <?=$this->getHeureDebut()?></p>
    <p>Entracte: <?=$this->getEntract()?></p>
    </form>
    <?php
       
    }

}




?>

