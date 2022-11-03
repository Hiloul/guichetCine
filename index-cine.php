<?php
require __DIR__."/classes/Ticket.php";
require __DIR__."/classes/TicketCine.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
       
    
    $cine1 = new Ticket($_POST['date'],
    $_POST['placeChoice'],
    $_POST['tarifs'],
    ,
    );
}
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

<form action="classes/Ticket.php" method="post">
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
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cine1 ->showAll();
      
    }

    ?>
</body>
</html>