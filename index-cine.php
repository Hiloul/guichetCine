<?php
require __DIR__."/classes/Ticket.php";
require __DIR__."/classes/TicketCine.php";


if (isset($_POST['submitTicket'])){
       
    
    $cine1 = new TicketCine($_POST['filmChoice'],
    $_POST['salle'],
    $_POST['age'],$_POST['seance'],
    );
}
?>


<h1>Guichet Cine</h1>
<form action="index-cine.php" method="post">
    <p>
        <label for="filmChoice">Film:</label>
        <input type="text" id="filmChoice" name="filmChoice">
    </p>
    <p>
        <label for="salle">Salle:</label>
        <input type="number" id="salle" name="salle">
    </p>
    <p>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age">
    </p>
    <p>
        <label for="seance">Seance: </label>
        <input type="number" name="seance">
       
    </p>
    <p>
        <input type="submit" value="Envoyer" name="submitTicket">
    </p>
    
</form>
<?php
    if (isset($_POST['submitTicket'])){
        $cine1 ->afficherTicket();
      
    }

    ?>
