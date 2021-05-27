<?php
  //include("header.php");
  include_once 'connect.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aros og Søn - Medarbejdere</title>
  </head>
  <body>

  <form action="ny_medarbejder.php" method="POST">
    <input type="text" name="first_name" placeholder="Navn">
    <br>
    <input type="text" name="last_name" placeholder="Efternavn">
    <br>
    <input type="number" name="phone_number" placeholder="Telefon Nummer">
    <br>
    <input type="text" name="mail" placeholder="E-mail">
    <br>
    <input type="number" name="postal_code" placeholder="Post Nummer">
    <br>
    <input type="text" name="adress" placeholder="Adresse">
    <br>
    <input type="number" name="department_id" placeholder="Afdeling">
    <br>
    <button type="submit" name="submit"> Indset ny medarbejder </button>
    <br>


  </body>
</html>
