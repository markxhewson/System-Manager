<?php
  $servername = "localhost";
  $username = "admin";
  $password = "admin2";
  $dbname = "skycloud";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $currentRank = $_COOKIE["rank"];
  echo $currentRank;

  $sql = "SELECT name, id, permission, server, expiry FROM luckperms_group_permissions WHERE name = '$currentRank'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
      echo "<div class='rankData'>
        <p>".$row['id'].": '".$row['permission']."' (".$row['server'].")"."</p>
      </div>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>