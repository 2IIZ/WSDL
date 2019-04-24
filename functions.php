<?php

function price($name){
  $details = array(
    'abc' => 100,
    'def' => 200
  );

  foreach ($details as $key => $value) {
    if($name==$key)
      $price = $value;
  }
  return $price;
}

function allUsers(){
  // return "Hello";
  try {
    $pdo = new PDO('mysql:host=localhost; dbname=gestion_visites;', 'root', '');
  } catch (\Exception $e) {
      die('Erreur :'.$e->getMessage());
  }
  $query = $pdo->prepare("SELECT name FROM users");
  $query->execute();
  $result = $query->fetchAll();
  return json_encode($result);
}
