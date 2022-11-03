<link rel="stylesheet" href="style/style.css">
<?php








//classparent

class Ticket{
  
public function __construct(string $date, int $placeChoice, float $tarifs)
{
    $this->date = date('d-m-Y',strtotime($date));
    $this->placeChoice=$placeChoice;
    $this->tarifs=$tarifs;
    
}
  public function showAll() {
        ?>
        <h2>Guichet Principal:</h2>
        <p>Date : <?=$this->date?></p>
        <p>Place: <?=$this->placeChoice?></p>
        <p>Tarifs: <?=$this->tarifs?> </p>
        <?php
        
    }

   
}
?>
