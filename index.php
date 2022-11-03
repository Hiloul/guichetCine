<?php
require __DIR__."/classes/Ticket.php";
require __DIR__."/classes/TicketCine.php";
require __DIR__."/classes/TicketTheatre.php";

$ticket1= new Ticket("20/05",5,10.99,5.99);
$ticket1->afficherTicket();


$cine1= new TicketCine("22/08",6,10.99,"Matrix",2,18,2);
$cine1->afficherTicket();
echo '<br>';
// var_dump($cine1);

$theatre1= new TicketTheatre("22/07",7,5.99,"Piece de theatre",18,19.30);
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
    <title>Guichet</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
  



<h1>Guichet</h1>

<form action="classes/TicketCine.php" method="post">
    <p>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date">
    </p>
    <p>
        <label for="place">Place:</label>
        <input type="number" id="place" name="place">
    </p>
    <p>
        <label for="tarifs">Tarifs: </label>
        <input type="number" name="tarifs">
       
    </p>
    <p>
        <input type="submit" value="Envoyer" name="submitTicket">
    </p>
    
</form>

</body>
</html>