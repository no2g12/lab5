<?php
  $db = new mysqli("comp2203.ecs.soton.ac.uk", "comp2203-lab5", "WL2133r1lM7lzp1706Ne", "compww03-lab5");
  
  if($db->connect_error){
    die("Could not connect to the database");
  }
?>
// include file for part 1