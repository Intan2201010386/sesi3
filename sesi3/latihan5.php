<?php
    //PHP Associative Array
    //model 1
   // $Age = array("Peter"=>"35", "Ben"=>"37", "joe"=>"43");

   //header("Content-Type: application/json");
   //echo json_encode($Age);

   
   //model 2
    $Age["Agus"] = "35";
    $Age["Agnes"] = "65";
    $Age["Jarjit"] = "30";
    $Age["Nurul"] = "25";
    $Age["Rose"] = "35";

    header("Content-Type: application/json");
    echo json_encode($Age);