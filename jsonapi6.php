<?php
 $items = array();
 
 for($i = 0; $i < 10; $i++) {
 $items[$i] = " this is message $i";
 }
 header('content-Type: application/json');
 
 $jsonOutput = json_encode($items);
 
 echo $jsonOutput;
