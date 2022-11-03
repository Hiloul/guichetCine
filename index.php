<?php
require __DIR__."/classes/Ticket.php";
require __DIR__."/classes/TicketCine.php";
require __DIR__."/classes/TicketTheatre.php";


$cine1= new TicketCine("22/08","milieu",10.99,6.99,"Matrix",2,18,5);
$cine1->afficherTicket();
echo '<br>';
// var_dump($cine1);

$theatre1= new TicketTheatre("22/07","devant",5.99,3.99,"mouuuf le chat qui Deuh",18,19.30);
$theatre1->afficherTicket();
echo '<br>';
// var_dump($theatre1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Guichet</title>
</head>
<body>
  



<h1>Guichet</h1>

<form action="index.php" method="post">
    <p>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date">
    </p>
    <p>
        <label for="place">Place:</label>
        <input type="text" id="place" name="place">
    </p>
    <p>
        <label for="tarifs">Tarifs: </label>
        <label for="adulte">Adulte</label>
        <input type="checkbox" name="tarifAdulte" id="tarifadulte">
        <label for="enfant">Enfant</label>
        <input type="checkbox" name="tarifEnfant" id="tarifenfant">
       
    </p>
    <p>
        <input type="submit" value="Envoyer" name="submitTicket">
    </p>
    
</form>


</body>
</html>