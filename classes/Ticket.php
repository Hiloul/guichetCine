<?php

//classparent

class Ticket{


public function __construct(string $date, string $placeChoice, float $tarifAdulte, float $tarifEnfant)
{
    $this->date=$date;
    $this->$placeChoice=$placeChoice;
    $this->$tarifAdulte=$tarifAdulte;
    $this->$tarifEnfant=$tarifEnfant;
}
  public function showAll() {
        ?>
        <h2>Guichet Principal:</h2>
        <p>Date : <?=$this->date?></p>
        <p>Place: <?=$this->placeChoice?></p>
        <p>Tarifs: <?=$this->tarifAdulte?> </p>
        <p>Tarifs: <?=$this->tarifEnfant?></p>
        <?php
        
    }
}
?>
