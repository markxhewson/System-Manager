<?php
  $servername = "localhost";
  $username = "admin";
  $password = "admin2";
  $dbname = "skycloud";

  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT `name` FROM luckperms_groups";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $default = "default";
    
    while($row = $result->fetch_assoc()) {
      $rank = $row["name"];
  
      if ($rank != $default) 
        echo
          "<div id='$rank' class='rank' onclick='updateCurrentRank($rank)'>
            <h3>".$row['name']."</h3>
          </div>";
      }
    } else {
    echo "0 results";
  }
  $conn->close();
?>