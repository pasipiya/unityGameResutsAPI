<?php

  // collect value of input field
  $gameResults = $_POST['gameResults'];
  if (empty($gameResults)) {
    echo "Name is empty";
  } else {
    echo $gameResults;
  }

?>