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

 ?>
