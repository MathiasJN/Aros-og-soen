<?php
include_once 'connect.php';

  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $phone_number = $_POST['phone_number'];
  $mail = $_POST['mail'];
  $postal_code = $_POST['postal_code'];
  $adress = $_POST['adress'];
  $department_id = $_POST['department_id'];

  $sql = "SELECT * FROM employees;";
  $sql_2 = "INSERT INTO employees (department_id, e_first_name, e_last_name, phone_number, mail, postal_code, adress) VALUES ('$department_id','$first_name', '$last_name', '$phone_number', '$mail', '$postal_code', '$adress');";
  $result = mysqli_query($conn, $sql_2);
  $resultCheck = mysqli_num_rows($result);


  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['e_first_name'] . "<br>";
      echo $row['e_last_name'] . "<br>";
      echo $row['phone_number'] . "<br>";
      echo $row['mail'] . "<br>";
      echo $row['postal_code'] . "<br>";
      echo $row['adress'] . "<br>";
    }
  }

header("medarbejder.php?nymedarbeder=Succes");
