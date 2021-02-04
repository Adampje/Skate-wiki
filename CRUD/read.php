<?php
include("./connect_db.php");

// Dit is de select query voor het opvragen van alle records uit de tabel users.
$sql = "SELECT * FROM `nummers`";

// Dit is de functie edie de query $sql via de verbinding $conn naar de database stuurt.

$result = mysqli_query($conn, $sql);

$records = "";

     // De while loop geeft alle gegevens weer uit de tabel users.

     while ($record = mysqli_fetch_assoc($result)) {
        $records .= "<tr>
        <th><th scope='row'>" . $record["id"] . "</th>
        <td>"  . $record["Artist"] . "</td>
        <td>"  . $record["Song"] . "</td>
        <td>"  . $record["Year"] . "</td>
        <td> 
        <a href='update.php? id =" . $record["..."] ."' >
          <img src= './img/icons/b_edit.png' alt='pencil'>
          </a>
        </td>
        <td> 
        <a href='delete.php? id=" . $record["..."] ."' >
          <img src= './img/icons/b_drop.png' alt='cross'>
          </a>
        </td>
        </tr>";
      }


?>