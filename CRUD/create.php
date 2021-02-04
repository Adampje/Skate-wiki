<?php

include("./connect_db.php");

include("./functions.php");

  $'...' = sanitize($_POST["..."]);
  $'...' = sanitize($_POST["..."]);
  $'...' = sanitize($_POST["..."]);


// Dit is de sql-query die de ingevulde gegevens wegschrijft naar de tabel nummers
$sql = "INSERT INTO `...` (`...`, `...`, `...`) VALUES ('$...', '$...', '$...')"; 

// Dit is de funcit edie de query $sql via de verbinding $conn naar de database stuurt.
mysqli_query($conn, $sql);

header("Location: ./read.php");

?>