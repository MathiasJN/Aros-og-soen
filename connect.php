<?php
//Definer konstanter med databaseforbindelse info
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "root");
define("DBNAME", "aros_og_soen");

  $conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
  
