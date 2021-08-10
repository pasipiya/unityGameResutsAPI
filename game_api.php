<?php
  if (empty($_POST['id'])) {
    echo "Game reslts are empty";
  } elseif(file_exists("game1.json")) {
    $id = $_POST['id'];
    $result = $_POST['result'];
    $timeStamp = $_POST['timeStamp'];

    //Get input json
    $inp = file_get_contents('game1.json');
    $tempArray = json_decode($inp,true);

    //Build gameResult array
    $gameResults = [ 
      "id" => $id,
      "result" => $result,
      "timeStamp" => $timeStamp
    ];

    //Append new game results
    array_push($tempArray,$gameResults);
    $jsonData = json_encode($tempArray);
    echo $jsonData."<br>";
 
    //write json to file
    if (file_put_contents("game1.json", $jsonData))
        echo "JSON file created successfully...";
    else 
        echo "Oops! Error creating json file...";

  }else{
    echo "Json file is not available";
  }
   



?>