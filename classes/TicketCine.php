<link rel="stylesheet" href="style/style.css">
<?php
class TicketCine extends Ticket{
    public string $filmChoice;
    protected int $salle;
    protected int $age;
    public int $seance;
    
    public function __construct(
    string $date, int $placeChoice, 
    float $tarifs, string $filmChoice,
    int $salle, int $age, int $seance)
    {
        parent::__construct($date, $placeChoice, $tarifs);
        $this->filmChoice=$filmChoice;
        $this->salle=$salle;
        $this->seance=$seance;
        $this->age=$age;
    }
    public function getSalle(){
        return $this->salle;
    }
public function getAge(){
    return $this->age."ans";
}

    public function afficherTicket(){?>
        <h2>Ticket Cinéma</h2>
        <p>Film:<?=$this->filmChoice?> </p>
        <p>Salle: <?=$this->getSalle()?></p>
        <p>Seance: <?=$this->seance?></p>
        <p>Age: <?=$this->getAge()?></p>
        <?php
    }

}


?>

