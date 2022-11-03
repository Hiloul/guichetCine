<?php
require __DIR__."/classes/Ticket.php";
require __DIR__."/classes/TicketTheatre.php";


if (isset($_POST['submitTicket'])){
       $theatre1=new TicketTheatre($_POST['pieceChoice'], $_POST['heureDebutSeance'], $_POST['heureEntracte'],);
    
   
}
?>
  


<h1>Guichet Theatre</h1>
<form action="index-theatre.php" method="post">
    <p>
        <label for="pieceChoice">Piece:</label>
        <input type="text" id="piecChoice" name="pieceChoice">
    </p>
    <p>
        <label for="salle">Début:</label>
        <input type="number" id="heureDebutSeance" name="heureDebutSeance">
    </p>
    <p>
        <label for="age">Entracte:</label>
        <input type="number" id="heureEntracte" name="heureEntracte">
    </p>
    
    <p>
        <input type="submit" value="Envoyer" name="submitTicket">
    </p>
    
</form>
<?php
    if (isset($_POST['submitTicket'])){
        $theatre1 ->afficherTicket();
      
    }

    ?>
