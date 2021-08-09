<?php

  // collect value of input field
  $gameResults = $_POST['gameResults'];
  if (empty($gameResults)) {
    echo "Name is empty";
  } else {
    // encode array to json
    $json = json_encode($gameResults);

    //write json to file
    if (file_put_contents("data.json", $json))
        echo "JSON file created successfully...";
    else 
        echo "Oops! Error creating json file...";
    }

?>