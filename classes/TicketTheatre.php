<link rel="stylesheet" href="style/style.css">
<?php

class TicketTheatre extends Ticket{
    public string $pieceChoice;
    protected int $heureDebutSeance;
    protected float $heureEntracte;

    public function __construct(string $pieceChoice,
    int $heureDebutSeance, float $heureEntracte)
    {
        parent::__construct($pieceChoice, $heureDebutSeance, $heureEntracte);
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
    
    <h2>Ticket Thêatre</h2>
    <p>Film:<?=$this->pieceChoice?> </p>
    <p>Heure: <?=$this->getHeureDebut()?></p>
    <p>Entracte: <?=$this->getEntract()?></p>
   
    <?php
       
    }

}




?>

