<?php
try{
  $db= new PDO('mysql:host=127.0.0.1;dbname=tgib','root', '');
}catch (PDOException $e){
  echo '<p>whoops, something went wrong</p>';
  echo '<br>';
  echo '<a href="http://localhost/TinDog-Start-master/">Go Back To Homepage</a>';
  exit();
}

print_r(db);
